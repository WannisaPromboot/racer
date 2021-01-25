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
            'imgs'  => ProductGallery::where('id_product',$id)->orderby('sort')->get(),   /// id_pro == id ของตาราง product 
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
        $newProduct->product_count   = $request->product_count;
        $newProduct->product_method_th   = $request->product_method_th;
        $newProduct->product_method_en   = $request->product_method_en;
        $newProduct->product_direction_th   = $request->product_direction_th;
        $newProduct->product_direction_en   = $request->product_direction_en;
        $newProduct->product_selling_th   = $request->product_selling_th;
        $newProduct->product_selling_en   = $request->product_selling_en;
        $newProduct->product_property_th   = $request->product_property_th;
        $newProduct->product_property_en   = $request->product_property_en;
        $newProduct->product_installation_th   = $request->product_installation_th;
        $newProduct->product_installation_en   = $request->product_installation_en;
        $newProduct->product_caution_th   = $request->product_caution_th;
        $newProduct->product_caution_en   = $request->product_caution_en;
        $newProduct->product_spec_th   = $request->product_spec_th;
        $newProduct->product_spec_en   = $request->product_spec_en;
        $newProduct->product_extra_th   = $request->product_extra_th;
        $newProduct->product_extra_en   = $request->product_extra_en;

        $newProduct->product_distance_price   = $request->product_distance_price;
        // $newProduct->product_distance_km   = $request->product_distance_km;

        if($request["filepath"][0] !== null){
            $newimage = 'Product/'.time().$request["filepath"][0]->getClientOriginalName();
            Storage::put($newimage, file_get_contents($request["filepath"][0]));
            $newProduct->product_img = $newimage;
        }

        $newProduct->save();
       
        //dd($request->file('sub_gallery') );

        foreach($request->sub_gallery as $key => $value){

            if(!empty($request->sub_gallery[$key])){
                $newGallery = new ProductGallery;
                $newGallery->sap_code   = $request->sap_code;
                $newGallery->sort        = $request->sub_sort[$key];
                $newGallery->id_product   = $newProduct->id_product;
    
                //////รูป
                $newFilename = 'Product/'.time().$value->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($value));
                $newGallery->filepath = $newFilename;
    
                $newGallery->save();
            }

            if(!empty($request->video[$key])){
                $newGallery = new ProductGallery;
                $newGallery->sap_code   = $request->sap_code;
                $newGallery->sort        = $request->sub_sort[$key];
                $newGallery->id_product   = $newProduct->id_product;
    
                //////วิดิโอ
                $youtube =  str_replace("watch?v=", "embed/",$request->video[$key]);
                $newGallery->video = $youtube;
    
                $newGallery->save();

            }
           
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

        if(isset($request->product_count)){
            $updateProduct->product_count   = $request->product_count;
        }

        if(isset($request->product_method_th)){
            $updateProduct->product_method_th   = $request->product_method_th;
        }

        if(isset($request->product_method_en)){
            $updateProduct->product_method_en   = $request->product_method_en;
        }


        if(isset($request->product_direction_th)){
            $updateProduct->product_direction_th   = $request->product_direction_th;
        }

        if(isset($request->product_direction_en)){
            $updateProduct->product_direction_en   = $request->product_direction_en;
        }

        if(isset($request->product_caution_th)){
            $updateProduct->product_caution_th   = $request->product_caution_th;
        }

        if(isset($request->product_caution_en)){
            $updateProduct->product_caution_en   = $request->product_caution_en;
        }

        if(isset($request->product_spec_th)){
            $updateProduct->product_spec_th   = $request->product_spec_th;
        }

        if(isset($request->product_spec_en)){
            $updateProduct->product_spec_en   = $request->product_spec_en;
        }

        if(isset($request->product_selling_th)){
            $updateProduct->product_selling_th   = $request->product_selling_th;
        }

        if(isset($request->product_selling_en)){
            $updateProduct->product_selling_en   = $request->product_selling_en;
        }

        if(isset($request->product_property_th)){
            $updateProduct->product_property_th   = $request->product_property_th;
            
        }
        if(isset($request->product_property_en)){
            $updateProduct->product_property_en   = $request->product_property_en;
            
        }
        if(isset($request->product_installation_th)){
            $updateProduct->product_installation_th   = $request->product_installation_th;
        }
        if(isset($request->product_installation_en)){
            $updateProduct->product_installation_en   = $request->product_installation_en;
        }

        if(isset($request->product_extra_th)){
            $updateProduct->product_extra_th   = $request->product_extra_th;
        }
        if(isset($request->product_extra_en)){
            $updateProduct->product_extra_en   = $request->product_extra_en;
        }

        if(isset($request->product_distance_price)){
            $updateProduct->product_distance_price   = $request->product_distance_price;
        }

        // if(isset($request->product_distance_km)){
        //     $updateProduct->product_distance_km   = $request->product_distance_km;
        // }

       // dd(   $request->all());

       if(isset($request["filepath"][$id])){
            $newimage = 'Product/'.time().$request["filepath"][$id]->getClientOriginalName();
            Storage::put($newimage, file_get_contents($request["filepath"][$id]));
            $updateProduct->product_img = $newimage;
        }  


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
                    $newFilename = 'Product/'.time().$value->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($value));
                    $updateGallery->filepath = $newFilename;
        
                    $updateGallery->save();
                }else{

                    if(!empty($request->sub_gallery[$key])){
                        $newGallery = new ProductGallery;
                        $newGallery->sap_code   = $request->sap_code;
                        $newGallery->id_product   = $updateProduct->id_product;
                        $newGallery->sort        = $request->sub_sort[$key];
            
                        //////รูป
                        $newFilename = 'Product/'.time().$value->getClientOriginalName();
                        Storage::put($newFilename, file_get_contents($value));
                        $newGallery->filepath = $newFilename;
            
                        $newGallery->save();
                    }
             
                }
               
            }
         }

            ////////////////update video 
            if(isset($request->video)){
                                    //////video
                foreach($request["video"] as $key => $video){
                   
                    if($video != NULL){
                        $updateGallery  = ProductGallery::where('id_product_gallery',$key)->first();
                            $newGallery = new ProductGallery;
                            $newGallery->sap_code   = $request->sap_code;
                            $newGallery->sort        = $request->sub_sort[$key];
                            $newGallery->id_product   = $updateProduct->id_product;
                
                            //////วิดิโอ
                            $youtube =  str_replace("watch?v=", "embed/",$request->video[$key]);
                            $newGallery->video = $youtube;
                
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


    public function ViewProduct(Request  $request){
        $product = Product::where('id_product',$request->id)->first();
        $cate = \App\Category::where('id_category',$product->id_category)->first();
        $subcate = \App\SubCategory::where('id_subcategory',$product->id_subcategory)->first();
        $img = \App\ProductGallery::where('id_product',$product->id_product)->orderby('sort')->first();
        echo '<div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col-3">
                                <b>รหัสสินค้า</b>
                            </div>
                            <div class="col-3">'.$product->sap_code.'
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>ชื่อสินค้า (ภาษาไทย)</b>
                            </div>
                            <div class="col-8">'.$product->product_name_th.'
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3">
                                <b>ชื่อสินค้า (ภาษาอังกฤษ)</b>
                            </div>
                            <div class="col-8">'.$product->product_name_en.'
                            </div>
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-3 ">
                                <b>หมวดหมู่หลัก</b>
                            </div>
                            <div class="col-5">'.$cate->category_name_th.'</div>
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-3 ">
                                <b>หมวดหมู่ย่อย</b>
                            </div>
                            <div class="col-5">'.$subcate->subcategory_name_en.'</div>
                        </div>
                    </div>
                    <div class="col-5"><img src="'.url('storage/app/'.$img->filepath).'" width="70%"></div>
                </div>
                
                <br>
               
                <br>
                <div class="row" >
                    <div class="col-3">
                        <b>ราคาปกติ </b>
                    </div>
                    <div class="col-2">'.$product->product_normal_price.'</div>
                    <div class="col-1">บาท</div>
                </div>
                <br>
                <div class="row" id="date">
                    <div class="col-3">
                        <b>จำนวนสินค้า </b>
                    </div>
                    <div class="col-2">'.$product->product_count.'</div>
                    <div class="col-1">ชิ้น</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>ข้อมูลจำเพาะสินค้า (ภาษาไทย)</b>
                    </div>
                    <div class="col-sm">'.$product->product_spec_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>ข้อมูลจำเพาะสินค้า (ภาษาอังกฤษ)</b>
                    </div>
                    <div class="col-sm">'.$product->product_spec_en.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียดสินค้า (ภาษาไทย)</b>
                    </div>
                    <div class="col-sm">'.$product->product_property_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียดสินค้า (ภาษาอังกฤษ)</b>
                    </div>
                    <div class="col-sm">'.$product->product_property_en.'
                    </div>
                </div>

                
        ';
    }


    public function ShowProduct(Request $request){
        $products = Product::where('id_subcategory',$request->id)->where('product_display',0)->get();
        $subcate = \App\SubCategory::where('id_subcategory',$request->id)->first();
        $cate = \App\Category::where('id_category',$subcate->id_category)->first();
        $html= '';
        $banner = '';
     //   dd($request->all());

        if(count($products) > 0){
            $html.='
            <div class="card-header" id="accordion-tab-1-heading-1">
                <h5>
                    <button class="btn btn-link" type="button" data-toggle="collapse"  aria-expanded="false" >'.$subcate->subcategory_name_th.'</button>
                </h5>
            </div>
            <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                <div class="card-body">

                    <div class="container">
                        <div class="row">';
                    foreach( $products as $product){
                $html.=              '<div class="col-md-4 col-lg-4 mb-4" >
                                            <a href="'.url('detail-product/'.$product->id_product.'').'"><img class="pro-img" src="'.url('storage/app/'.$product->product_img).'"></a>
                                        
                                        <center><p class="name-pro">'.$product->product_name_th.'</p><center>';
                                        if(!empty(	$item->product_special_price)){
                                            $html.=    '<center><p class="price-line">฿'.number_format($product->product_normal_price,2).'</p><center>';
                                        }
                                        if(!empty(	$product->product_special_price)){
                                            $html.= '<center><p class="price-pro">฿'.number_format($product->product_special_price,2).'</p><center>';
                                        }else{ 
                                            $html.= '<center><p class="price-pro">฿'.number_format($product->product_normal_price,2).'</p><center>';
                                        }
                                        $html.=  '<center><a href="javascript:void(0)" onclick="addcart('.$product->id_product.')"><p class="button"><span class="icon-shopping_cart"></span> เพิ่มในตะกร้า</p></a></center>';
                        $html.=       '</div>';
                                    
                                    }

                 
                                        

                $html.=              '</div>
                                    </div>

                                
                                </div>
                            </div>
                ';
        }else{
            $html.=  '   <div class="card-header" id="accordion-tab-1-heading-1">
                            <h5>
                                <button class="btn btn-link btntitle" type="button" data-toggle="collapse"  aria-expanded="false" >'.$subcate->subcategory_name_th.'</button>
                            </h5>
                        </div>
                        <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                            <div class="card-body">

                                <div class="container">
                                    <div class="row" id="contentproduct">
                                    <div class="col-sm text-center" >
                                          ไม่พบสินค้า
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
        }


        if(!empty($cate->category_img)){
                $img = url('storage/app/'.$cate->category_img);
        }else{
            $img =      url('frontend/images/banner-detail.jpg');
        }


        $banner     .=  '<div class="hero-wrap hero-bread" style="background-image: url('.$img.');">
                            <div class="container">
                                <div class="row no-gutters slider-text align-items-center justify-content-center">
                                    <div class="col-md-9 ftco-animate text-center">
                                        <h1 class="mb-0 bread">'.$cate->category_name_th.'</h1>
                                        <p class="breadcrumbs"><span class="mr-2"><a href="'.url('/').'">หน้าหลัก</a></span>/ <span>'.$cate->category_name_th.'</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>';
        $data  = array(
            'html'      => $html,
            'banner'      => $banner,

        );

        return $data;
    }

    public function DeleteProduct($id){
        Product::where('id_product',$id)->delete();
        $items =  ProductGallery::where('id_product',$id)->get();

        foreach($items as $item){
            ProductGallery::where('id_product_gallery',$item->id_product_gallery)->delete();
            Storage::delete($item->filepath);
        }   
    }
}
