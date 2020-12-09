<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\AdminLogin;
use Crypt;
use Session;
use Redirect;

class UsersController extends Controller
{
      public function LoginAdmin(){
          return view('Admin.users.login');
      }  

      public function ShowUserContent(){
        $users =   Admin::get();
        return view('Admin.users.users-content',['users'=> $users]);
    } 

    public function LogoutAdmin(){

        if(!empty(Session::get('admin_id')) && !empty(Session::get('admin_ip')) ){
            $update = AdminLogin::where('admin_id',Session::get('admin_id'))
                                    ->where('ip',Session::get('admin_ip'))
                                    ->orderBy('created_at','desc')
                                    ->first();
            
            $update->duration = $this->diff2time($update->created_at,date('Y-m-d H:i:s'));

            $update->save();
        }


        Session::forget('admin_id');
        Session::forget('admin_name');
        Session::forget('admin_status');  
        return redirect('Login_admin');
    }

    public function AddUser(){

        return view('Admin.users.add-users');
    } 
    
    public function EditUser($id){
        $user = Admin::where('id',$id)->first();
        return view('Admin.users.edit-users',['user' => $user ]);
    } 

    public function CreatedUser(Request $request)
    {   

        $regis_ = Admin::where('email_staff',$request->input('email_regis'))->first();
        if(!empty($regis_)){
            $error_mes = ' มีบัญชีนี้อยู่แล้ว กรุณากรอกข้อมูลใหม่';
            $data = array(
                'error_mes' =>  $error_mes
            );
            return view('Admin.users.add-users',$data);
        }else{
            if($request->input('password_regis') ==  $request->input('repassword_regis')){
               $last = date('dmy').mt_rand( 1000, 9999);
               
                ////encrypassword
                $pws = Crypt::encryptString($request->input('password_regis'));
                $newCustomers = new Admin;

                $newCustomers->id_staff = $last ;
                $newCustomers->name_staff = $request->input('fname_regis') ;
                $newCustomers->lastname_staff = $request->input('lname_regis');
                $newCustomers->email_staff =$request->input('email_regis') ;
                $newCustomers->role =$request->input('role') ;
                $newCustomers->password_staff = $pws ;

                $newCustomers->save();  
                return Redirect::to('usercontent')->with('save', 'เพิ่มข้อมูลเรียบร้อย');
    
            }else{
                $error_mes = 'รหัสผ่านไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง';
                $data = array(
                    'error_pass' =>  $error_mes
                );
                return view('Admin.users.add-users',$data);
    
            }

        }
        
   
    }

    public function updateUser(Request $request)
    {   

        $user = Admin::where('email_staff',$request->input('email_regis'))->first();
        if(isset($request->password_regis)){
            $pws = Crypt::encryptString($request->input('password_regis'));
            $user->password_staff  = $pws;    
        }

        if(isset($request->fname_regis)){
            $user->name_staff  =   $request->fname_regis;    
        }

        if(isset($request->lname_regis)){
            $user->lastname_staff  =   $request->lname_regis;    
        }

        if(isset($request->email_regis)){
            if(empty($user)){
                $user->email_staff  =   $request->email_regis;    
            }else if($request->email_regis != $user->email_staff){
                $data = array(
                    'error_mes' =>  'บัญชีนี้มีอยู่แล้ว กรุณากรอกข้อมูลใหม่',
                    'user'      =>  $user->id
                );
                return view('Admin.users.edit-users',$data);
            }
          
        }
        
        if(isset($request->role)){
            $user->role  =   $request->role;    
        }
        $user->save();
         return Redirect::to('usercontent')->with('save', 'แก้ไขข้อมูลดเรียบร้อย');
   
    }


    
    public function CheckLoginAdmin(Request $request){
        $customer = Admin::where('email_staff',$request->input('email'))->first();
        if(!empty($customer)){
            $decryptedpws = Crypt::decryptString($customer->password_staff);
            if($request->input('password')==$decryptedpws){
                Session::put('admin_id',$customer->id_staff);
                Session::put('admin_name',$customer->name_staff.' '.$customer->lastname_staff);
                Session::put('admin_status',$customer->role);  
                Session::save();
                // $this->getIP( Session::get('admin_id'),$request->getClientIp());
                return redirect('home');
            }else{
                return redirect('admin')->with('error','อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');
                    
            }
        }else{
            return redirect('admin')->with('error','อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');

        }

        
    }


    public static function getIP($user,$ip){
        Session::put('admin_ip',$ip);
        $NewLogin   = new AdminLogin;
        $NewLogin->admin_id = $user;
        $NewLogin->ip =  $ip;
        $NewLogin->save();
         
     }

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


}
