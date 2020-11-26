<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\ProductGallery;
use Storage;

class ProductController extends Controller
{
    public function ProductContent(){

            $data = array(
                'products'   =>  Product::orderby('id_category')->get() 
            );
            return view('Admin.product.product-content',$data);
    }

    public function AddProduct(){
        $data = array(
            'cate'   =>  Category::all(),
     
        );

        return view('Admin.product.add-product',$data);
    }

    public function EditProduct($id){

        $data = array(
            'cate'   =>  Category::all(),
            'product'  => Product::where('id_product',$id)->first(),
            'imgs'  => ProductGallery::where('id_product',$id)->get(),   /// id_pro == id ของตาราง product 
        );



        return view('Admin.product.edit-product',$data);
    }

    public function SaveProduct(Request $request){

        $newProduct = New Product;
        $newProduct->sap_code   = $request->sap_code;
        $newProduct->product_name_th   = $request->product_name_th;
        $newProduct->product_name_en   = $request->product_name_en;
        $newProduct->id_category   = $request->id_category;
        $newProduct->id_subcategory   = $request->id_subcategory;
        $newProduct->product_normal_price   = $request->product_normal_price;
        $newProduct->product_special_price   = $request->product_special_price;
        $newProduct->product_start   = $request->product_start;
        $newProduct->product_end   = $request->product_end;
        $newProduct->product_method_th   = $request->product_method_th;
        $newProduct->product_method_en   = $request->product_method_en;
        $newProduct->product_description_th   = $request->product_description_th;
        $newProduct->product_description_en   = $request->product_description_en;
        $newProduct->product_kg   = $request->product_kg;
        $newProduct->product_width   = $request->product_width;
        $newProduct->product_lenght   = $request->product_lenght;
        $newProduct->product_height   = $request->product_height;
        $newProduct->product_distance_free   = $request->product_distance_free;
        $newProduct->product_distance_km   = $request->product_distance_km;
        $newProduct->save();
       
        //dd($request->file('sub_gallery') );

        foreach($request->sub_gallery as $key => $value){
            $newGallery = new ProductGallery;
            $newGallery->sap_code   = $request->sap_code;
            $newGallery->sort        = $request->sub_sort[$key];
            $newGallery->id_product   = $newProduct->id_product;

            //////รูป
            $newFilename = 'product/'.time().$value->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($value));
            $newGallery->filepath = $newFilename;

            $newGallery->save();
        }

      

        return redirect('productcontent')->with('save','บันทึกข้อมูลสำเร็จ');

    }

    public function UpdateProduct(Request $request,$id){
     
        $updateProduct = Product::where('id_product',$id)->first();
        
        if(isset($request->sap_code)){
            $updateProduct->sap_code   = $request->sap_code;
        }

        if(isset($request->product_name_th)){
            $updateProduct->product_name_th   = $request->product_name_th;
        }

        
        if(isset($request->product_name_en)){
            $updateProduct->product_name_en   = $request->product_name_en;
        }

        if(isset($request->id_category)){
            $updateProduct->id_category   = $request->id_category;
        }

        if(isset($request->id_subcategory)){
            $updateProduct->id_subcategory   = $request->id_subcategory;
        }


        if(isset($request->product_normal_price)){
            $updateProduct->product_normal_price   = $request->product_normal_price;
        }

        if(isset($request->product_special_price)){
            $updateProduct->product_special_price   = $request->product_special_price;
        }

        if(isset($request->product_start)){
            $updateProduct->product_start   = $request->product_start;
        }

        if(isset($request->product_end)){
            $updateProduct->product_end   = $request->product_end;
        }

        if(isset($request->product_method_th)){
            $updateProduct->product_method_th   = $request->product_method_th;
        }

        if(isset($request->product_method_en)){
            $updateProduct->product_method_en   = $request->product_method_en;
        }


        if(isset($request->product_description_th)){
            $updateProduct->product_description_th   = $request->product_description_th;
        }

        if(isset($request->product_description_en)){
            $updateProduct->product_description_en   = $request->product_description_en;
        }

        if(isset($request->product_kg)){
            $updateProduct->product_kg   = $request->product_kg;
        }

        if(isset($request->product_width)){
            $updateProduct->product_width   = $request->product_width;
        }

        
        if(isset($request->product_lenght)){
            $updateProduct->product_lenght   = $request->product_lenght;
        }
       
        if(isset($request->product_height)){
            $updateProduct->product_height   = $request->product_height;
        }

        if(isset($request->product_distance_free)){
            $updateProduct->product_distance_free   = $request->product_distance_free;
        }

        if(isset($request->product_distance_km)){
            $updateProduct->product_distance_km   = $request->product_distance_km;
        }

       // dd(   $request->all());

        $updateProduct->save();

           
        if(isset($request["deletedkey"])){
            foreach($request["deletedkey"] as $delete_id){ 
                $deleteimg =  ProductGallery::where('id_product_gallery',$delete_id)->first();
                if(!empty($deleteimg )){
                    $deleteimg->delete();
                    Storage::delete($deleteimg->filepath);
                }
               

            }
        }


       
         if(isset($request->sub_gallery)){
            foreach($request->sub_gallery as $key => $value){
                $updateGallery  = ProductGallery::where('id_product_gallery',$key)->first();

                if(!empty($updateGallery)){
                    $updateGallery->sap_code   = $request->sap_code;
                    $updateGallery->sort        = $request->sub_sort[$key];
        
                    //////รูป
                    $newFilename = 'product/'.time().$value->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($value));
                    $updateGallery->filepath = $newFilename;
        
                    $updateGallery->save();
                }else{
                    $newGallery = new ProductGallery;
                    $newGallery->sap_code   = $request->sap_code;
                    $newGallery->id_product   = $updateProduct->id_product;
                    $newGallery->sort        = $request->sub_sort[$key];
        
                    //////รูป
                    $newFilename = 'product/'.time().$value->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($value));
                    $newGallery->filepath = $newFilename;
        
                    $newGallery->save();
                }
               
            }
         }
            ///////////////update sort
            if(isset($request->sub_sort) ){   
                foreach($request["sub_sort"] as $key => $subsort){
                    $updateGallery  = ProductGallery::where('id_product_gallery',$key)->first();
                    if(!empty( $updateGallery )){
                        $updateGallery->sort  = $request->sub_sort[$key];
                        $updateGallery->save();
                    }
                }
            }




        

        return redirect('productcontent')->with('save','บันทึกข้อมูลสำเร็จ');
    }

    public function GetSubCate(Request $request){
        $subcate = SubCategory::where('id_category',$request->id)->get();

        echo  '<option>-เลือกหมวดหมู่ย่อย-</option>';
        foreach($subcate as $_subcate){
            echo  '<option value="'. $_subcate->id_subcategory.'">'. $_subcate->subcategory_name_th.'</option>';
        }
    }

    public function DisplayProduct(Request  $request){
        $updateProduct = Product::where('id_product',$request->id)->first();
        $updateProduct->product_display =  $request->check;
        $updateProduct->save();

    }
}
