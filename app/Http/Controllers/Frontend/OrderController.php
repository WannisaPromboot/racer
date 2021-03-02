<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\GetdataController;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\OrderPromotion;
use Session;

class OrderController extends Controller
{
   public function StoreOrder(Request $request){       
        $A = mt_rand( 1000000000, 9999999999);
        // dd($A);
        $newOrder = New Order;
        $newOrder->id_order =  $A;
        $newOrder->total =  $request->price_total;
        $newOrder->discount =  $request->price_discount;
        $newOrder->customer_id = Session::get('customer_id');
        //dd($newOrder);
        $newOrder->save();


        foreach($request->price_item as $key => $item){
            $newOrderItem = New OrderItem;
            $newOrderItem->id_order = $A;
            $newOrderItem->product_id = $key;
            $newOrderItem->price = $item;
            $newOrderItem->count = $request->count[$key];
            $newOrderItem->save();
        }

        if(!empty($request->promotion)){

            foreach($request->promotion as $key => $promotion){
                $newOrderOrder = New OrderPromotion;
                $newOrderOrder->id_order = $A;
                $newOrderOrder->id_promotion =$promotion;
                $newOrderOrder->discount = $request->total[$key];
                $newOrderOrder->save();
    
            }
        }
       
          
        return redirect('payment/'.$A.'');
   }
}
