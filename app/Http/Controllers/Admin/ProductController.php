<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\ProductGallery;

class ProductController extends Controller
{
    public function ProductContent(){

            $data = array(
                'products'   =>  Product::where('product_display',0)->get() 
            );
            return view('Admin.product.product-content',$data);
    }

    public function AddProduct(){
        $data = array(
            'cate'   =>  Category::all()
        );

        return view('Admin.product.add-product',$data);
    }

    public function EditProduct($id){
        return view('Admin.product.edit-product',$data);
    }

    public function SaveProduct(Request $request){
        dd($request->all());
    }

    public function UpdateProduct(){
        
    }

    public function GetSubCate(Request $request){
        $subcate = SubCategory::where('id_category',$request->id)->get();

        echo  '<option>-เลือกหมวดหมู่ย่อย-</option>';
        foreach($subcate as $_subcate){
            echo  '<option value="'. $_subcate->id_subcategory.'">'. $_subcate->subcategory_name_th.'</option>';
        }
    }
}
