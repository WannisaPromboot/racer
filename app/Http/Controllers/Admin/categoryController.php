<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use Storage;

class categoryController extends Controller
{
    public function Addcategory(){
        return view('Admin.category.add-category');
    }
    public function ShowcategoryContent(){

        $data = array(
            'category'  => \App\Category::orderby('sort','asc')->get(),
        );
        return view('Admin.category.category-content',$data);
    }

    public function Editcategory($id){
        
        $data = array(
            'item'  => Category::where('id_category',$id)->first(),
        );
        return view('Admin.category.edit-category',$data);
    }

    public function savecategory(Request $request){
        $checksort = Category::orderby('sort','desc')->first();
        if(empty( $checksort)){
            $sort = 1;
        }else{
            $sort =  $checksort->sort + 1;
        }

        $NewCategory = New Category;

        $NewCategory->category_name_th = $request->category_th;
        $NewCategory->category_name_en = $request->category_en;
        $NewCategory->sort = $sort;

        if($request["filepath"][0] !== null){
            $newimage = 'Cate/'.time().$request["filepath"][0]->getClientOriginalName();
            Storage::put($newimage, file_get_contents($request["filepath"][0]));
            $NewCategory->category_img = $newimage;
        }


        $NewCategory->save();

        return redirect('categorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }

    public function Updatecategory(Request $request,$id){
      // dd($request->all());
        $UpdateCategory = Category::where('id_category',$id)->first();

        if(isset($request->category_th)){
            $UpdateCategory->category_name_th = $request->category_th;
        }

        if(isset($request->category_en)){
            $UpdateCategory->category_name_en = $request->category_en;
        }

        if(isset($request["filepath"])){
            $newimage = 'Cate/'.time().$request["filepath"][$id]->getClientOriginalName();
            Storage::put($newimage, file_get_contents($request["filepath"][$id]));
            $UpdateCategory->category_img = $newimage;
        }

      
        $UpdateCategory->save();

        return redirect('categorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }


    public function changsortcate(Request $request){
        $updateCate =  Category::where('id_category',$request->id)->first();
        $updateCate->sort = $request->sort;
        $updateCate->save();
    }

    public function ViewCategory(Request $request){
        $item = Category::where('id_category',$request->id)->first();
         echo   '
                    <div class="row">
                        <div class="col-3">
                            <b>ชื่อหมวดหมู่ (ภาษาไทย)</b>
                        </div>
                        <div class="col-6">
                            '.$item->category_name_th.'
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b>ชื่อหมวดหมู่ (ภาษาอังกฤษ)</b>
                        </div>
                        <div class="col-6">
                            '.$item->category_name_en.'
                        </div>
                    </div>';
    }

    //////////////sub 

    public function Addsubcategory(){

        $data = array(
            'category'  => \App\Category::all(),
        );

        return view('Admin.subcategory.add-subcategory',$data);
    }
    public function ShowsubcategoryContent(){
        $data = array(
            'category'  => \App\Category::all(),
        );

        return view('Admin.subcategory.subcategory-content',$data);
    }

    public function Editsubcategory($id){

        $data = array(
            'category'  => \App\Category::all(),
            'item'      => \App\SubCategory::where('id_subcategory',$id)->first()
        );


        return view('Admin.subcategory.edit-subcategory',$data);
    }

    public function SaveSubcategory(Request $request){

        
        $NewSubCategory = New SubCategory;

        $NewSubCategory->id_category = $request->category;
        $NewSubCategory->subcategory_name_th = $request->subcategory_name_th;
        $NewSubCategory->subcategory_name_en = $request->subcategory_name_en;
        $NewSubCategory->sort = $request->sort;

        //dd($NewSubCategory);

        $NewSubCategory->save();

        return redirect('subcategorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }


    public function UpdateSubcategory(Request $request,$id){
        $updateSubCategory = SubCategory::where('id_subcategory',$id)->first();
        if(isset( $request->category)){
            $updateSubCategory->id_category = $request->category;
        }
        if(isset($request->subcategory_name_th)){
            $updateSubCategory->subcategory_name_th = $request->subcategory_name_th;
        }

        if(isset($request->subcategory_name_en)){
            $updateSubCategory->subcategory_name_en = $request->subcategory_name_en;
        }

        
        if(isset($request->sort)){
            $updateSubCategory->sort = $request->sort;
        }
       
        $updateSubCategory->save();

        return redirect('subcategorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }


    public function ViewSubCategory(Request $request){
        $item      = \App\SubCategory::where('id_subcategory',$request->id)->first();
        $category =  \App\Category::where('id_category',$item->id_category)->first();
           

        echo  '
                <div class="row"> 
                    <div class="col-6"><b>หมวดหมู่หลัก:</b></div>
                    <div class="col-6">'.$category->category_name_th.'</div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 "><b>ชื่อหมวดหมู่ย่อย 1 (ภาษาไทย) :</b></div>
                    <div class="col-5">'.$item->subcategory_name_th.'</div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 "><b>ชื่อหมวดหมู่ย่อย 1 (ภาษาอังกฤษ) :</b></div>
                    <div class="col-5">'.$item->subcategory_name_en.'</div>
                </div>
                <div class="row mt-2">
                    <div class="col-6 "><b>ลำดับการแสดง :</b></div>
                    <div class="col-5">'.$item->sort.'</div>
                </div>';
    }


   

}
