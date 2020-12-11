<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\OrderTax;
use Storage;
use DB;
use URL;
use Session;
class PaymentController extends Controller
{
    public function storePayment(Request $request){
     
        $updateOrder = Order::where('id_order',$request->id_order)->first();
        $updateOrder->firstname = $request->firstname;
        $updateOrder->lastname = $request->lastname;
        $updateOrder->email = $request->email;
        $updateOrder->address = $request->address;
        $updateOrder->telephone = $request->telephone;
        $updateOrder->fax = $request->fax;
        $updateOrder->status_payment = 1;
        $updateOrder->status_process = 1;
        $updateOrder->status_delivery = 0;
        $updateOrder->save();



        if($request->radio == 'old'){
            $newTax = New OrderTax;
            $newTax->id_order = $request->id_order;
            $newTax->firstname = $request->firstname;
            $newTax->lastname = $request->lastname;
            $newTax->email = $request->email;
            $newTax->address = $request->address;
            $newTax->telephone = $request->telephone;
            $newTax->fax = $request->fax;
            $newTax->save();
        }else{
            $newTax = New OrderTax;
            $newTax->id_order = $request->id_order;
            $newTax->firstname = $request->tax_firstname;
            $newTax->lastname = $request->tax_lastname;
            $newTax->email = $request->tax_email;
            $newTax->address = $request->tax_address;
            $newTax->telephone = $request->tax_telephone;
            $newTax->fax = $request->tax_fax;
            $newTax->save();
        }

        //////ลบจำนวนสินค้า
        

        Session::forget('product');

        return redirect('/')->with('success','ขอบคุณสำหรับการส่งซื้อ');

    }
}
