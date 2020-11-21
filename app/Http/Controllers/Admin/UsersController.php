<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminStaff;
use App\AdminLogin;
use Crypt;
use Session;
use Redirect;

class UsersController extends Controller
{
      public function LoginAdmin(){
          return view('Admin.auth.login1');
      }  

      public function ShowUserContent(){
        $users =   AdminStaff::get();
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
        $user = AdminStaff::where('id',$id)->first();
        return view('Admin.users.edit-users',['user' => $user ]);
    } 

    public function CreatedUser(Request $request)
    {   

        $regis_ = AdminStaff::where('email',$request->input('email_regis'))->first();
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
                $newCustomers = new AdminStaff;

                $newCustomers->id = $last ;
                $newCustomers->firstname = $request->input('fname_regis') ;
                $newCustomers->lastname = $request->input('lname_regis');
                $newCustomers->email =$request->input('email_regis') ;
                $newCustomers->role =$request->input('role') ;
                $newCustomers->password = $pws ;

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

        $user = AdminStaff::where('email',$request->input('email_regis'))->first();
        if(isset($request->password_regis)){
            $pws = Crypt::encryptString($request->input('password_regis'));
            $user->password  = $pws;    
        }

        if(isset($request->fname_regis)){
            $user->firstname  =   $request->fname_regis;    
        }

        if(isset($request->lname_regis)){
            $user->lastname  =   $request->lname_regis;    
        }

        if(isset($request->email_regis)){
            if(empty($user)){
                $user->email  =   $request->email_regis;    
            }else if($request->email_regis != $user->email){
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
    
            $customer = AdminStaff::where('email',$request->input('email'))->first();
           

            if(!empty($customer)){
                $decryptedpws = Crypt::decryptString($customer->password);
                //dd(  $decryptedpws );
                if($request->input('password')==$decryptedpws){
                    
                    Session::put('admin_id',$customer->id);
                    Session::put('admin_name',$customer->firstname.' '.$customer->lastname);
                    Session::put('admin_status',$customer->role);  
                    Session::save();

                    $this->getIP( Session::get('admin_id'),$request->getClientIp());

                    return redirect('home');
               }else{
                       
                   $error_mes = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง';
                   $data = array(
                               'error_mes' => $error_mes
                   );
   
                   return view('Admin.auth.login1',$data);
                      
               }
            }else{
                $error_mes = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง';
                $data = array(
                            'error_mes' => $error_mes
                );

                return view('Admin.auth.login1',$data);
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
