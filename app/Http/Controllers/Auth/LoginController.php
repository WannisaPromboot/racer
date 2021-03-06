<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;
use App\CustomerLogin;
use Session;
use Crypt;
use Auth;
use Redirect;
use App\SocialAccount;
use App\Customer;
use  Socialite;



class LoginController extends Controller
{

    //BEGIN SOCIALITE
    ///// Customer is model which insert user login 
    public function redirectToProvider($provider)
    {
       return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider,Request $request)
    {   
        if(!empty($request->error_code)){
           return redirect('userlogin');

        }else{

            $random = mt_rand(1000000000, 9999999999);
            try {
                $user = Socialite::driver($provider)->user();
            
                $input['customer_id']=  $random ;
                $input['name'] = $user->getName();
                $input['email'] = $user->getEmail();
                $input['provider'] = $provider;
                $input['provider_id']=  $user->getId();
                $input['lastlogin']=  date("Y-m-d");

                $authUser = $this->findOrCreate($input,$provider,$user->getId(),$random );
                Customer::where('email',$user->getEmail())->update(['lastlogin'=> date("Y-m-d")]);

                Session::put('username',$user->getName()); 
                $this->customerlogin(Session::get('customer_id'));
                // Session::put('currency','THB');

                // $this->getIP( Session::get('customer_id'),$request->getClientIp());

                // if(!empty(Session::get('paynow')) || !empty(Session::get('paystore')) || !empty(Session::get('booknow')) ){
                //     return redirect('appointment/'.Session::get('id_store').'');
                // }else if(!empty(Session::get('flashsale'))){
                //     return redirect('payment_method/'.Session::get('flashsale')['booking_id']);
                // }else{

                    return redirect('/');
                // }
            

            } catch (Exception $e) {

                return redirect('userlogin');

            }
        }
        
    }
    /////////find or create 
    public function findOrCreate($input,$provider,$provider_id,$id){
    	$checkIfExist = Customer::where('provider',$provider)
                           ->where('provider_id',$provider_id)					   	 
                           ->first();

        if(!empty($checkIfExist)){
            Session::put('customer_id',$checkIfExist->customer_id);
            return $checkIfExist;
        }else{
            Session::put('customer_id',$id);
            return Customer::insert($input);
        }
	}

    //END SOCIALITE
    
    public function LogIn(Request $request,$model){
        $CustomerModel= '\\App\\'.$model;
        $emailuser = $CustomerModel::where('email',$request->email)->first();
        if(!empty($emailuser)){
            $decryptedpws = Crypt::decryptString($emailuser->password);
            if($request->password==$decryptedpws){
                Session::put('customer_id',$emailuser->customer_id);
                Session::put('username',$emailuser->name); 
                // Session::put('currency','THB');
                $CustomerModel::where('email',$request->email)->update(['count'=> 0]);
                $CustomerModel::where('email',$request->email)->update(['lastlogin'=> date("Y-m-d")]);
            
                // $this->getIP($emailuser->customer_id,$request->getClientIp());
                $this->customerlogin($emailuser->customer_id);

                if(!empty(Session::get('product'))){
                    return redirect('cart');
                }else{
                    return redirect('/');
                }

               
            }else{
                $count = $emailuser->count +  1;
                $CustomerModel::where('email',$request->email)->update(['count'=> $count]);
                if($emailuser->count > 3){
                    return redirect('forgotpassword')->with('error','คุณใส่รหัสผ่านหรืออีเมลผิดเกิน 3 ครั้ง กรุณาเปลี่ยนรหัสผ่าน');
                }else{
                    
                    return redirect('userlogin')->with('error','อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');
                }
            }
        }else{                                                                  //////find customer
            return redirect('userlogin')->with('error','อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');
        }
    }


    public function LogOut()
      {
        // if(!empty(Session::get('customer_ip')) && !empty(Session::get('customer_id')) ){
        //     $update = CustomerLogin::where('customer_id',Session::get('customer_id'))
        //                             ->where('ip',Session::get('customer_ip'))
        //                             ->orderBy('created_at','desc')
        //                             ->first();
        //     $update->duration = $this->diff2time($update->created_at,date('Y-m-d H:i:s'));
        //     $update->save();
        // }

        Session::forget('customer_id');
        Session::forget('username');

        return Redirect::to('userlogin'); 
      }

    //   public static function getIP($user,$ip){

    //     Session::put('customer_ip',$ip);
    //     $NewLogin   = new CustomerLogin;
    //     $NewLogin->customer_id = $user;
    //     $NewLogin->ip =  $ip;
    //     $NewLogin->save();
         
    //  }

     /////คำนวณระยะเวลา
     function diff2time($time_a,$time_b){
        $now_time1=strtotime($time_a);
        $now_time2=strtotime($time_b);
        $time_diff=abs($now_time2-$now_time1);
        $time_diff_h=floor($time_diff/3600); // จำนวนชั่วโมงที่ต่างกัน
        $time_diff_m=floor(($time_diff%3600)/60); // จำวนวนนาทีที่ต่างกัน
        $time_diff_s=($time_diff%3600)%60; // จำนวนวินาทีที่ต่างกัน
        return $time_diff_h." ชั่วโมง ".$time_diff_m." นาที ".$time_diff_s." วินาที";
    }

    public static function customerlogin($user){
        $updateLogin  = CustomerLogin::where('customer_id',$user)->first();

        if(!empty($updateLogin)){        
            $updateLogin->count=  $updateLogin->count+1;
            $updateLogin->save();
        }else{       
            $NewLogin   = new CustomerLogin;
            $NewLogin->customer_id = $user;
            $NewLogin->count=  1;
            $NewLogin->save();
        }

    }


     
}
