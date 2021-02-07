<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Slide;
use DB;

class PageBannerController extends Controller
{
    //
    public function AddPagebanner($id){
        $data = array(
            'data' => Slide::where('page',$id)->first(),
            'idpage' => $id
        );
        
        return view('Admin.pagebanner.add-banner-page',$data);
        
        
        
    }



    public function Savepagebanner(Request $request){
        $pagebanner = Slide::where('page', $request->page)->first();
        if(empty($pagebanner)){
            if($request->filepath !== null){
                $newFilename = 'Slide/'.time().$request->filepath->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath));
                Slide::insert(['slide_image'=>$newFilename,'page'=>$request->page]);
            }
    
           
        }else{
            if($request->filepath !== null){
                $newFilename = 'Slide/'.time().$request->filepath->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath));
                Slide::where('page',$request->page)->update(['slide_image'=>$newFilename]);
            }
        }
        
        


        return redirect('pagecontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function EditSubbanner($id){
        $data = array(
            'data' => DB::Table('subbanner')->where('subbanner_page',$id)->get(),
            'idpage' => $id
        );
        
        return view('Admin.pagebanner.editsub-banner',$data);
        
        
        
    }


    public function SaveSubbanner(Request $request){
        // dd($request->all());/
        $pagebanner = DB::Table('subbanner')->where('subbanner_page', $request->page)->first();
        if(empty($pagebanner)){
            if($request->filepath1 !== null){
                $newFilename = 'Banner/'.time().$request->filepath1->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath1));
                DB::Table('subbanner')->insert(['subbanner_image'=>$newFilename,'subbanner_page'=>$request->page,'subbanner_sort'=>1]);
            }
            if($request->filepath2 !== null){
                $newFilename = 'Banner/'.time().$request->filepath2->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath2));
                DB::Table('subbanner')->insert(['subbanner_image'=>$newFilename,'subbanner_page'=>$request->page,'subbanner_sort'=>2]);
            }
            
        }else{
            if($request->filepath1 !== null){
                $newFilename = 'Banner/'.time().$request->filepath1->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath1));
                DB::Table('subbanner')->where('subbanner_sort',1)->where('subbanner_page',$request->page)->update(['subbanner_image'=>$newFilename]);
            }
            
            if($request->filepath2 !== null){
                $newFilename = 'Banner/'.time().$request->filepath2->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath2));
                DB::Table('subbanner')->where('subbanner_sort',2)->where('subbanner_page',$request->page)->update(['subbanner_image'=>$newFilename]);
            }
        }
        
        if(isset($request->link1)){
           
            DB::Table('subbanner')->where('subbanner_sort',1)->where('subbanner_page',$request->page)->update(['subbanner_link'=>$request->link1]);
        }
        if(isset($request->link2)){
       
            DB::Table('subbanner')->where('subbanner_sort',2)->where('subbanner_page',$request->page)->update(['subbanner_link'=>$request->link2]);
        }


        return redirect('subbanner')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    


   
}
