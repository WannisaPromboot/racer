<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\Customer_review;
use App\Bank_customer;
use App\Booking;
use App\Store;
use App\CustomerAddress;
use App\Province;
use App\Districts;
use App\SubDistricts;
use DB;
use Mail;
use Session;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    public function UpdateCustomer(Request $request){
            $updateCustomer = Customer::where('customer_id',Session::get('customer_id'))->first();
            if(isset($request->name)){
                $updateCustomer->name = $request->name;
            }
            if(isset($request->lastname)){
                $updateCustomer->lastname = $request->lastname;
            }
            if(isset($request->telephone)){
                $updateCustomer->telephone = $request->telephone;
            }
            if(isset($request->email)){
                $updateCustomer->email = $request->email;
            }
            if(isset($request->birthday)){
                $updateCustomer->birthday = $request->birthday;
            }
            
            $updateCustomer->save();
        
        return redirect('member')->with('success','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }

    public function UpdateAddress(Request $request){
        $updateCustomer = Customer::where('customer_id',Session::get('customer_id'))->first();
        if(isset($request->address)){
            $updateCustomer->address = $request->address;
        }
        if(isset($request->province)){
            $updateCustomer->province = $request->province;
        }
        if(isset($request->postcode)){
            $updateCustomer->postcode = $request->postcode;
        }
        
        
        $updateCustomer->save();
    
        return redirect('member')->with('success','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }

    public function Addbank(Request $request){
        $bank = new Bank_customer;
        $bank->customer_id = Session::get('customer_id');
        if(isset($request->bank)){
            $bank->bank = $request->bank;
        }
        if(isset($request->accountname)){
            $bank->accountname = $request->accountname;
        }
        if(isset($request->number)){
            $bank->number = $request->number;
        }
        if(isset($request->month)){
            $bank->month = $request->month;
        }
        if(isset($request->year)){
            $bank->year = $request->year;
        }
        if(isset($request->ccv)){
            $bank->ccv = $request->ccv;
        }
        $bank->save();
        
        return redirect('member_credit')->with('success','เพิ่มบัตรใหม่เรียบร้อยแล้ว');
    }


    public function Statusbank($id){
        Bank_customer::whereIn('customer_credit_id',[$id])->update(['status_credit' => 1]);
        Bank_customer::whereNotIn('customer_credit_id',[$id])->update(['status_credit' => NULL]);
        return redirect('member_credit')->with('update','แก้ไขเรียบร้อยแล้ว');
    }

    public function MemberSendReview(Request $request){
        // dd($request->all());
        $review = New Customer_review;
        $review->score_relax = $request->score_relax;
        $review->score_clean = $request->score_clean;
        $review->score_emp = $request->score_emp;
        $review->score_value = $request->score_value;
        $review->write_by = 2;
        if(isset($request->customer_id)){
            $review->customer_id = $request->customer_id;
        }
        if(isset($request->booking_id)){
            $review->booking_id = $request->booking_id;
        }
        if(isset($request->text)){
            $review->text = $request->text;
        }
        if(isset($request->id_store)){
            $review->id_store = $request->id_store;
        }
        $sql = Store::where('id_store',$request->id_store)->first();
        $sql1 = Booking::where('booking_id',$request->booking_id)->first();
        $sql2 = Customer::where('customer_id',$request->customer_id)->first();
        $coin = ($sql->store_coin_review/100)*$sql1->total;
        $coinmax = 0;
        if($coin > $sql->store_maxcoin_review){
            $coinmax = $sql->store_maxcoin_review;
        }else{
            $coinmax = $coin;
        }
        // dd($sql->store_maxcoin_review);
        // dd($coinmax);
        $review->max_coin = $coinmax;
        if($sql2->coin==NULL){
            Customer::where('customer_id',$request->customer_id)->update(['coin'=>$coinmax]);

        }else{
            $old = $sql2->coin+$coinmax;
            // dd($coin);
            Customer::where('customer_id',$request->customer_id)->update(['coin'=>$old ]);

        }
        Booking::where('booking_id',$request->booking_id)->update(['status_success'=>2]);
        $review->save();
        return redirect('member_review')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    public function Mailpassword(Request $request)
    {
        # code...
        $email = Customer::where('email',$request->email)->first();
        $phone = Customer::where('telephone',$request->email)->first();
        // dd($email->password);
        if(!empty($email) || !empty($phone)){
            if(!empty($email)){
                $decryptedpws = Crypt::decryptString($email->password);

            }else{
                $decryptedpws = Crypt::decryptString($phone->password);

            }
            $data = array(
                'pass' => $decryptedpws,
            );
            Mail::send('email.forgotpassword',$data,function($message){
                $message->to('s5904062630292@email.kmutnb.ac.th')
                        ->subject('Reset Password')
                        ->from('58030218@kmail.ac.th');
            });
            return redirect('forgotpassword')->with('success','ระบบได้ส่งรหัสผ่านทางอีเมลเรียบร้อยแล้ว');
        }else{
            return redirect('forgotpassword')->with('error','ไม่มีบัญชีผู้ใช้');
        }

     

    }

    // public function extractAddonRequest($request){
    //     $requestForAddon = [];
    //     $originalRequest = $request->all();
    //     foreach($originalRequest as $key => $value){
    //         if(substr($key,0,6) == 'addon_'){
    //             if(gettype($value) == 'object'){
    //                 if(strpos(get_class($value),'UploadedFile') > 0){
    //                     //ไม่เก็บรูปภาพเข้า array
    //                     break;
    //                 }
    //             }
    //             $requestForAddon[str_replace('addon_','',$key)] = $value;
    //         }
    //     }
    //     return $requestForAddon;
    // }

    // public function UpdateAddressCustomer(Request $request , $model,$customerid){
    //    // dd($request->all());
    //     DB::transaction(function() use ($request , $model ,$customerid){
    //         $CustomerClassModel = '\\App\\'.$model;
    //         $updateCustomer = new   $CustomerClassModel;
            
    //         //
    //         if(isset($request->name)){
    //             $updateCustomer->name = $request->name;
    //         }
            
    //         $updateCustomer->telephone = $request->tel;
    //         $updateCustomer->address = $request->address;
    //         $updateCustomer->province     = $request->province;
    //         $updateCustomer->district     = $request->district;
    //         $updateCustomer->sub_district     = $request->sub_district;
    //         $updateCustomer->code     = $request->code;
    //         $updateCustomer->check     = $request->check;
    //         $updateCustomer->tax     = $request->tax;
    //         $updateCustomer->customer_id     = $customerid;

    //         $addOnData = $this->extractAddonRequest($request);
                
    //         foreach($addOnData as $column => $value){
    //             $updateCustomer->$column = $value;
    //         }
    //         $updateCustomer->save();
    //     });
               
    //     return back()->with('success','แก้ไขเนื้อหาเรียบร้อยแล้ว');

    // }

    // public function ShowCustomerContent(){
    //     $data['all'] = \App\Customer::all();
        
    //     return view('Admin.customers.customer-content',$data);
    // }

    // public function EditCustomerContent($id){
    //     $data['customer'] = \App\Customer::find($id);
    //     $data['address']  = \App\CustomerAddress::where('customer_id',$id)->get();
    //     return view('Admin.customers.edit-customer',$data);
    // }

    // public function getProvince($value){
    //     $address = CustomerAddress::where('id',$value)->first();
    //     $id = Province::where('PROVINCE_ID',$address->province)->first();
    //     $province = Province::all();
    //     $html = '<option value="">- เลือกจังหวัด -</option>';
    //        foreach($province as $_province => $item){
    //            if($item->PROVINCE_ID == $id->PROVINCE_ID ){
    //                 $html .=  '<option value="'.$item->PROVINCE_ID.'" selected>'.$item->PROVINCE_NAME.'</option>';
    //            }else{
    //                $html .=  '<option value="'.$item->PROVINCE_ID.'">'.$item->PROVINCE_NAME.'</option>';
    //            }
         
    //        }
    //     echo $html;
    // }


        
    // public function getAmphureWithId($value){
    //     $address = CustomerAddress::where('id',$value)->first();
    //     $id = Districts::where('AMPHUR_ID',$address->district)->first();
    //     $amphures = DB::table('amphures')
    //     ->where('PROVINCE_ID',$address->province)
    //     ->get();
    //     $html = '<option value="">- เลือกเขต -</option>';
    //     foreach($amphures as $_amphures => $item){
    //         if($item->AMPHUR_ID == $id->AMPHUR_ID ){
    //             $html .=  '<option value="'.$item->AMPHUR_ID.'" selected>'.$item->AMPHUR_NAME.'</option>';
    //        }else{
    //            $html .=  '<option value="'.$item->AMPHUR_ID.'">'.$item->AMPHUR_NAME.'</option>';
    //        }
    //     }
    //     echo $html;
        
    // }

    
    // public function getDistrictWithId($value){
    //     $address = CustomerAddress::where('id',$value)->first();
    //     $id = SubDistricts::where('DISTRICT_CODE',$address->sub_district)->first();
    //     $districts = DB::table('districts')
    //         ->where('AMPHUR_ID',$address->district)
    //         ->get();
    //     $html = '<option value="">- เลือกแขวง -</option>';
    //     foreach($districts as $_districts => $item){
    //         if($item->DISTRICT_CODE == $id->DISTRICT_CODE){
    //             $html .=  '<option value="'.$item->DISTRICT_CODE.'" selected>'.$item->DISTRICT_NAME.'</option>';
    //        }else{
    //          $html .=  '<option value="'.$item->DISTRICT_CODE.'">'.$item->DISTRICT_NAME.'</option>';
    //        }
          
    //     }
    //     echo $html;
    
    // }

    // //////////////////no id
    // public function getAmphure($value){

    //     $amphures = DB::table('amphures')
    //         ->where('PROVINCE_ID',$value)
    //         ->get();
    //     $html = '<option value="">- เลือกเขต -</option>';
    //        foreach($amphures as $_amphures => $item){
    //         $html .=  '<option value="'.$item->AMPHUR_ID.'">'.$item->AMPHUR_NAME.'</option>';
    //        }
    //     echo $html;
    // }

    // public function getDistrict($value){

    //     $districts = DB::table('districts')
    //         ->where('AMPHUR_ID',$value)
    //         ->get();
    //     $html = '<option value="">- เลือกแขวง -</option>';
    //     foreach($districts as $_districts => $item){
    //         $html .=  '<option value="'.$item->DISTRICT_CODE.'">'.$item->DISTRICT_NAME.'</option>';
    //     }
    //     echo $html;
    
    // }

    // public function getSubDistrict($value){

    //     $zipcodes = DB::table('zipcodes')
    //         ->where('district_code',$value)
    //         ->first();
    //     echo   $zipcodes->zipcode;
    
    // }

    // public function deleteAddress($value){
    //     CustomerAddress::where('id',$value)->delete();

    // }

    // public function getCustomerAddress($id){
    //     $address = CustomerAddress::where('id',$id)->first();
    //     $province = Province::where('PROVINCE_ID',$address->province);
    //     $pro_vince=Province::all();
    //     $district = Districts::where('AMPHUR_ID ',$address->district);
    //     $sundistrict = SubDistricts::where('DISTRICT_CODE ',$address->subdistrict);
    //     echo  '<div class="col-12 col-md-6" id="name">
    //                 <label >ชื่อ-นามสกุล</label>
    //                 <input type="name" name="edit_name" class="form-control modal_name"  id="name-first-name" value="'.$address->name.'">
    //             </div>
    //             <div class="col-12 col-md-6" id="tel">
    //                 <label>เบอร์โทรศัพท์</label>
    //                 <input type="phone" maxlength="10" name="edit_tel" class="form-control modal_phone" id="phone" value="'.$address->telephone.'">
    //             </div>
    //             <div class="col-12 col-md-12" id="addr">
    //                 <label class="mt-2">ที่อยู่</label>
    //                 <textarea class="form-control modal_address" name="edit_address" id="address" rows="3">'.$address->address.'</textarea>
    //             </div>
    //             <div class="col-12 col-md-6" id="province"> 
    //                 <label class="mt-2">จังหวัด</label>
    //                 <div class="wrapper">
    //                     <select name="edit_province" class="form-control province-1 select2" placeholder="เลือกจังหวัด" style="height: 43px !important; width: 100% !important;">
    //                     <option value="">- เลือกจังหวัด -</option>

    //                     </select>
    //                 </div>
    //             </div>
    //             <div class="col-12 col-md-6"  id="district">
    //                 <label class="mt-2">เขต/อำเภอ</label>
    //                 <select name="edit_district" id="_district"  class="form-control district-1 select2" placeholder="เลือกเขต/อำเภอ" style="height: 43px !important; width: 100% !important;">
    //                 </select>
    //             </div>
    //             <div class="col-12 col-md-12" style="height: 20px;"></div>
    //             <div class="col-12 col-md-6" id="sub_district">
    //                 <label>ตำบล/แขวง</label>
    //                 <select name="edit_sub_district" class="form-control sub_district-1 select2" placeholder="เลือกตำบล/แขวง" style="height: 43px !important; width: 100% !important;">
    //                 </select>
    //             </div>
    //             <div class="col-12 col-md-6" id="code">
    //                 <label>รหัสไปรษณีย์</label>
    //                 <input type="zip-code"  name="edit_code" class="form-control zip-code-1" id="zip-code-1" style="height: 43px;"  value="'.$address->code.'">
    //             </div>
    //             <div class="col-12 col-md-12 ty_text" id="check">
    //                 <label class="label--checkbox mt-2" style="margin-bottom:15px;">
    //                     <input type="checkbox"  name="edit_check" class="checkbox modal_check" value="'.$address->check.'">
    //                     ที่อยู่จัดส่งเหมือนกับที่อยู่ใบเสร็จรับเงิน
    //                 </label>
    //             </div>
    //             <div class="col-12 col-md-12 ty_text" id="tax">
    //                 <label style="width: 40%; float: left; margin-top: 10px;">เลขประจำผู้เสียภาษี</label>
    //                 <input  name="edit_tax" type="state" class="form-control modal_tax" id="state" style="width:50%; display: inline-block;" value="'.$address->tax.'">
    //             </div>';

    // }

    // public function EditAddressCustomer(Request $request,$id){
    //    $value = array(
    //         'name'          =>  $request->name,
    //         'telephone'     =>  $request->tel,
    //         'address'       =>  $request->address_,
    //         'province'      =>  $request->province,
    //         'district'      =>  $request->district,
    //         'sub_district'  =>  $request->subdistrict,
    //         'code'          =>  $request->code,
    //         'check'         =>  $request->check,
    //         'tax'           =>  $request->tax,
    //    );


    //     CustomerAddress::where('id',$id)->update($value);

    //    // return redirect('member-address');
    // }

    // public function selectDefaultAdress(Request $request){
    //     $data['default_address'] = $request->check;
    //     CustomerAddress::where('id','!=',$request->id)->update(['default_address'=> NULL] );
    //     CustomerAddress::where('id',$request->id)->update($data);
    // }


    // ///////insert checkout customer page 
    // public function addCustomer(Request $request,$customerid){
    //     if($request->ct == 'address'){
    //        $address =  CustomerAddress::where('customer_id',$customerid)->where('default_address','select')->first();
    //       //dd($address->name);
    //     }else{
    //             $address = array(
    //                 'name'          =>  $request->name,
    //                 'telephone'     =>  $request->tel,
    //                 'address'       =>  $request->address,
    //                 'province'      =>  $request->province,
    //                 'district'      =>  $request->district,
    //                 'sub_district'  =>  $request->sub_district,
    //                 'code'          =>  $request->code,
    //                 'check'         =>  $request->check,
    //                 'tax'           =>  $request->tax,
    //                 'customer_id'   =>  $customerid,
    //                 'default_address'   =>  'select'
    //            );
    //             CustomerAddress::where('customer_id',$customerid)->update(['default_address'=> NULL]);  
    //             CustomerAddress::insert($address);     
              
           
    //     }
        
    //     Session::put('address',$address);
    //     return redirect('checkout_shipping');

    // }



    
}
