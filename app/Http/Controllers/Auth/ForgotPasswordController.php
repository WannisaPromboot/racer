<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Customer;
use Hash;
use Crypt;
use Mail;


class ForgotPasswordController extends Controller
{
    public function ForgotPassword(Request $request){

        $email= $request->input('email');
        $psw = str_random(10);
        $newpsw = Crypt::encryptString($psw);
        $sql = Customer::where('email',$email)->first();
        if(!empty($sql)){
            Customer::where('email',$email)->update(['password'=>$newpsw]);
            Mail::raw('ถึง คุณ '.$sql->firstname.'  '.$sql->lastname.'รหัสผ่านใหม่ของคุณ คือ '.$psw,  
                function($message) use ($email){
                    $message->to($email)
                            ->subject('การเปลี่ยนรหัสผ่าน')
                            ->from('58030218@kmitl.ac.th','Racer');
            });
        }else{
            return redirect('forgot')->with('error','ไม่พบบัญชีอีเมลนี้ กรุณากรอกอีกเมลใหม่');
        }
        

        
    }

    


}
