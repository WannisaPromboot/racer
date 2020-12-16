<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ShoppingCart;
use Session;

class AddacartController extends Controller
{
    public function addCart($id){
        $product = Session::get('product') ;       
        
        if( $product != NULL ){
            if(in_array($id,$product) == false){
                Session::push('product', $id);
            }
        }else{
         
            Session::push('product', $id);
        }


        return redirect('cart'); 
      
    }

    public function deleteitemincart(Request $request){
        Session::forget('product.'.$request->item);

    }
}
