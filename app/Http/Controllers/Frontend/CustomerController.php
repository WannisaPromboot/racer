<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Customer;
use Crypt;

class CustomerController extends Controller
{

    public function CustomerRegister(Request $request){
        $random = mt_rand(1000000000, 9999999999);
        $customer = new Customer;
        $customer->customer_id = $random;
        if(isset($request->name)){
            $customer->name = $request->name;
        }
        if(isset($request->lastname)){
            $customer->lastname = $request->lastname;
        }

        $decryptedpws = Crypt::encryptString($request->password);
        if(isset($request->password)){
            $customer->password = $decryptedpws;
        }
        if(isset($request->email)){
            $customer->email = $request->email;
        }

        if(isset($request->facebook)){
            $customer->facebook = $request->facebook;
        }
        if(isset($request->lineid)){
            $customer->lineid = $request->lineid;
        }
        if(isset($request->address)){
            $customer->address = $request->address;
        }
        if(isset($request->district)){
            $customer->district = $request->district;
        }
        if(isset($request->province)){
            $customer->province = $request->province;
        }
        if(isset($request->postal)){
            $customer->postalcode = $request->postal;
        }
        if(isset($request->phone)){
            $customer->phone = $request->phone;
        }
        if(isset($request->age)){
            $customer->age = $request->age;
        }
        if(isset($request->gender)){
            $customer->gender = $request->gender;
        }
        if(isset($request->birth)){
            $customer->birthday = $request->birth;
        }
        $customer->save();

        return redirect('userlogin')->with('success','สมัครสมาชิกเรียบร้อยแล้ว กรุณาล็อคอิน');
    
    }

    public function Customersendmail(Request $request)
    {
        Mail::raw($request->comments,function($message) use ($request){
		$message->to('s5904062630292@email.kmutnb.ac.th')
				->subject($request->subject)
				->from('58030218@kmail.ac.th'); //คนส่ง
        });
        
        return back()->with('success','ส่งอีเมลเรียบร้อยแล้ว');
    }
    
}

?>