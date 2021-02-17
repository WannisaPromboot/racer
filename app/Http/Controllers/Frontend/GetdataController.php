<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class GetdataController extends Controller
{
    public function getAmphure($value){

        $amphures = DB::table('amphures')->where('province_id',$value)->get();
        $html = '<option value="">Specify Amphure</option>';
        foreach($amphures as $_amphures => $item){
            $html .=  '<option value="'.$item->	id.'">'.$item->name_th.'</option>';
        }
        echo $html;
    }

    public function getDistrict($value){

        $districts = DB::table('districts')->where('amphure_id',$value)->get();
        $html = '<option value="">Specify District</option>';
        foreach($districts as $_districts => $item){
            $html .=  '<option value="'.$item->	id.'">'.$item->name_th.'</option>';
        }
        echo $html;

    }

    public function getSubDistrict($value){

        $zipcodes = DB::table('zipcodes')->where('district_code',$value)->first();
        echo   $zipcodes->zipcode;

    }

    public function searchproduct(Request $request){

            session::forget('search_product');
            session::forget('keyword');


            $product = \App\Product::where('product_name_th','like','%'.$request->search.'%')
                                    ->orwhere('product_name_en','like','%'.$request->search.'%')
                                    ->get();

            $arr_product = array();

            foreach($product as $_pro){
                
                array_push($arr_product,$_pro->id_product);
               
            }

            Session::put('keyword',$request->search);

            $data = array(
                'search'  => $arr_product,
                'cate'  =>  'search',
                'keyword'   => Session::get('keyword'),
            );
            
            return view('frontend.product',$data);
    }

    public static function checkprice( $price ){
        $promotion = \App\PromotionProduct::where('datefrom','<=',date('Y-m-d'))
                                          ->where('dateto','>=',date('Y-m-d'))
                                          ->whereIn('type',[3,4])
                                          ->get();
        $discount = 0;
        $discount_last  = 0;
        $result_item = 0;
        $arr_cate = array();
        $arr_cate_id = array();
        $arr_promotion = array();

        foreach(Session::get('product') as $item){
            $product =  \App\Product::where('id_product',$item['product_id'])->first();
            if(!empty($product->product_special_price)){
                $total = $item['qty'] * $product->product_special_price ;
            }else{
                $total = $item['qty'] * $product->product_normal_price ;
            }

          //  dd($total);
            if(in_array($product->id_category,  $arr_cate_id) == false){
                $data  = array(
                    'category_id'    =>  $product->id_category,
                    'total'           =>  $total
                );
                array_push($arr_cate, $data);
                array_push($arr_cate_id, $product->id_category);

            }else{
                foreach($arr_cate as $key => $_item){
                    if($_item['category_id'] == $product->id_category){
                        $total =  $_item['total']+$total;
                        $arr_cate[$key]['total'] =   $total;
                    }
                  
                }
            }
            
        }


        foreach($promotion as $_promotion){
            // if($_promotion->type == 3 &&  $_promotion->type == 4 ){
                if($_promotion->group == 'all'){
                        if($price >= $_promotion->total){
                             if($_promotion->type == 4){
                                  $result  = $price*($_promotion->discount/100);
                             }else{
                                   $result  = $_promotion->discount;
                             }   
                        }
                        $discount += $result;
                }elseif($_promotion->group == 'some'){
                    $promotionitem = \App\PromotionProductItem::where('id_promotion',$_promotion->id_promotion)->get();
                    foreach($promotionitem as $_promotionitem){
                        if(in_array($_promotionitem->product_1,  Session::get('product_arr')) == true){
                            $product_item =  \App\Product::where('id_product',$_promotionitem->product_1)->first(); 
                            $key = array_search($_promotionitem->product_1, Session::get('product_arr')); // ค้นหา index
                            if(!empty( $product_item->product_special_price)){
                                $result_item +=  Session::get('product.'.$key.'.qty') * $product_item->product_special_price; 
                            }else{
                                $result_item +=  Session::get('product.'.$key.'.qty') * $product_item->product_normal_price; 
                            }
                        }
                    }

                    //////check ราคารวม
                    if($result_item >= $_promotion->total){
                        if($_promotion->type == 4){
                             $result  = $result_item*($_promotion->discount/100);
                        }else{
                              $result  = $_promotion->discount;
                        }   
                   }else{
                        $result =0;
                   }

                   $discount += $result;

                }else{
                    //dd($arr_cate);
                    foreach($arr_cate as $_cate){
                        if($_cate['category_id'] == $_promotion->group){
                            if($_cate['total'] >= $_promotion->total){
                                if($_promotion->type == 4){
                                     $result  = $_cate['total']*($_promotion->discount/100);
                                }else{
                                      $result  = $_promotion->discount;
                                }   
                           }else{
                            $result =0 ;
                           }
                          // dd($result);
                           $discount += $result;
                        }
                  
                    }
                }

                if($discount != 0){
                    $pro = array(
                        'id_promotion'      => $_promotion->id_promotion,
                        'total'             =>  $discount,
    
                    );
    
                    array_push($arr_promotion,  $pro);
                }

           
                 
            // }
        }

        $total_last =  $price - $discount;

        ///////////////////////ลดทั้งร้าน
        $promotion_type5 = \App\PromotionProduct::where('datefrom','<=',date('Y-m-d'))
                                            ->where('dateto','>=',date('Y-m-d'))
                                            ->where('type',5)
                                            ->first();
        
                                     

        if(!empty($promotion_type5)){
     
                if($promotion_type5->group == 'all'){
                    $result  = $total_last*($promotion_type5->discount/100);
                    $discount_last += $result;
                }else{
                    foreach($arr_cate as $_cate){
                        if($_cate['category_id'] == $promotion_type5->group){
                            $result  = $total_last*($promotion_type5->discount/100);
                            $discount_last += $result;
                        }
                    
                    }
                }

                
                $pro_ = array(
                    'id_promotion'      => $promotion_type5->id_promotion,
                    'total'             =>   $discount_last,

                );
                array_push($arr_promotion,  $pro_);
        }else{
            $discount_last = 0;
        }


        $data = array(
            'promotion'   => $arr_promotion,
            'discount'   => $discount+$discount_last, 
        );
        
        return  $data;
       
    }





}