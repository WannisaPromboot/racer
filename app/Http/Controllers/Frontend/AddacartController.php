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
        $html = '';
       
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

        $product = \App\Product::where('id_product',$id)->first();
        $html   .=  '<div class="row p-3">
                        <div class="col-3 p-2" style="border: 1px solid #eae6e6">
                            <img src="'.url('storage/app/'.$product->product_img.'').'" width="100%">
                        </div>
                        <div class="col-sm p-2">
                            <h5>ชื่อสินค้า : '.$product->product_name_th.'</h5>
                            <p>จำนวน : 1 ชิ้น</p>
                            <p style="color:#00c4ef">ราคา : ฿'.number_format($product->product_normal_price).'</p>
                        </div>
                    </div>';

        return $html;

        

      //  return redirect('cart'); 
      
    }

    public function deleteitemincart(Request $request){

        foreach(Session::get('product_arr') as $key => $item){
                if($item == $request->id){
                    Session::forget('product_arr.'.$key);
                }
        }
        
        Session::forget('product.'.$request->item);

    }

    public function countproduct(Request $request){
        foreach(Session::get('product_arr') as $key => $item){
            if($item == $request->id){
                if($request->type == 'add'){
                    $qty = Session::get('product.'.$key.'.qty');
                    $qty = $qty + 1;
                    // Session::forget('product_arr.'.$key);
                    // Session::forget('product.'.$key);
                    // $data  = array(
                    //     'product_id'    =>  $request->id,
                    //     'qty'           =>  $qty
                    // );
                    // Session::push('product',   $data );
                    // Session::push('product_arr', $id);
                    Session::put('product.'.$key.'.qty',  $qty);
                    
                }else{
                    $qty = Session::get('product.'.$key.'.qty');
                    $qty = $qty -1;
                    // Session::forget('product_arr.'.$key);
                    // Session::forget('product.'.$key);
                    // $data  = array(
                    //     'product_id'    =>  $request->id,
                    //     'qty'           =>  $qty
                    // );
                    // Session::push('product',   $data );
                    // Session::push('product_arr', $id);
                    Session::put('product.'.$key.'.qty',  $qty);
                }
               
                
            }
        }
    }
}
