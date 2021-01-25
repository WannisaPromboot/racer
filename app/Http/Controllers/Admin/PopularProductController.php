<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PopularProductController extends Controller
{
    public function popularContent(){

        $data = array(
            'category'  => Category::orderby('sort','asc')->get(),
        );
        return view('Admin.popular.popular-content',$data);
    }

    public function Editpopular($id){
        
        $data = array(
            'item'          => Category::where('id_category',$id)->first(),
            'products'      => Product::where('id_category',$id)->get()
        );
        return view('Admin.popular.popular-edit',$data);
    }

    public function selectproduct(Request $request){
        

    }
}
