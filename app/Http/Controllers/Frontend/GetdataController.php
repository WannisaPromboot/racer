<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class GetdataController extends Controller
{
    public function getAmphure($value){

        $amphures = DB::table('amphures')->where('province_id',$value)->get();
        $html = '<option value="">Specify Amphure</option>';
        foreach($amphures as $_amphures => $item){
            $html .=  '<option value="'.$item->id.'">'.$item->name_th.'</option>';
        }
        echo $html;
    }

    public function getDistrict($value){

        $districts = DB::table('districts')->where('amphure_id',$value)->get();
        $html = '<option value="">Specify District</option>';
        foreach($districts as $_districts => $item){
            $html .=  '<option value="'.$item->id.'">'.$item->name_th.'</option>';
        }
        echo $html;

    }

    public function getSubDistrict($value){

        $zipcodes = DB::table('zipcodes')->where('district_code',$value)->first();
        echo   $zipcodes->zipcode;

    }
}

?>