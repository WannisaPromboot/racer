<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{

    public function Home(Request $request){
        $ip  = $request->getClientIp();
        $sql = DB::Table('guest')->where('guest_ip',$ip)->first();
        if(!empty($sql)){

        }else{
            DB::Table('guest')->insert(['guest_ip'=>$ip]);
        }
        $data = array(
            'data' => \App\Slide::orderBy('slide_number','ASC')->where('page',1)->get(),
            'subbanner' =>  DB::Table('subbanner')->where('subbanner_page',1)->orderBy('subbanner_sort','ASC')->get(),
            'bannernew' => \App\Slide::where('page',3)->first(),
            'cate'   => \App\Category::orderBy('sort')->get()
        );
        return view('frontend.index',$data);
    }

}