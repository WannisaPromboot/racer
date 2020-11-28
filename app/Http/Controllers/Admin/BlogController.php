<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Blog_gallery;
use Storage;
use Config;

class BlogController extends Controller
{
    public function AddBlog(){
        return view('Admin.blog.add-blog');
    }

    public function ShowBlogContent(){
        $data = array(
            'data' => Blog::get(),
        );
        return view('Admin.blog.blog-content',$data);
    }

    public function EditBlog($id){
        $data = array(
            'item' => Blog::where('id_blog',$id)->first(),
            'image' => Blog_gallery::where('id_blog',$id)->get(),

        );
        
        return view('Admin.blog.edit-blog',$data);
    }

    public function DeleteBlog($id){
        Blog_gallery::where('id_blog_gallery',$id)->delete();
        Blog::where('id_blog',$id)->delete();
       
        return redirect('blogcontent')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function SaveBlog(Request $request){

        $Blog = new Blog;
        $Blog->blog_th	 = $request->blog_th;
        $Blog->blog_en	 = $request->blog_en;
        $Blog->description_blog_th	 = $request->blog_description_th;
        $Blog->description_blog_en	 = $request->blog_description_en;

        if($request["filepath"][0] !== null){
            $blog_image = 'Blog/'.time().$request["filepath"][0]->getClientOriginalName();
            Storage::put($blog_image, file_get_contents($request["filepath"][0]));
            $Blog->blog_image = $blog_image;
        }
     
        $Blog->save();
        // dd($Blog);
        if(isset($request["sub_gallery"])){      
            $foreignId = $Blog->id_blog;
            foreach($request["sub_gallery"] as $key => $subgallery){
                $gallery = new Blog_gallery;
                $gallery->id_blog = $foreignId;
                $newFilename = 'Blog_Gallery/'.time().$subgallery->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($subgallery));
                $gallery->blog_gallery_image = $newFilename;
                
                $gallery->save();
            }
        }
        return redirect('blogcontent')->with('Save','บันทึกข้อมูลสำเร็จ');
        
    }



    public function viewaddblog($id){
        return view('Admin.blog.add-blog',['id'=>$id]);
    }

    public function UpdateBlog(Request $request,$id){
        $updateBlog = Blog::where('id_blog',$id)->first();

        $updateBlog->blog_th	 = $request->blog_th;
        $updateBlog->blog_en	 = $request->blog_en;
        $updateBlog->description_blog_th	 = $request->blog_description_th;
        $updateBlog->description_blog_en	 = $request->blog_description_en;

        if(isset($request["filepath"][$id])){
            $blog_image = 'Blog/'.time().$request["filepath"][$id]->getClientOriginalName();
            Storage::put($blog_image, file_get_contents($request["filepath"][$id]));
            $updateBlog->blog_image = $blog_image;
        }

        $updateBlog->save();

        if(isset($request["deletedkey"])){
            foreach($request["deletedkey"] as $delete_picture_id){
                Blog_gallery::where('id_blog_gallery',$delete_picture_id)->delete();
            }
        }
        if(isset($request["sub_gallery"])){      
            $foreignId = $updateBlog->id_blog;
            foreach($request["sub_gallery"] as $key => $subgallery){
                $gallery = new Blog_gallery;
                $gallery->id_blog = $foreignId;
                $newFilename = 'Blog_Gallery/'.time().$subgallery->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($subgallery));
                $gallery->blog_gallery_image = $newFilename;
                
                $gallery->save();
            }
        }
        
        return redirect('blogcontent')->with('Save','บันทึกข้อมูลสำเร็จ');
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



    public function DetailBlog($id){
        $blog = Blog::where('id_blog',$id)->first();
  
        echo '
        <div class="row">
            <div class="col-sm text-center">
                <p><b>รูปภาพ </b></p>
                   <img src="'.url('storage/app/'.$blog->blog_image).'" width="300px" >
            </div>


            <div class="col-sm">

                <div class="row">
                    <div class="col-5 mt-4">
                        <b> หัวข้อ (ภาษาไทย) : </b>
                    </div>
                    <div class="col-7 mt-4" >'.$blog->blog_th.'</div> 
                </div>
                <br>

                <div class="row">
                    <div class="col-5">
                        <b>หัวข้อ (ภาษาอังกฤษ) : </b>
                    </div>
                    <div class="col-7">'.$blog->blog_en.'</div>  
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-5"><b>รายละเอียด<br> (ภาษาไทย) :</b></div>
                    <div class="col-sm">
                        '.strip_tags($blog->description_blog_th).'
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5"><b>รายละเอียด <br>(ภาษาอังกฤษ) :</b></div>
                    <div class="col-sm">
                    '.strip_tags($blog->description_blog_en).'
                    </div>
                </div>
                
            </div>
        </div>
        <br>
      
        
    ';
    }


}


