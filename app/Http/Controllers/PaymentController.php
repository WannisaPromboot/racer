<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingPayment;
use Storage;
use DB;
use URL;
class PaymentController extends Controller
{
    public function StorePayment(Request $request){
       // dd($request->all());
        $NewPayment = new BookingPayment;
        $NewPayment->booking_id  = $request->booking_id;
        $NewPayment->price  = $request->price;
        $NewPayment->date  = $request->date;
        $NewPayment->time  = $request->time;
        $NewPayment->status  = 1;
      

        if(isset($request->image)){
            //dd($request->image);
            $newFilename = 'payment/'.time().$request->image->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->image));
            $NewPayment->image  = $newFilename;
        }

        $NewPayment->save();

        return redirect()->back()->with('success','ส่งหลักฐานเรียบร้อย กรุณารอการตรวจสอบ 1 - 2 วันทำการ');

    }

   
    public function CheckPayment($id){

        $payment=DB::table('customer_booking_payment')->select('image')
                                    ->where('booking_id',$id)
                                    ->first();

        $image = URL::asset('storage/app/'.$payment->image);
        $html = '<img width="350px "src="'.$image.'">';
         echo $html;

     }

     
     public function UpdateStatusPayment(Request $request,$id){

        DB::table('customer_booking_payment')->where('booking_id',$id)->update(['status'=>$request->orders_status]);
        DB::table('customer_booking')->where('booking_id',$id)->update(['status_payment'=>1]);

    }
}
