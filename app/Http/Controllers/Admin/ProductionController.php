<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Production;

class ProductionController extends Controller
{
    public function productioncontent(Request $request){
            $data = array(
                'products'   => \App\Product::where('product_display',0)->orderby('id_category')->get()
            );
            return view('Admin.production.production-content' , $data);
    }

    public function updateproduction(Request $request){
      //  dd($request->all());
        $product = \App\Product::where('id_product',$request->id)->first();
        $product->product_count = $request->count;
        $product->save();
    }
}
