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
}