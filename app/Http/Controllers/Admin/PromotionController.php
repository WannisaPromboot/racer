<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;
use Storage;
use Config;

class PromotionController extends Controller
{
    public function Addpromotion(){
        return view('Admin.promotion.add-promotion');
    }

    public function ShowpromotionContent(){
        $data = array(
            'data' => Promotion::get(),
        );
        return view('Admin.promotion.promotion-content',$data);
    }

    public function Editpromotion($id){
        $data = array(
            'item' => Promotion::where('id_new_promotion',$id)->first(),
            // 'image' => Blog_gallery::where('id_new_promotion',$id)->get(),

        );
        
        return view('Admin.promotion.edit-promotion',$data);
    }

    public function Deletepromotion($id){
        Promotion::where('id_new_promotion',$id)->delete();
       
        return redirect('promotioncontent')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function Savepromotion(Request $request){


        if($request->filepath !== null){
            $image = 'Promotion/'.time().$request->filepath->getClientOriginalName();
            Storage::put($image, file_get_contents($request->filepath));
        }
        if(isset($request->link)){
            Promotion::insert(['promotion_image'=>$image,'promotion_link'=>$request->link]);

        }
        Promotion::insert(['promotion_image'=>$image]);

        
        
        return redirect('promotioncontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
        
    }


    public function SaveViewBlog(Request $request){
        
        if(!empty($request->id)){
            $updateBlog = \App\Blog::where('id_promotion',$request->id)->first();

            $updateBlog->title_th	 = $request->title_th;
            $updateBlog->title_en	 = $request->title_en;
            $updateBlog->title_ch	 = $request->title_ch;
            $updateBlog->catagory	 = $request->catagory;
            $updateBlog->description_th	 = $request->description_th;
            $updateBlog->description_en	 = $request->description_en;
            $updateBlog->description_ch	 = $request->description_ch;
            $updateBlog->datefrom	 = $request->datefrom;
            $updateBlog->dateto	 = $request->dateto;
            $updateBlog->title_th	 = $request->title_th;
            $updateBlog->title_th	 = $request->title_th;
            $updateBlog->title_th	 = $request->title_th;
            $updateBlog->link	 = $request->link;
            $updateBlog->status  = 1; 

            ////video youtube
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $updateBlog->video = $youtube;

            if(isset($request->filepath)){
                $newFilename = 'Blog/'.time().$request->filepath->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath));
                $updateBlog->filepath = $newFilename;
            }
    
            $updateBlog->save();

            return view('Admin.store_customer.viewblog_1',['id' =>$updateBlog->id_store_review]); 

        }else{
            
            $BlogContent = new  Blog;

            $BlogContent->title_th	 = $request->title_th;
            $BlogContent->title_en	 = $request->title_en;
            $BlogContent->title_ch	 = $request->title_ch;
            $BlogContent->catagory	 = $request->catagory;
            $BlogContent->description_th	 = $request->description_th;
            $BlogContent->description_en	 = $request->description_en;
            $BlogContent->description_ch	 = $request->description_ch;
            $BlogContent->datefrom	 = $request->datefrom;
            $BlogContent->dateto	 = $request->dateto;
            $BlogContent->title_th	 = $request->title_th;
            $BlogContent->title_th	 = $request->title_th;
            $BlogContent->title_th	 = $request->title_th;
            $BlogContent->link	 = $request->link;
            $BlogContent->status  = 1; 

            ////video youtube
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $BlogContent->video = $youtube;
            if(isset($request->filepath)){
                $newFilename = 'Blog/'.time().$request->filepath->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->filepath));
                $BlogContent->filepath = $newFilename;
            }
    
