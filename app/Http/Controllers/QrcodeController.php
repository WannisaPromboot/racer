<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;
use DB;
use Crypt;

class QrcodeController extends Controller
{
    public function getQrcode(Request $request){

        return view('frontend.testqrcode');
    }
    
    public function showQrcode(Request $request,$id){

        $decryp_id = Crypt::decryptString($id);
        
        return view('frontend.qrcode',['id'=>$decryp_id]);
    }

    public function CheckQrcode(Request $request){
        if($request->booking === $request->value){
            $update =  \App\Booking::where('booking_id',$request->booking)->first();

            $update->status_success = 1;
            $update->status_payment = 1;
            $update->time_use = date('H:i:s');

            $update->save();


            $store = \App\Store::where('id_store',$request->store)->first();
            if($update->total >= $store->store_minimum){
                $item = \App\BookingItem::where('booking_id',$request->booking)->get();
                $sum =0;
                foreach($item as $_item){
                    $service = \App\Service::where('id_service',$_item->id_service)->first();

                    $total   = ($service->service_coin/100)*$update->total;
                    
                    if($total >= $store->store_maxcoin_buy){
                        $sum += $store->store_maxcoin_buy;
                    }else{
                        $sum +=$total;
                    }
                   
                }

                $user = \App\Customer::where('customer_id',$update->customer_id)->first();
                
                if(!empty($user->coin)){
                    $A =  $sum + 0;
                }else{
                    $A =  $sum + $user->coin;
                }

               DB::table('customer')->where('customer_id',$update->customer_id)->update(['coin'=>$A]);
            }
            echo 'ยืนยันการใช้บริการ';
        }else{
            echo 'หมายเลขการจองไม่ตรงกัน กรุณากรอกหมายเลขใหม่';
        }
    }
}
