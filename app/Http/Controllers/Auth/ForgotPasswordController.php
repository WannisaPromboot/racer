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
        $sql = Customer::where('email',$email)->first();
        if(!empty($sql)){
            $psw = mt_rand(0000000, 9999999);
            $newpsw = Crypt::encryptString($psw);
            Customer::where('email',$email)->update(['password'=>$newpsw]);
            Mail::raw('ถึง คุณ '.$sql->firstname.'  '.$sql->lastname.'รหัสผ่านใหม่ของคุณ คือ '.$psw,  
                function($message) use ($email){
                    $message->to($email)
                            ->subject('การเปลี่ยนรหัสผ่าน')
                            ->from('58030218@kmitl.ac.th','Racer');
            });
            return redirect('forgot')->with('success','ระบบได้ส่งรหัสผ่านให้คุณทางอีเมลแล้ว กรุณาเข้าสู่ระบบใหม่');

        }else{
            return redirect('forgot')->with('error','ไม่พบบัญชีอีเมลนี้ กรุณากรอกอีกเมลใหม่');
        }
    }

    


}
