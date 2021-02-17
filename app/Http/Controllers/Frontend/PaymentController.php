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


      //  dd($request->all());
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
        $updateOrder->method  = $request->payment_method;
        $updateOrder->tax_type  = $request->radio1;
        $updateOrder->tax_personal_id  = $request->tax_personal_id;
        $updateOrder->tax_org_id  = $request->tax_org_id;
        $updateOrder->tax_organize  = $request->tax_organize;
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
            
            $newTax->save();
        }

        //////ลบจำนวนสินค้า
        $oraderItem = OrderItem::where('id_order',$request->id_order)->get();
        foreach($oraderItem as $item){
            $product = \App\Product::where('id_product',$item->product_id)->first();
            if($product->product_count != 0 || $product->product_count != NULL){
                $product->product_count =  $product->product_count - $item->count ;
                $product->save();
            }
           
        }


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
