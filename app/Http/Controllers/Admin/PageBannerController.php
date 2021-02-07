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


    


   
}
