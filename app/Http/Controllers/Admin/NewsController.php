<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\News_gallery;
use Storage;
use Config;

class NewsController extends Controller
{
    public function Addnew(){
        return view('Admin.news.add-new');
    }

    public function ShownewContent(){
        $data = array(
            'data' => News::get(),
        );
        return view('Admin.news.new-content',$data);
    }

    public function Editnew($id){
        $data = array(
            'item' => News::where('id_new',$id)->first(),
            'image' => News_gallery::where('id_new',$id)->get(),

        );
        
        return view('Admin.news.edit-new',$data);
    }

    public function Deletenew($id){
        News_gallery::where('id_new',$id)->delete();
        News::where('id_new',$id)->delete();
       
        return redirect('newcontent')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    }


    public function Savenew(Request $request){
        $New = new News();
        $New->new_th	 = $request->new_th;
        $New->new_en	 = $request->new_en;
        $New->description_new_th	 = $request->description_new_th;
        $New->description_new_en	 = $request->description_new_en;
        if($request->filepath !== null){
            $new_image = 'News/'.time().$request->filepath->getClientOriginalName();
            Storage::put($new_image, file_get_contents($request->filepath));
            $New->new_image = $new_image;
        }

        $New->save();
        // dd($new);
        if(isset($request["sub_gallery"])){      
            $foreignId = $New->id_new;
            foreach($request["sub_gallery"] as $key => $subgallery){
                $gallery = new News_gallery;
                $gallery->id_new = $foreignId;
                $newFilename = 'News_Gallery/'.time().$subgallery->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($subgallery));
                $gallery->new_gallery_image = $newFilename;
                
                $gallery->save();
            }
        }
        return redirect('newcontent')->with('Save','บันทึกข้อมูลสำเร็จ');
        
    }


    public function SaveViewBlog(Request $request){
        
        if(!empty($request->id)){
            $updateBlog = \App\Blog::where('blog_id',$request->id)->first();

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

    public function Updatenew(Request $request,$id){
        $updateNew = News::where('id_new',$id)->first();
        if(isset($request->new_th)){
            $updateNew->new_th	 = $request->new_th;
        }
        if(isset($request->new_en)){
            $updateNew->new_en	 = $request->new_en;
        }
        if(isset($request->description_new_th)){
            $updateNew->description_new_th	 = $request->description_new_th;
        }
        if(isset($request->description_new_en)){
            $updateNew->description_new_en	 = $request->description_new_en;
        }
        
        
        
        if($request->filepath !== null){
            $new_image = 'News/'.time().$request->filepath->getClientOriginalName();
            Storage::put($new_image, file_get_contents($request->filepath));
            $updateNew->new_image = $new_image;
        }

        $updateNew->save();
        // dd($new);
        if(isset($request["deleted_id"])){
            foreach($request["deleted_id"] as $delete_picture_id){
                News_gallery::where('id_new_gallery',$delete_picture_id)->delete();
            }
        }
        if(isset($request["sub_gallery"])){      
            $foreignId = $updateNew->id_new;
            foreach($request["sub_gallery"] as $key => $subgallery){
                $gallery = new News_gallery;
                $gallery->id_new = $foreignId;
                $newFilename = 'News_Gallery/'.time().$subgallery->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($subgallery));
                $gallery->new_gallery_image = $newFilename;
                
                $gallery->save();
            }
        }
        
        return redirect('newcontent')->with('Save','บันทึกข้อมูลสำเร็จ');
    }

    public function ViewUpdatenew(Request $request,$id){

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



    public function Detailnew($id){
        $new = News::where('id_new',$id)->first();
  
            echo '
                <div class="row">
                    <div class="col-sm text-center">
                        <p><b>รูปภาพ </b></p>
                           <img src="'.url('storage/app/'.$new->new_image).'" width="300px" >
                    </div>


                    <div class="col-sm">

                        <div class="row">
                            <div class="col-5 mt-4">
                                <b> หัวข้อ (ภาษาไทย) : </b>
                            </div>
                            <div class="col-7 mt-4" >'.$new->new_th.'</div> 
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-5">
                                <b>หัวข้อ (ภาษาอังกฤษ) : </b>
                            </div>
                            <div class="col-7">'.$new->new_en.'</div>  
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-5"><b>รายละเอียด<br> (ภาษาไทย) :</b></div>
                            <div class="col-sm">
                                '.strip_tags($new->description_new_th).'
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-5"><b>รายละเอียด <br>(ภาษาอังกฤษ) :</b></div>
                            <div class="col-sm">
                            '.strip_tags($new->description_new_en).'
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br>
              
                
            ';
    }


}


