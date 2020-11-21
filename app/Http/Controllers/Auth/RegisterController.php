<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Str;
use Crypt;
use App\Customer;
use App\HotService;
use Session;
use Auth;
use Redirect;

class RegisterController extends Controller
{

    public function CreatedCustomer(Request $request,$id,$model)
    {   
        if($id=="1"){
            $regis_ = Customer::where('email',$request->input('email_regis'))->first();
        }else{
            $regis_ = Customer::where('telephone',$request->input('telephone'))->first();
        }
        // dd($regis_);
        if(!empty($regis_)){
            $error_mes_login = ' มีบัญชีนี้อยู่แล้ว กรุณากรอกข้อมูลใหม่';
            return redirect('register-customer')->with('error_mes_login',$error_mes_login);

        }else{
            $random = mt_rand(1000000000, 9999999999);
            $pws = Crypt::encryptString($request->input('password_regis'));
            $CustomerModel = '\\App\\'.$model;
            if($id=="2"){
                $customer = array(
                    'customer_id' =>  $random,
                    'name' => $request->input('name'),
                    'lastname'  => $request->input('lastname'),
                    'telephone' => $request->input('telephone'),
                    'password'  => $pws,
                    'updated_at'=> date('y-m-d'),
                    'created_at' => date('y-m-d')
                );
            }else{
                $customer = array(
                    'customer_id' =>  $random,
                    'name' => $request->input('name'),
                    'lastname'  => $request->input('lastname'),
                    'email'     => $request->input('email_regis'),
                    'password'  => $pws,
                    'updated_at'=> date('y-m-d'),
                    'created_at' => date('y-m-d')
                );

            }
            $CustomerModel::insert($customer);
            Session::put('username', $request->input('name'));   
            Session::put('customer_id',$random);  
            $data = array(
                'first' => $request->input('name'),
                'last' => $request->input('lastname'),
                'pass' => $request->input('password_regis'),
                'hot' => HotService::where('date_start','>=',date('Y-m-d'))->where('date_finish','>=',date('Y-m-d'))->limit(4)->get(),
            ); 
            Mail::send('email.register',$data,function($message){
                $message->to('wannisapb@gmail.com')
                        ->subject('ยืนยันการจองบริการจากเว็บ beautytobook')
                        ->from('58030218@kmail.ac.th');
            });
            return Redirect::to('member'); 
        }
    }
    
}
