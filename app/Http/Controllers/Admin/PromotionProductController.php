<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionProductController extends Controller
{
    public function Addpromotionproduct(){
        $data = array(
            'products'    => \App\Product::all(),
        );
        return view('Admin.promotionproduct.promotion-add',$data);
    }

    public function ShowpromotionproductContent(){
        $data = array(
            'all'    => \App\PromotionProduct::get(),
        );
      
        return view('Admin.promotionproduct.promotion-content',$data);
    }

    public function Editpromotionproduct($id){
        $data = array(
            'promotion'    => \App\PromotionProduct::where('id_promotion',$id)->first(),
            'all'    => \App\PromotionProductItem::where('id_promotion',$id)->get(),
            'products'    => \App\Product::all(),
        );
        return view('Admin.promotionproduct.promotion-edit',$data);
    }

    /////get สินค้าตัวที่ 2 
    public function getsecondproduct(Request $request){
        $products    = \App\Product::where('product_display',0)->where('id_product','!=',$request->id)->get();
        $html  ='';

        $html  = '<option>-เลือกสินค้า-</option>';
        foreach($products as $item){
            $html  = '<option value="'.$item->product_id.'">'.$item->product_name_th.'</option>';

        }

        return $html;
    }

    public function savepromotionproduct(Request $request){

      //  dd($request->all());
            if($request->type ==1){
                $total = '';
                $discount = '';
                $group = $request->group;
            }elseif($request->type ==2){
                    $total = $request->type2_total;
                    $discount = '';
                    $group = $request->group;
            }elseif($request->type ==3){
                $total = $request->type3_total;
                $discount = $request->type3_discount;
                $group = $request->group;
            }elseif($request->type==4){
                $total = $request->type4_total;
                $discount = $request->type4_discount;
                $group = $request->group;
            }elseif($request->type==5){
                $total = '';
                $discount = $request->type5_discount;
                $group = $request->group_1;
            }
            

            $newPromotion  = new \App\PromotionProduct;
            $newPromotion->type               = $request->type;
            $newPromotion->promotion_title    = $request->promotion_title;
            $newPromotion->datefrom           = $request->get_from;
            $newPromotion->dateto             = $request->get_to;
            $newPromotion->total             = $total;
            $newPromotion->discount          = $discount;
            $newPromotion->group          = $group;
            $newPromotion->product          = $request->product;
            $newPromotion->save();

            if(!empty($request->get_product_1) && $request->get_product_1[1] != NULL ){
                foreach($request->get_product_1 as $key => $item){
                    $newType  = new \App\PromotionProductItem;
                    $newType->id_promotion    = $newPromotion->id_promotion;
                    if(!empty($request->get_product_1[$key])){
                        $newType->product_1       = $request->get_product_1[$key];
                    }

                    if(!empty($request->count_1[$key])){
                        $newType->count_1       = $request->count_1[$key];
                    }
                    
                    if(!empty($request->get_product_2[$key])){
                        $newType->product_2       = $request->get_product_2[$key];
                    }

                    if(!empty($request->count_2[$key])){
                        $newType->count_2       = $request->count_2[$key];
                    }
                
                    $newType->save();
                }   
            }

            //////get from not type 1  some product
            
            if(!empty($request->some_get_product_1) && $request->some_get_product_1[1] != NULL ){
                foreach($request->some_get_product_1 as $key => $item){
                    $newType  = new \App\PromotionProductItem;
                    $newType->id_promotion    = $newPromotion->id_promotion;
                    if(!empty($item)){
                        $newType->product_1       = $item;
                    }                
                    $newType->save();
                }   
            }


        return  redirect('promotionproductcontent')->with('Save','บันทึกข้อมูลเรียบร้อย');
    }


    public function updatepromotionproduct(Request $request , $id){

        if($request->type ==1){
            $total = '';
            $discount = '';
            $group = $request->group;
            $product = '';
        }elseif($request->type ==2){
                $total = $request->type2_total;
                $discount = '';
                $group = $request->group;
                $product = $request->product;
        }elseif($request->type ==3){
            $total = $request->type3_total;
            $discount = $request->type3_discount;
            $group = $request->group;
            $product = '';
        }elseif($request->type==4){
            $total = $request->type4_total;
            $discount = $request->type4_discount;
            $group = $request->group;
            $product = '';
        }elseif($request->type==5){
            $total = '';
            $discount = $request->type5_discount;
            $group = $request->group_1;
            $product = '';
        }

        $updatePromotion  = \App\PromotionProduct::where('id_promotion',$id)->first();
        $PromotionItem  = \App\PromotionProductItem::where('id_promotion',$id)->first();


        if($request->type == $updatePromotion->type  ){   // same as type
            if($request->type == 1 ){
                if(!empty($request->get_product_1)){
                    foreach($request->get_product_1 as $key => $item){
    
                        if($item != NULL){
                            $updateType  = \App\PromotionProductItem::where('id_promotion_item',$key)->first();
                            if($updateType == null){
                                $newType  = new \App\PromotionProductItem;
                                $newType->id_promotion    = $id;
                                $newType->product_1       = $request->get_product_1[$key];
                                $newType->count_1       = $request->count_1[$key];
                                $newType->product_2       = $request->get_product_2[$key];
                                $newType->count_2       = $request->count_2[$key];
                                $newType->save();
                            }else{
                                $updateType->product_1       = $request->get_product_1[$key];
                                $updateType->count_1       = $request->count_1[$key];
                                $updateType->product_2       = $request->get_product_2[$key];
                                $updateType->count_2       = $request->count_2[$key];
                                $updateType->save();
                            }
                        }
                    
                
                    }  
        
        
                    if($request->deletedkey){
                        foreach($request->deletedkey as $key => $item){
                            $deleteType  = \App\PromotionProductItem::where('id_promotion_item',$key)->first();
                            if($deleteType != NULL){        
                                $deleteType->delete();    
                            }
                        }
                    }
                }
            }else{ //////get from not type 1 some product
                                            
                if(!empty($request->some_get_product_1) ){
                    foreach($request->some_get_product_1 as $key => $item){
                        $updateType  = \App\PromotionProductItem::where('id_promotion_item',$key)->first();
                        if($item != NULL){
                            if($updateType  == null){
                                $newType  = new \App\PromotionProductItem;
                                $newType->id_promotion    = $id;
                                if(!empty($request->some_get_product_1[$key])){
                                    $newType->product_1       = $request->some_get_product_1[$key];
                                }                
                                $newType->save();
                            }else{
                                if(!empty($request->some_get_product_1[$key])){
                                    $updateType->product_1       = $request->some_get_product_1[$key];
                                }                
                                $updateType->save();
                            }
                        }
                    
                    
                    } 
                    
                    if($request->deletedkey){
                        foreach($request->deletedkey as $key => $item){
                            $deleteType  = \App\PromotionProductItem::where('id_promotion_item',$key)->first();
                            if($deleteType != NULL){        
                                $deleteType->delete();    
                            }
                        }
                    }
        
        
                }
            }
          
    
        }else{   ///   not same type
            /////delete all item
              $delete  =  \App\PromotionProductItem::where('id_promotion',$id)->delete();

              if($request->type == 1 ){
                if(!empty($request->get_product_1)){
                    foreach($request->get_product_1 as $key => $item){
                        if($item != NULL){
                            $newType  = new \App\PromotionProductItem;
                            $newType->id_promotion    = $id;
                            if(!empty($request->get_product_1[$key])){
                                $newType->product_1       = $request->get_product_1[$key];
                            }
        
                            if(!empty($request->count_1[$key])){
                                $newType->count_1       = $request->count_1[$key];
                            }
                            
                            if(!empty($request->get_product_2[$key])){
                                $newType->product_2       = $request->get_product_2[$key];
                            }
        
                            if(!empty($request->count_2[$key])){
                                $newType->count_2       = $request->count_2[$key];
                            }
                        
                            $newType->save();
                        }
                    
                    }   
                }
              }else{//////get from not type 1  some product
                    if(!empty($request->some_get_product_1)){
                        foreach($request->some_get_product_1 as $key => $item){
                            if($item != NULL ){
                                $newType  = new \App\PromotionProductItem;
                                $newType->id_promotion    = $id;
                                if(!empty($request->some_get_product_1[$key])){
                                    $newType->product_1       = $request->some_get_product_1[$key];
                                }                
                                $newType->save();
                            }
                    
                        }   
                    }
              }
        }

          ////ตารางหลัก
        $updatePromotion->type               = $request->type;
        $updatePromotion->promotion_title    = $request->promotion_title;
        $updatePromotion->datefrom           = $request->get_from;
        $updatePromotion->dateto             = $request->get_to;
        $updatePromotion->total             = $total;
        $updatePromotion->discount          = $discount;
        $updatePromotion->product          =  $product;
        $updatePromotion->group          = $group;
        $updatePromotion->save();

        return  redirect('promotionproductcontent')->with('Save','บันทึกข้อมูลเรียบร้อย');

    }

    ////add new promotion
    public function addproductpromotion(Request $request){
   
        $max = \App\PromotionProductItem::max('id_promotion_item');
        $products = \App\Product::all();
        $count = $max + $request->count+1;
        $html = '';
        $html .=   '<div class="row mt-2" id="item'.$count.'">
                    <div class="col-2 mt-2">
                        สินค้าชิ้นที่ 1 
                    </div>
                    <div class="col-3">
                        <select class="form-control product" name="get_product_1['.$count.']" required>
                            <option>-เลือกสินค้า-</option>';
                            
                                    foreach ($products as $item){
                                        $html .=  '<option value="'.$item->id_product.'">'.$item->product_name_th.'</option>';
                                }
                            
                        
         $html .=            '</select>
                    </div>
                    <div class="col-1">
                        <input type="number" class="form-control" name="count_1['.$count.']" >
                    </div>
                    <div class="col-1  mt-2">
                        สินค้าชิ้นที่ 2
                    </div>
                    <div class="col-3">
                        <select class="form-control product" name="get_product_2['.$count.']" required>
                            <option>-เลือกสินค้า-</option>';
                            
                            foreach ($products as $item){
                                $html .=  '<option value="'.$item->id_product.'">'.$item->product_name_th.'</option>';
                            }
        $html .=         '</select>
                    </div>
                    <div class="col-1">
                    <input type="number" class="form-control" name="count_2['.$count.']" >
                    </div>
                    <div class="col-sm">
                    <button  type="button" class="btn btn-danger" onclick="deleteitem('.$count.')" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div>';

        return   $html;
    }


    function addnewsome(Request $request){

        $max = \App\PromotionProductItem::max('id_promotion_item');
        $products = \App\Product::all();
        $count = $max + $request->count+1;
        $html = '';
        $html .= '<div class="row mt-2" id="some'.$count.'" >
                        <div class="col-2 "></div>
                        <div class="col-1 mt-2">
                            เลือกสินค้า
                        </div>
                        <div class="col-4">
                            <select class="form-control product" name="some_get_product_1['.$count.']">
                                <option>-เลือกสินค้า-</option>';
                                foreach ($products as $item){
                               $html   .=     '<option value="'.$item->id_product.'">'.$item->product_name_th.'</option>';
                                }
        $html .=            '</select>
                        </div>
                        <div class="col-1">
                        <button  type="button" class="btn btn-danger" onclick="deletesome('.$count.')" style="position: absolute; top: 0px;"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>';

        return $html;

    }

}
