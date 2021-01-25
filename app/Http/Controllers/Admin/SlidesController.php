<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Slide;
use DB;
use Config;

class SlidesController extends Controller
{
    //
    public function AddSlide(){
        return view('Admin.slide.add-slide');
    }


    public function ShowSlideContent(){
        $data = array(
            'data' => Slide::orderBy('slide_number','ASC')->where('page',1)->get(),
        );
        return view('Admin.slide.slide-content',$data);
    }

    public function EditSlide($id){
        $data = array(
            'slide'   => Slide::where('id_slide',$id)->first(),
        );

        return view('Admin.slide.edit-slide',$data);
    }


    public function SaveSlide(Request $request){
        $SlideContent = new Slide;
        if($request->sort !== null){
            $SlideContent->slide_number = $request->sort;
        }else{
            $SlideContent->slide_number = 0;

        }
                    ////video youtube
        if($request->video !== null){
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $SlideContent->slide_video = $youtube;
        }

        
        if($request->filepath !== null){
            $newFilename = 'Slide/'.time().$request->filepath->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->filepath));
            $SlideContent->slide_image = $newFilename;
        }
        $SlideContent->page = 1;

        $SlideContent->save();


        return redirect('slidecontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function UpdateSlide(Request $request){
        $SlideContent = Slide::where('id_slide',$request->sid)->first();
        if(isset($request->video)){
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $SlideContent->slide_video = $youtube;
        }
        if(isset( $request->sort)){
            $SlideContent->slide_number = $request->sort;
        }
        
        if($request->filepath !== null){
            $newFilename = 'Slide/'.time().$request->filepath->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->filepath));
            $SlideContent->slide_image = $newFilename;
        }

        $SlideContent->save();
            
        return redirect('slidecontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');

    }


    public function change_sortslide(Request $request){
        $data['sort'] = $request->slide_sort;
        Slide::where('slide_id',$request->slide_id)->update($data);

    }


    public function ViewSlide(Request $request,$id){
        $slide  =   Slide::where('slide_id',$id)->first();

        $month_th['01'] = 'ม.ค.';
        $month_th['02'] = 'ก.พ.';
        $month_th['03'] = 'มี.ค.';
        $month_th['04'] = 'เม.ย.';
        $month_th['05'] = 'พ.ค.';
        $month_th['06'] = 'มิ.ย.';
        $month_th['07'] = 'ก.ค.';
        $month_th['08'] = 'ส.ค.';
        $month_th['09'] = 'ก.ย.';
        $month_th['10'] = 'ต.ค.';
        $month_th['11'] = 'พ.ย.';
        $month_th['12'] = 'ธ.ค.';
        $month_en['01'] = 'JAN';
        $month_en['02'] = 'FEB';
        $month_en['03'] = 'MAR';
        $month_en['04'] = 'APR';
        $month_en['05'] = 'MAY';
        $month_en['06'] = 'JUN';
        $month_en['07'] = 'JUL';
        $month_en['08'] = 'AUG';
        $month_en['09'] = 'SEP';
        $month_en['10'] = 'OCT';
        $month_en['11'] = 'NOV';
        $month_en['12'] = 'DEC';

        $daystart = explode('-',date_format(date_create($slide->datefrom), 'Y-m-d'));/////var is column name
        $dayend = explode('-',date_format(date_create($slide->dateto), 'Y-m-d'));/////var is column name 
        if(Config::get('app.locale') == 'en' ){
            $yearstart = $daystart[0]+543;
             $yearend = $dayend[0]+543;
        }else{
            $yearstart = $daystart[0];
            $yearend = $dayend[0];
        }

        $datestart = $daystart[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$daystart[1]] : $month_th[$daystart[1]] ).' '.$yearstart;
        $dateend = $dayend[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$dayend[1]] : $month_th[$dayend[1]] ).' '.$yearend;
      

        echo        '<div class="row">
                        <div class="col-2">
                        หัวข้อ : 
                        </div>
                        <div class="col-sm">
                        '.$slide->title_th.'
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">รูปภาพ : </div>
                        <div class="col-5">';

                        if(!empty($slide->filepath)){
                         echo   '<img src="'.url('storage/app/'.$slide->filepath).'" id="imgpreview_filepath" style="width:300px" >';
                        }else{
                            echo '-';
                        }
                echo   '</div>
                        <div class="col-2">ลำดับรูปภาพ : </div>
                        <div class="col-1">
                            '.$slide->sort.'
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">วิดิโอ : </div>
                        <div class="col-8">';
                            if(!empty($slide->video)){
                             echo   '<iframe src="'.$slide->video.'?autoplay=1&controls=0" allowfullscreen allow="autoplay;"></iframe>';
                            }else{
                                echo '-';
                            }
                echo      '</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">ลิงค์ : </div>
                        <div class="col-8">
                        '.$slide->link.'
                        </div>
                    </div>   
                    <br>
                    <div class="row mt-3">
                        <div class="col-2">
                            <b>จากวันที่ : </b>
                        </div>
                        <div class="col-3">
                            '.$datestart.'
                        </div>
                        <div class="col-2">
                            <b>ถึงวันที่ : </b>
                        </div>
                        <div class="col-3">
                        '.$dateend.'
                        </div>
                    </div>  
                    <br>';
                    // <div class="row">
                    //     <div class="col-2">
                    //         <b>กลุ่มลูกค้า</b>
                    //     </div>
                    //     <div class="col-sm">';
                            
                    //     $target = \App\slideitem::where('slide_id',$slide->slide_id)->get(); 
                    //    // dd($target);
                    //     foreach ($target as $value) {
                    //         echo '<button class="btn btn-light mr-1">'.$value->target.'</button>';
                            
                    //     }  

                    // echo    '</div>
                    // </div>';
                   

    }


}
