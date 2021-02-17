<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Order;
use DB;

class OrderController extends Controller
{
    public function ShowOrder(Request $request){
        $data = array(
            'order' => \App\Order::where('status_process',1)->orderby('updated_at','desc')->get(),
        );
        return view('Admin.order.order-content',$data);
    }

    public function OrederDetail($id){
        $data = array(
            'order' => \App\Order::where('id_order',$id)->first(),
        );
        return view('Admin.order.order-detail',$data);
    }

    public function receipt(Request $request){
        $img  = \App\OrderPayment::where('id_order',$request->id)->first();


        echo '<img src="'.url('storage/app/'.$img->filepath).'">';

    }

    public function changestatus(Request $request){
        DB::table('product_order')->where('id_order',$request->id)->update(['status_payment' => $request->value]);

    }

    public function changeshipping(Request $request){
        if(!empty($request->tracking)){
            $data = array(
                'status_delivery' => $request->value,
                'tracking' => $request->tracking
            );
            DB::table('product_order')->where('id_order',$request->id)->update($data);
        }else{
            DB::table('product_order')->where('id_order',$request->id)->update(['status_delivery' => $request->value]);
        }
        

    }
}
