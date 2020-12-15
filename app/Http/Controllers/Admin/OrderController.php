<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Order;

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
}
