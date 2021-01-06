<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ShoppingCart;
use Session;

class AddacartController extends Controller
{
    public function addCart($id){
       // Session::forget('product_arr');
        //dd(Session::get('product'));
        $product = Session::get('product') ;   
        $product_arr = Session::get('product_arr');
       
        if( $product_arr != NULL ){
            if(in_array($id,$product_arr) == false){
                $data  = array(
                    'product_id'    =>  $id,
                    'qty'           =>  1
                );
                Session::push('product',   $data );
                Session::push('product_arr', $id);
            }else{
                foreach($product as $key => $item){
                    if($item['product_id'] == $id){
                        $count =  $item['qty']+1;
                        Session::put('product.'.$key.'.qty',$count); 
                    }
                  
                }
            }
        }else{
            $data  = array(
                'product_id'    =>  $id,
                'qty'           =>  1
            );
            Session::push('product',   $data );
            Session::push('product_arr', $id);
        }


     

      //  return redirect('cart'); 
      
    }

    public function deleteitemincart(Request $request){
        
        Session::forget('product.'.$request->item);

    }
}
