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
        $newProduct->product_count   = $request->product_count;
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

        if(isset($request->product_count)){
            $updateProduct->product_count   = $request->product_count;
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
                                <b>หมวดหมู่ย่อย</b>
                            </div>
                            <div class="col-5">'.$subcate->subcategory_name_th.'</div>
                        </div>
                    </div>
                    <div class="col-5"><img src="'.url('storage/app/'.$img->filepath).'" width="70%"></div>
                </div>
                
                <br>
                <div class="row" >
                    <div class="col-3 ">
                        <b>หมวดหมู่ย่อย</b>
                    </div>
                    <div class="col-5">'.$subcate->subcategory_name_en.'</div>
                </div>
                <br>
                <div class="row" >
                    <div class="col-3">
                        <b>ราคาปกติ </b>
                    </div>
                    <div class="col-2">'.$product->product_normal_price.'</div>
                    <div class="col-1">บาท</div>
                    <div class="col-2 text-right">
                        <b>ราคาพิเศษ</b>
                    </div>
                    <div class="col-2">
                        '.$product->product_special_price.'</div>
                    <div class="col-1">บาท</div>
                </div>
                <br>
                 <div class="row">
                    <div class="col-3">
                        <b>วันที่เริ่ม </b>
                    </div>
                    <div class="col-3">'.$product->product_start.'</div>
                    <div class="col-2 text-right">
                        <b>ถึง</b>
                    </div>
                    <div class="col-2">'.$product->product_start.'</div>
                </div>
                <br>
                <div class="row" id="date">
                    <div class="col-3">
                        <b>จำนวนสินค้า </b>
                    </div>
                    <div class="col-2">'.$product->product_count.'</div>
                    <div class="col-">ชิ้น</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>วิธีใช้สนค้า (ภาษาไทย)</b>
                    </div>
                    <div class="col-sm">'.$product->product_method_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>วิธีใช้สนค้า (ภาษาอังกฤษ)</b>
                    </div>
                    <div class="col-sm">'.$product->product_method_en.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียดสินค้า (ภาษาไทย)</b>
                    </div>
                    <div class="col-sm">'.$product->product_description_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียดสินค้า (ภาษาอังกฤษ)</b>
                    </div>
                    <div class="col-sm">'.$product->product_description_en.'
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col">
                        <h4>ขนาดและการจัดส่ง</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>น้ำหนัก</b>
                    </div>
                        <div class="col-1">'.$product->product_kg.'</div>
                    <div class="col-1">กก.</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>ความกว้าง</b>
                    </div>
                    <div class="col-1">'.$product->product_width.'</div>
                    <div class="col-1">ซม.</div>
                    <div class="col-1">
                        <b>ความยาว</b>
                    </div>
                    <div class="col-1">'.$product->product_lenght.'
                    </div>
                    <div class="col-1">ซม.</div>
                    <div class="col-1">
                        <b>ความสูง</b>
                    </div>
                    <div class="col-1">'.$product->product_height.'
                    </div>
                    <div class="col-1">ซม.</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>ส่งฟรี </b>
                    </div>
                    <div class="col-1">'.$product->product_distance_free.'</div>
                    <div class="col-1">กม.</div>
                    <div class="col-1">
                        <b>กิโลเมตรละ</b>
                    </div>
                    <div class="col-1">'.$product->product_distance_km.'
                    </div>
                    <div class="col-1">บาท</div>
                </div>
        ';
    }


    public function ShowProduct(Request $request){
        $products = Product::where('id_subcategory',$request->id)->where('product_display',0)->get();
        $subcate = \App\SubCategory::where('id_subcategory',$request->id)->first();
        $html= '';

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
                        $img = \App\ProductGallery::where('id_product',$product->id_product)->orderby('sort')->first();
                $html.=              '<div class="col-md-4 col-lg-4 mb-4" >
                                            <a href="'.url('detail-product/'.$product->id_product.'').'"><img class="pro-img" src="'.url('storage/app/'.$img->filepath).'"></a>
                                        </div>';
                                    }
                                        


                $html.=              '</div>
                                    </div>

                                
                                </div>
                            </div>
                ';
        }else{
            $html.=  '   <div class="card-header" id="accordion-tab-1-heading-1">
                            <h5>
                                <button class="btn btn-link btntitle" type="button" data-toggle="collapse"  aria-expanded="false" >ทั้งหมด</button>
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
     

        

        return $html;
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
