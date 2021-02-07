<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\OrderTax;
use App\OrderPayment;
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
        $updateOrder->method = $request->payment_method;
        $updateOrder->status_payment = 1;
        $updateOrder->status_process = 1;
        $updateOrder->status_delivery = 0;
        $updateOrder->save();



        if($request->radio == 'new' && !empty($request->tax_firstname)){
            $newTax = New OrderTax;
            $newTax->id_order = $request->id_order;
            $newTax->firstname = $request->tax_firstname;
            $newTax->lastname = $request->tax_lastname;
            $newTax->email = $request->tax_email;
            $newTax->address = $request->tax_address;
            $newTax->telephone = $request->tax_telephone;
            $newTax->fax = $request->tax_fax;
            $newTax->method  = $request->payment_method;
            $newTax->method  = $request->payment_method;
            $newTax->tax_type  = $request->radio1;
            $newTax->tax_personal_id  = $request->tax_personal_id;
            $newTax->tax_org_id  = $request->tax_org_id;
            $newTax->tax_organize  = $request->tax_organize;
            $newTax->save();
        }

        //////ลบจำนวนสินค้า

        ///////////////Payment////////////////
        if($request["filename"] !== null){
            $newpayment  = New OrderPayment;
            $new_image = 'Order/'.time().$request["filename"]->getClientOriginalName();
            Storage::put($new_image, file_get_contents($request["filename"]));
            $newpayment->filepath = $new_image;
            $newpayment->id_order = $request->id_order;
            $newpayment->bank      = $request->bank;
            $newpayment->save();
        }
        

        Session::forget('product');
        Session::forget('product_arr');
        return redirect('/')->with('success','ขอบคุณสำหรับการสั่งซื้อสินค้า');

    }
}
