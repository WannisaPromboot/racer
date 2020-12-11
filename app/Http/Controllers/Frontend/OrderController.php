<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;



class OrderController extends Controller
{
   public function StoreOrder(Request $request){
        $A = mt_rand( 1000000000, 9999999999);
        // dd($A);
        $newOrder = New Order;
        $newOrder->id_order =  $A;
        $newOrder->total =  $request->price_total;
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

        return redirect('payment/'.$A.'');
   }
}
