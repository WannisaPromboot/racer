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
    public function ForgotPassword(Request $request,$model,$url){

        $email= $request->input('forgot_email');
        $psw = str_random(10);
        $newpsw = Crypt::encryptString($psw);
        $CustomerClassModel = '\\App\\'.$model;
        $newPassword = $CustomerClassModel::where('email',$email)->first();
        $newPassword->password = $newpsw;
        $newPassword->status = 2;
        $newPassword->count = 0;
        $newPassword->save();

        Mail::raw(
'ถึง คุณ '.$newPassword->firstname.'  '.$newPassword->lastname.'
     
    รหัสผ่านใหม่ของคุณ คือ '.$psw
,  
        function($message) use ($email){
        $message->to($email)
                ->subject('การเปลี่ยนรหัสผ่าน')
                ->from('58030218@kmitl.ac.th','Pokadot');
        });

        echo '<script>
        alert("กรุณาตรวจสอบอีเมล");
        window.location.href = "'.url($url).'" ;
        </script>';
    }

    


}
