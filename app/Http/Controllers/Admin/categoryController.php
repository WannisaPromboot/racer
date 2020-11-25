<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

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

        $NewCategory->save();

        return redirect('categorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }

    public function Updatecategory(Request $request,$id){
        $UpdateCategory = Category::where('id_category',$id)->first();

        if(isset($request->category_th)){
            $UpdateCategory->category_name_th = $request->subcategory_name_th;
        }

        if(isset($request->category_en)){
            $UpdateCategory->category_name_en = $request->subcategory_name_th;
        }
      
        $UpdateCategory->save();

        return redirect('categorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }


    public function changsortcate(Request $request){
        $updateCate =  Category::where('id_category',$request->id)->first();
        $updateCate->sort = $request->sort;
        $updateCate->save();
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
        //dd($request->all());
        // $checksort = SubCategory::orderby('sort','desc')->first();
        // // if(empty( $checksort)){
        // //     $sort = 1;
        // // }else{
        // //     $sort =  $checksort->sort + 1;
        // // }
        
        $NewSubCategory = New SubCategory;

        $NewSubCategory->id_category = $request->category;
        $NewSubCategory->subcategory_name_th = $request->subcategory_name_th;
        $NewSubCategory->subcategory_name_en = $request->subcategory_name_en;

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
       
        $updateSubCategory->save();

        return redirect('subcategorycontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }


   

}
