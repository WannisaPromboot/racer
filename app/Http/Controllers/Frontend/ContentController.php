<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Artist;
use App\ArtistContent;
use App\News;
use App\Gallery;
use View\frontend\GalleryPattern;


class ContentController extends Controller
{
    //

    public function ShowIndex(){
        $data['banner_video'] = DB::table('home_embed_banner')->value('video_id');
        $data['artists'] = Artist::all();
        $data['allnews'] = News::all();

        return view('frontend.index',$data);
    }
    public function AboutUs(){
        return view('frontend.about');
    }

    public function ContactUs(){
        return view('frontend.contact');
    }
    
    public function ShowAllNews(){
        $data['allnews'] = News::all();
        $data['galleries'] = Gallery::all();
        return view('frontend.news',$data);
    }
    public function ShowNewsContent($news_id){

        $data['news'] = News::where('id',$news_id)->first();
        
        return view('frontend.readmore_news',$data);
    }

    public function ShowAllArtist(){
        $data['artists'] = Artist::all();
        return view('frontend.artist',$data);
    }
    public function ShowArtistContent($artist_id){

        $data['artist'] = Artist::where('id',$artist_id)->first();
        return view('frontend.readmore_artist',$data);
    }
    public function ShowAllGallery(){
        return view('frontend.gallery');
    }
    public function ShowGalleryPicture($gallery_id){
        $gallerypictures = Gallery::where('id',$gallery_id)->first()->pictures()->get();

        $data['gallerypictures'] = [];

        //initial
        $pattern = 1; //pattern at begin except key = 0
        $skip = 999;
        $switch = [];
        $round = 0;
        // $side = 'l';
        foreach($gallerypictures as $key => $picture){
            
            if($key == $skip){
                
                continue;
            }

            if($round % 2 == 0){
                $side = 'r';
            }else{
                $side = 'l';
            }

                
            if($round % 2 == 1){
                // dd($key)
                $switch[] = $round;
                if($pattern == 1){
                    $pattern = 2; 
                }else{
                    $pattern = 1;
                }
            }

            if($pattern == 1){
                
                $data['gallerypictures'][$key] = $this->GalleryPattern1(['src' => url('storage/app/'.$picture->filepath)],$side);
                $round++;
                
            }else{
                $inlinePicture = [];
                $inlinePicture[] = ['src' => url('storage/app/'.$gallerypictures[$key]->filepath)];
                $inlinePicture[] = isset($gallerypictures[$key+1]) ? ['src' => url('storage/app/'.$gallerypictures[$key+1]->filepath)] : ['src'=>''] ;

                $data['gallerypictures'][$key] = $this->GalleryPattern2($inlinePicture,$side);
                
                $skip = $key + 1;
                $round++;
            }
            
        }
        
        //  dd($round);
        
        return view('frontend.readmore_gallery',$data);
    }

    public function GalleryPattern1(array $picture,$side){
        return '<div class="col-12 col-md-8 pad_'.$side.'">
                    <div class="hovereffect_gallery">
                        <a href="'.$picture['src'].'" data-fancybox="images"><img src="'.$picture['src'].'" class="img-fluid"/ style="width: 100%;"></a>
                    </div>
                </div>';
    }
    public function GalleryPattern2(array $picture,$side){
        return 
        '<div class="col-12 col-md-4 pad_'.$side.'">
            <div class="hovereffect_gallery">
                <a href="'.$picture[0]['src'].'" data-fancybox="images"><img src="'.$picture[0]['src'].'" class="img-fluid" style="width: 100%;"></a>
            </div>
            <div class="hovereffect_gallery">
                <a href="'.$picture[1]['src'].'" data-fancybox="images"><img src="'.$picture[1]['src'].'" class="img-fluid"/ style="width: 100%;"></a>
            </div>
        </div>';
    }
}
