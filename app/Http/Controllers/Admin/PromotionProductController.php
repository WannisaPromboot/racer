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
            'all'    => \App\PromotionProductType1::where('id_promotion',$id)->get(),
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
       // dd($request->all());
            $type = 1;
            $newPromotion  = new \App\PromotionProduct;
            $newPromotion->type               = $type;
            $newPromotion->promotion_title    = $request->promotion_title;
            $newPromotion->datefrom           = $request->get_from;
            $newPromotion->dateto             = $request->get_to;
            $newPromotion->save();

            if($type == 1 ){
                foreach($request->get_product_1 as $key => $item){
                    $newType  = new \App\PromotionProductType1;
                    $newType->id_promotion    = $newPromotion->id_promotion;
                    $newType->product_1       = $request->get_product_1[$key];
                    $newType->count_1       = $request->count_1[$key];
                    $newType->product_2       = $request->get_product_2[$key];
                    $newType->count_2       = $request->count_2[$key];
                    $newType->save();
                }   
            }

        return  redirect('promotionproductcontent')->with('Save','บันทึกข้อมูลเรียบร้อย');
    }


    public function updatepromotionproduct(Request $request , $id){
        $updatePromotion  = \App\PromotionProduct::where('id_promotion',$id)->first();
        $type = 1;
        

        $updatePromotion->type               = $type;
        $updatePromotion->promotion_title    = $request->promotion_title;
        $updatePromotion->datefrom           = $request->get_from;
        $updatePromotion->dateto             = $request->get_to;
        $updatePromotion->save();

        if($type == 1 ){
            foreach($request->get_product_1 as $key => $item){
                $updateType  = \App\PromotionProductType1::where('id_promotion_type',$key)->first();
                if($updateType == null){
                    $newType  = new \App\PromotionProductType1;
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


            if($request->deletedkey){
                foreach($request->get_product_1 as $key => $item){
                    $deleteType  = \App\PromotionProductType1::where('id_promotion_type',$key)->first();
                    if($deleteType != null){        
                        $deleteType->delete();    
                    }
                }
            }
        }

        return  redirect('promotionproductcontent')->with('Save','บันทึกข้อมูลเรียบร้อย');

    }

    ////add new promotion
    public function addproductpromotion(Request $request){
   
        $max = \App\PromotionProductType1::max('id_promotion_type');
        $products = \App\Product::all();
        $count = $max + $request->count;
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

}