            $BlogContent->save();

            
            return redirect('viewblogascustomer/'.$BlogContent->blog_id.''); 
        }
    }



    public function viewaddblog($id){
        return view('Admin.blog.add-blog',['id'=>$id]);
    }

    public function Updatepromotion(Request $request,$id){
        
        if($request->filepath !== null){
            $promotion_image = 'Promotion/'.time().$request->filepath->getClientOriginalName();
            Storage::put($promotion_image, file_get_contents($request->filepath));
            Promotion::where('id_new_promotion',$id)->update(['promotion_image'=>$promotion_image]);
        }
        if($request->link==''){
            Promotion::where('id_new_promotion',$id)->update(['promotion_link'=>NULL]);
        }else{
            Promotion::where('id_new_promotion',$id)->update(['promotion_link'=>$request->link]);

        }

        
        return redirect('promotioncontent')->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    public function ViewUpdateBlog(Request $request,$id){

                $BlogContent = Blog::where('blog_id',$id)->first();

                $BlogContent->title_th	 = $request->title_th;
                $BlogContent->title_en	 = $request->title_en;
                $BlogContent->title_ch	 = $request->title_ch;
                $BlogContent->catagory	 = $request->catagory;
                $BlogContent->description_th	 = $request->description_th;
                $BlogContent->description_en	 = $request->description_en;
                $BlogContent->description_ch	 = $request->description_ch;
                $BlogContent->datefrom	 = $request->datefrom;
                $BlogContent->dateto	 = $request->dateto;
                $BlogContent->title_th	 = $request->title_th;
                $BlogContent->title_th	 = $request->title_th;
                $BlogContent->title_th	 = $request->title_th;
                $BlogContent->link	 = $request->link;
                $BlogContent->status = 1;
                ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $BlogContent->video = $youtube;
        
                if(isset($request["filepath"])){
                    if(!empty($BlogContent->filepath)){
                        Storage::delete($BlogContent->filepath);
                    }
        
                    $newFilename = 'Blog/'.time().$request->filepath->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($request->filepath));
                    $BlogContent->filepath = $newFilename;
                }
        
                $BlogContent->save();
        
                return redirect('viewblogascustomer/'.$id.''); 
      
        
    }

    public function ViewSaveBlog($id){
        $BlogContent = Blog::where('blog_id',$id)->first();
        $BlogContent->status = 2;
        $BlogContent->save();

        return redirect('blogcontent'); 

    }

    public function ViewBlogAscustomer($id){
        return view('Admin.blog.viewblogedit',['id' => $id]); 
    }

    public function ViewBlog($id){
        $item = Blog::where('blog_id',$id)->first();

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

        $daystart = explode('-',date_format(date_create($item->datefrom), 'Y-m-d'));/////var is column name
        $dayend = explode('-',date_format(date_create($item->dateto), 'Y-m-d'));/////var is column name 
        if(Config::get('app.locale') == 'en' ){
            $yearstart = $daystart[0]+543;
             $yearend = $dayend[0]+543;
        }else{
            $yearstart = $daystart[0];
            $yearend = $dayend[0];
        }

        $datestart = $daystart[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$daystart[1]] : $month_th[$daystart[1]] ).' '.$yearstart;
        $dateend = $dayend[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$dayend[1]] : $month_th[$dayend[1]] ).' '.$yearend;

        $menu = \App\MainMenu::where('menu_id',$item->catagory)->first();
       // dd($item->catagory);
        echo '<div class="row">
                    <div class="col-3">
                        <b>หัวข้อ(ภาษาไทย) : </b>
                    </div>
                    <div class="col-5">
                        '.$item->title_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>หัวข้อ(ภาษาอังกฤษ) : </b>
                    </div>
                    <div class="col-5">
                        '.$item->title_en.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>หัวข้อ(ภาษาจีน) : </b>
                    </div>
                    <div class="col-5">
                        '.$item->title_ch.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>หมวดหมู่ : </b>
                    </div>
                    <div class="col-5">
                       '.$menu->menu_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียด(ภาษาไทย) : </b>
                    </div>
                    <div class="col-sm">
                         '.$item->description_th.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียด(ภาษาอังกฤษ) : </b>
                    </div>
                    <div class="col-sm">
                        '.$item->description_en.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <b>รายละเอียด(ภาษาจีน) : </b>
                    </div>
                    <div class="col-sm">
                        '.$item->description_ch.'
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">รูปภาพ : </div>
                    <div class="col-8">';
                    if(!empty($item->filepath)){
                        echo '<img src="'.url('storage/app/'.$item->filepath).'" id="imgpreview_filepath" style="max-height:200px;">';
                    }else{
                        echo '-';
                    }

                    echo   '</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2">ลิงค์ : </div>
                    <div class="col-8">
                        '.$item->link.'
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2">วิดิโอ : </div>
                    <div class="col-8">';
                        if(!empty($item->video)){
                           echo '<iframe src="'.$item->video.'?autoplay=1&controls=0" allowfullscreen allow="autoplay;"></iframe>';
                         }else{
                            echo '-';
                         }
                echo   '</div>
                </div>  
                <div class="row mt-3">
                    <div class="col-2">
                        <b>จากวันที่ : </b>
                    </div>
                    <div class="col-3">
                        '. $datestart.'
                    </div>
                    <div class="col-2">
                        <b>ถึงวันที่ : </b>
                    </div>
                    <div class="col-3">
                    '. $dateend.'
                    </div>
                </div>';
    }



    public function Detailpromotion($id){
        $blog = Blog::where('id_new_promotion',$id)->first();
  
            echo '
                <div class="row">
                    <div class="col-sm text-center">
                        <p><b>รูปภาพ </b></p>
                           <img src="'.url('storage/app/'.$blog->blog_image).'" width="300px" >
                    </div>
                    
                <div>
                <br>
              
                <div class="row">
                    <div class="col-4 mb-3">
                        <b> หัวข้อ (ภาษาไทย) : </b>
                    </div>
                    <div class="col-7">'.$blog->blog_th.'</div>  
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <b>หัวข้อ (ภาษาอังกฤษ) : </b>
                    </div>
                    <div class="col-7">'.$blog->blog_en.'</div>  
                
                </div>
                 
                <div class="row">
                    <div class="col-sm-4"><b>รายละเอียด (ภาษาไทย) :</b></div>
                    <div class="col-sm">
                        '.strip_tags($blog->blog_description_th).'
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>รายละเอียด (ภาษาอังกฤษ) :</b></div>
                    <div class="col-sm">
                    '.strip_tags($blog->blog_description_en).'
                    </div>
                </div>
            ';
    }


}


