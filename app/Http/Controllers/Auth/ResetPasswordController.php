<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Crypt;
use Redirect;
use App\Customer;
use Session;

class ResetPasswordController extends Controller
{

        public function ResetPassword(Request $request){
                $newCustomer = Customer::where('customer_id',Session::get('customer_id'))->first();
                $pws = Crypt::encryptString($request->input('confirm-password'));
                $newCustomer->password = $pws;
                $newCustomer->status = 1;
                $newCustomer->save();
                return Redirect::to('member')->with('success','เปลี่ยนแปลงรหัสผ่านเรียบร้อยแล้ว');
        }


}
