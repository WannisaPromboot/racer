<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Banner;
use App\Category;
use DB;
use Config;

class BannerController extends Controller
{
    //
    public function Addbanner(){
        $data = array(
            'data' => Category::get(),
        );
        return view('Admin.banner.add-banner',$data);
    }


    public function ShowbannerContent(){
        $data = array(
            'data' => Category::get(),
        );
        return view('Admin.banner.banner-content',$data);
    }

    public function Editbanner($id){
        $data = array(
            'banner'   => Banner::where('category_id',$id)->get(),
            'data' => Category::where('id_category',$id)->first(),
            'idcate' => $id
        );

        return view('Admin.banner.edit-banner',$data);
    }


    public function Savebanner(Request $request){
        $bannerContent = new Banner;
        if($request->sort !== null){
            $bannerContent->banner_number = $request->sort;
        }else{
            $bannerContent->banner_number = 0;

        }
                    ////video youtube
        if($request->video !== null){
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $bannerContent->banner_video = $youtube;
        }

        
        if($request->filepath !== null){
            $newFilename = 'Banner/'.time().$request->filepath->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->filepath));
            $bannerContent->banner_image = $newFilename;
        }

        $bannerContent->save();


        return redirect('bannercontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function Updatebanner(Request $request){

        $bannerContent1 = Banner::where('category_id',$request->id_category)->where('banner_number',1)->first();
        $bannerContent2 = Banner::where('category_id',$request->id_category)->where('banner_number',2)->first();
        $bannerContent3 = Banner::where('category_id',$request->id_category)->where('banner_number',3)->first();
        $bannerContent4 = Banner::where('category_id',$request->id_category)->where('banner_number',4)->first();
        $bannerContent5 = Banner::where('category_id',$request->id_category)->where('banner_number',5)->first();
        
        if($request->filepath1 !== null){
            $newFilename1 = 'Banner/'.time().$request->filepath1->getClientOriginalName();
            Storage::put($newFilename1, file_get_contents($request->filepath1));
            if(!empty($bannerContent1)){
                Banner::where('category_id',$request->id_category)->where('banner_number',1)->update(['banner_image'=>$newFilename1]);
            }else{
                DB::insert('insert into banner (category_id, banner_image ,banner_number) values (?,?,?)', [$request->id_category,$newFilename1,1]);

            }
        }


        if($request->filepath2 !== null){
            $newFilename2 = 'Banner/'.time().$request->filepath2->getClientOriginalName();
            Storage::put($newFilename2, file_get_contents($request->filepath2));
            if(!empty($bannerContent2)){
                Banner::where('category_id',$request->id_category)->where('banner_number',2)->update(['banner_image'=>$newFilename2]);
            }else{
                DB::insert('insert into banner (category_id, banner_image ,banner_number) values (?,?,?)', [$request->id_category,$newFilename2,2]);

            }
        }

        if($request->filepath3 !== null){
            $newFilename3 = 'Banner/'.time().$request->filepath3->getClientOriginalName();
            Storage::put($newFilename3, file_get_contents($request->filepath3));
            if(!empty($bannerContent3)){
                Banner::where('category_id',$request->id_category)->where('banner_number',3)->update(['banner_image'=>$newFilename3]);
            }else{
                DB::insert('insert into banner (category_id, banner_image ,banner_number) values (?,?,?)', [$request->id_category,$newFilename3,3]);

            }
        }

        if($request->filepath4 !== null){
            $newFilename4 = 'Banner/'.time().$request->filepath4->getClientOriginalName();
            Storage::put($newFilename4, file_get_contents($request->filepath4));
            if(!empty($bannerContent4)){
                Banner::where('category_id',$request->id_category)->where('banner_number',4)->update(['banner_image'=>$newFilename4]);
            }else{
                DB::insert('insert into banner (category_id, banner_image ,banner_number) values (?,?,?)', [$request->id_category,$newFilename4,4]);

            }
        }

        if($request->filepath5 !== null){
            $newFilename5 = 'Banner/'.time().$request->filepath5->getClientOriginalName();
            Storage::put($newFilename5, file_get_contents($request->filepath5));
            if(!empty($bannerContent5)){
                Banner::where('category_id',$request->id_category)->where('banner_number',5)->update(['banner_image'=>$newFilename5]);
            }else{
                DB::insert('insert into banner (category_id, banner_image ,banner_number) values (?,?,?)', [$request->id_category,$newFilename5,5]);

            }
        }

        if(isset($request->banner_link1)){
            if(!empty($bannerContent1)){
                Banner::where('category_id',$request->id_category)->where('banner_number',1)->update(['banner_link'=>$request->banner_link1]);
            }
        }
        if(isset($request->banner_link2)){
            if(!empty($bannerContent2)){
                Banner::where('category_id',$request->id_category)->where('banner_number',2)->update(['banner_link'=>$request->banner_link2]);
            }
        }
        if(isset($request->banner_link3)){
            if(!empty($bannerContent3)){
                Banner::where('category_id',$request->id_category)->where('banner_number',3)->update(['banner_link'=>$request->banner_link3]);
            }
        }
        if(isset($request->banner_link4)){
            if(!empty($bannerContent4)){
                Banner::where('category_id',$request->id_category)->where('banner_number',4)->update(['banner_link'=>$request->banner_link4]);
            }
        }
        if(isset($request->banner_link5)){
            if(!empty($bannerContent5)){
                Banner::where('category_id',$request->id_category)->where('banner_number',5)->update(['banner_link'=>$request->banner_link5]);
            }
        }

        return redirect('bannercontent')->with('Save','อัพเดตข้อมูลเรียบร้อยแล้ว');

    }


    public function change_sortslide(Request $request){
        $data['sort'] = $request->slide_sort;
        Banner::where('slide_id',$request->slide_id)->update($data);

    }


    public function ViewSlide(Request $request,$id){
        $slide  =   Banner::where('slide_id',$id)->first();

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

    public function Viewbanner($id){
        $data = array(
            'data' => Banner::where('category_id',$id)->leftJoin('category','banner.category_id','=','id_category')->get(),
        );

        // dd($data['data']);
        return view('Admin.banner.detail-banner',$data);
    }
}
