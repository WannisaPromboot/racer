<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use DB;
use Redirect;

class ContentController extends Controller
{


    public function SummernoteUpload(Request $request){
        if ($request->file('file') !== null) {
            
            
                $newFilename = 'editorfile/'.time().$request->file->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->file));
            
                echo url('storage/app/'.$newFilename);//change this URL    
        }
    }

  
    public function Delete($mainmodel,$submodel1,$submodel2,$id,$fr){
        if(($submodel2 =='NULL') && ($submodel1 !='NULL')){     
            $deleteMainContent ='\\App\\'.$mainmodel;
            $deleteSub1Content ='\\App\\'.$submodel1;
            $deleteMainContent::find($id)->delete();
            $deleteSub1Content::where($fr,$id)->delete();

        }else if(($submodel1 =='NULL')&&($submodel2 =='NULL') ){
            $deleteMainContent ='\\App\\'.$mainmodel;
            $deleteMainContent::find($id)->delete();
        }else{
            $deleteMainContent ='\\App\\'.$mainmodel;
            $deleteSub1Content ='\\App\\'.$submodel1;
            $deleteSub2Content ='\\App\\'.$submodel2;
            $deleteMainContent::find($id)->delete();
            $deleteSub1Content::where($fr,$id)->delete();
            $deleteSub2Content::where($fr,$id)->delete();
        }
        return redirect()->back()->with('Delete','ลบเนื้อหาเรียบร้อย');
    }


    public function Delete1Table($mainmodel,$id,$img){
        
        $deleteMainContent ='\\App\\'.$mainmodel;
        $main = $deleteMainContent::find($id);

        
        if($main->$img != 'NULL'){
            Storage::delete($main->$img);
            $main->delete();

        }else{
            $main->delete();
        }
        

        return redirect()->back()->with('Delete','ลบเนื้อหาเรียบร้อย');
    }

    public function Delete2Table($mainmodel,$submodel1,$id,$fr,$img){

        $deleteMainContent ='\\App\\'.$mainmodel;
        $deleteSub1Content ='\\App\\'.$submodel1;

        $main =   $deleteMainContent::find($id);
        $sub = $deleteSub1Content::where($fr,$id);
        if($main->$img != 'NULL'){
            Storage::delete($main->$img);
            $main->delete();
            $sub->delete();
        }else{
            $main->delete();
            $sub->delete();
        }

    }

    public function Delete3Table($mainmodel,$submodel1,$submodel2,$id,$fr,$img){

        $deleteMainContent ='\\App\\'.$mainmodel;
        $deleteSub1Content ='\\App\\'.$submodel1;
        $deleteSub2Content ='\\App\\'.$submodel2;

        $main =   $deleteMainContent::find($id);
        $sub1 = $deleteSub1Content::where($fr,$id);
        $sub2 = $deleteSub2Content::where($fr,$id);

        if($main->$img != 'NULL'){
            Storage::delete($main->$img);
            $main->delete();
            $sub1->delete();
            $sub2->delete();
        }else{
            $main->delete();
            $sub1->delete();
            $sub2->delete();
        }

    }



    
}

