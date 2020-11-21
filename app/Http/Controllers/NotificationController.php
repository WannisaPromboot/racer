<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use DB;

class NotificationController extends Controller
{
    public static function Notification($title,$description,$link,$sender,$recieve,$type){
        $newNotification = New Notification;
        $newNotification->title = $title;
        $newNotification->description = $description;  
        $newNotification->link = $link;  
        $newNotification->sender = $sender;  
        $newNotification->recieve = $recieve;  
        $newNotification->status = 0;  
        $newNotification->type = $type;  

        $newNotification->save();

    }

    public function show(){
        $data = array(
            'noti'  => \App\Notification::where('recieve',1)->orderby('updated_at','desc')->get(),
        );

        return view('Admin.notification.notification-content',$data);

    }

    public function show_store(){
        $data = array(
            'noti'  => \App\Notification::where('recieve',Session::get('store_id'))->orWhere('recieve',0)->orderby('updated_at','desc')->get(),
        );

      //  dd($data['noti']);

        return view('Store.notification.notification-content',$data);

    }


    public function GetNotification(Request $request){

        if(!empty($request->store)){
            $all = \App\Notification::where('status',0)->where('recieve',$request->store)->orWhere('recieve','0')->get();
            $noti = \App\Notification::where('recieve',$request->store)->orWhere('recieve','0')->limit(4)->get();
           // dd($all);
        }else{
            $all = \App\Notification::where('recieve',1)->where('status',0)->get();
            $noti = \App\Notification::where('recieve',1)->limit(4)->get();
           
        }



         $html = '';
         if(count($all) == 0){
            $count = '';
         }else{
            $count  = count($all);
         }
  

        // dd(response()->json($noti));
        if($count != 0){
            foreach ($noti as $item){
                if(substr($item->sender,0,4) == 'user'){
                    $name =  \App\Customer::where('customer_id',substr($item->sender,4,14))->first();
                    $_name = $name->name;
                }else if($item->sender == '1'){
                    $name = 'Admin BeautyTobook';
                    $_name = $name;
                }else{
                    $name = \App\Store::where('id_store',$item->sender)->first();
                    $_name = $name->store_name_th;
                }
               
                   
                    $str = '';
                   // dd(date('y-m-d h:i:s'));
                    $uts['start'] = strtotime(date_format($item->updated_at,'y-m-d h:i:s'));
                    $uts['end'] = strtotime(date('y-m-d h:i:s'));


                    if( $uts['start']!==-1 && $uts['end']!==-1 )
                    {
 
                        if( $uts['end'] >= $uts['start'] )
                        {

                            $diff =  $uts['end'] - $uts['start'];
                            if( $years=intval((floor($diff/31104000))) )
                                $diff = $diff % 31104000;
                                $str .= $years > 0 ? $years.' Year ' : '';
                            if( $months=intval((floor($diff/2592000))) )
                                $diff = $diff % 2592000;
                                $str .= $months > 0 ? $months.' months ' : '';
                            if( $days=intval((floor($diff/86400))) )
                                $diff = $diff % 86400;
                                $str .= $days > 0 ? $days.' days ' : '';
                            if( $hours=intval((floor($diff/3600))) )
                                $diff = $diff % 3600;
                                $str .= $hours > 0 ? $hours.' hours ' : '';
                            if( $minutes=intval((floor($diff/60))) )
                                $diff = $diff % 60;
                            
                                $str .= $minutes > 0 ? $minutes.' minutes ' : '';
                        }
                    }
                    
            $text =   strip_tags($item->description);  ///////// แปลง desxription
                  
            $html   .=  '<a href="'.$item->link.'" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    '.substr($_name,0,3).'
                                </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">'.$_name.'</h6>
                                <h6 class="mt-0 mb-1">'.$item->title.'</h6>
                                <div class="font-size-12 text-muted">
                                    
                                    <p class="mb-1">'.substr($text,0,120).'...</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i>'.$str.' ago</p>
                                </div>
                            </div>
                        </div>
                    </a>';
            }
        }else{
            $html =    '<a href="่javascript:void(0)" class="text-reset notification-item">
                            <div class="media">
                                <div class=" mr-3">
                                    ไม่มีข้อความ
                                </div>
                            </div>
                        </a>';
         }
       // dd($html);

         $data = array(
             'count'  => $count,
             'content' => $html
         );

         return json_encode($data);
    }

    public function ChangeStatus(){
         DB::table('notification')->where('recieve',1)->where('status',0)->update(['status'=> 1]); 
         $all  = DB::table('notification')->where('recieve',1)->where('status',0)->get(); 
         if(count($all) == 0){
            $count = '';
         }else{
            $count  = count($all);
         }
        return  $count ;
    }

    public function ChangeStatusStore(Request $request){

        //dd($request->all());
        DB::table('notification')->where('status',0)->where('recieve',$request->store)->orWhere('recieve','0')->update(['status'=> 1]); 
        $all  = DB::table('notification')->where('recieve',$request->store)->where('status',0)->get(); 
        if(count($all) == 0){
           $count = '';
        }else{
           $count  = count($all);
        }
       return  $count ;
   }
}
