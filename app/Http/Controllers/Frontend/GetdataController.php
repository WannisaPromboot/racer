<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use URL;
use Session;
use App\Store;
use App\Service;
use App\Store_event;
use App\Customer;
use App\Customer_review;
use App\Keyword;
use App\Reward;
use App\KeywordItem;
use App\CustomerKeyoword;
use Config;
use OrangeV1;

use ExchangeRate;

class GetdataController extends Controller
{

    public function GetstoreNearby(Request $request){
        $radius = 10;
        $restaurants = Store::selectRaw("id_store, store_name_th,store_preview_image ,
                         ( 6371 * acos( cos( radians(?) ) *
                           cos( radians( store_lat ) )
                           * cos( radians( store_long ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( store_lat ) ) )
                         ) AS distance", [floatval($request->lat), floatval($request->lng),floatval($request->lat)])
          
            ->having("distance", "<", $radius)
            ->orderBy("distance",'ASC')
            // ->where('active', '=', 1)
            
            ->get();
            // dd($restaurants);f
            if($request->chk==2){
              
                if(count($restaurants)==0){
                    $restaurants = Store::get();
                }
                $data = array(
                    'restaurants' => $restaurants,
                );
                return view('frontend.allstore',$data);
            }else{
                if(count($restaurants)==0){
                    $sql = Store::get();
                    foreach ($sql as $item){
                        $img = URL::asset('storage/app/'.$item->store_preview_image);
                        echo ' <div class="item">
                                <div class="promo_group">
                                    <a href="'.url('category_inside/'.$item->id_store.'/0').'">
                                        <figure>
                                            <div>
                                                <img src="'.$img.'" alt="" class="img-fluid">
                                            </div>
                                        </figure>
                                        <p>'.$item->store_name_th.'</p>
                                    </a>
                                </div>
                            </div>
                            ';
                    }
                }else{
                    foreach ($restaurants as $item){
                        $img = URL::asset('storage/app/'.$item->store_preview_image);
                        echo ' <div class="item">
                                <div class="promo_group">
                                    <a href="'.url('category_inside/'.$item->id_store.'/0').'">
                                        <figure>
                                            <div>
                                                <img src="'.$img.'" alt="" class="img-fluid">
                                            </div>
                                        </figure>
                                        <p>'.$item->store_name_th.'</p>
                                    </a>
                                </div>
                            </div>
                            ';
                    }
                }
            }
           
            
    
    }

    public function Setcurrency($id,$code){
        
        Session::put('currency',$code);
        Session::put('idcurrency',intval($id));
    }

    public function ChangeLangeFrontend($id){
    
        if($id=='1'){
            Session::put('langfrontend','th');

        }elseif($id=='2'){
            Session::put('langfrontend','en');

        }else{
            Session::put('langfrontend','ch');

        }

        return back();
    }

    

    public function GetTimeAppointment(Request $request){
        $event = Store_event::where('date_start',date_format(date_create($request->date),"Y-m-d"))->where('id_store',$request->store)->first();
        if(empty($event)){
            $day = date('D',strtotime($request->date));
            switch ($day){
                case 'Sat' : 
                    $_day = 6;
                break;
                case 'Sun' : 
                    $_day = 7;
                break;
                case 'Mon' : 
                    $_day = 1;
                break;
                case 'Tue' : 
                    $_day = 2;
                break;
                case 'Wed' : 
                    $_day = 3;
                break;
                case 'Thu' : 
                    $_day = 4;
                break;
                case 'Fri' : 
                    $_day = 5;
                break;
    
            }
    
            if(!empty($request->type)){
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)->where('id_service',$request->service)->where('offpeak_time','<=',$item->price)->get();   
            }else{
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)->where('id_service',$request->service)->get();   
            }
    
    
            $store_time = DB::table('store_datetime')->where('id_store',$request->store)->where('id_day_datetime',$_day)->first();

    
          if( $store_time->status_datetime != NULL){

            if(count($time)>0){
                echo '	
                        <div class="flavor">';
                        if(!empty($time[0]->timed)){
                            foreach($time as $_time){
                                echo    '<input type="radio" id="radio_vanilla'.$_time->id_mange_datetimed.'" name="flavor" ref="'.date("H:i", strtotime($_time->timed)).'" class="selecttime" value="'.$_time->id_mange_datetimed.'" />
                                        <label for="radio_vanilla'.$_time->id_mange_datetimed.'" class="vanilla">'.date("H:i", strtotime($_time->timed)).'</label>';
                            }
                        }else{
                            foreach($time as $_time){
                                echo    '<input type="radio" id="radio_vanilla'.$_time->id_mange_datetimed.'" name="flavor" ref="'.date("H:i", strtotime($_time->start)).' - '.date("H:i", strtotime($_time->finish)).'" class="selecttime" value="'.$_time->id_mange_datetimed.'" />
                                        <label for="radio_vanilla'.$_time->id_mange_datetimed.'" class="vanilla">'.date("H:i", strtotime($_time->start)).' - '.date("H:i", strtotime($_time->finish)).'</label>';
                            }
                        }   
                echo        '</div>';
            }else{
                echo 'บริการนี้ไม่เปิดให้บริการในวันที่เลือก';
            }
            
          }else{
              echo 'ร้านค้าปิดให้บริการ';
          }
        }else{
            echo 'ร้านค้าปิดให้บริการ';
        }

    }

    public function GetEmployeeAppointment(Request $request){
        
        $emp = DB::table('mange_employer')->where('id_mange_datetimed',$request->datetime)->get();
        $time = DB::table('mange_datetimed')->where('id_mange_datetimed',$request->datetime)->first();
        if(!empty($time->timed)){
                $select_time =  $time->timed;
        }else{
            $select_time =  $time->start.'-'.$time->finish;
        }

        $deal = DB::table('booking_deal')->where('date',$request->date)->where('deal_time',$select_time)->first();
        if(!empty($deal)){
             $count = $deal->deal;   
        }else{
            $count = 0;   
        }

        if($time->status_booking != NULL){
            if($time->deal_time  !==  $count){                
                foreach($emp as $_emp){
                    $person = DB::table('employer')->where('id_employer',$_emp->id_employer)->first();
                //  dd($person);
                    if($_emp->id_employer != '0'){
                        echo '	<div class="md-radio md-radio-inline radiocheck">
                                    <input id="section-1'.$person->id_employer .'" type="radio" name="employee" class="selectemploy" value="'.$person->id_employer .'" />
                                    <label for="section-1'.$person->id_employer .'">
                                        <h5 class="styethis">'.$person->employer_firstname_th.' '.$person->employer_lastname_ch.'</h5>
                                    </label>
                                </div>';
                    }else{
                        $all = \App\Employer::where('id_store',$_emp->id_store)->get();
                        foreach( $all as $_all){
                            echo '<div class="md-radio md-radio-inline radiocheck">
                                        <input id="section-1'.$_all->id_employer .'" type="radio" class="selectemploy" name="employee" value="'.$_all->id_employer .'" />
                                        <label for="section-1'.$_all->id_employer .'">
                                            <h5 class="styethis">'.$_all->employer_firstname_th.' '.$_all->employer_lastname_ch.'</h5>
                                        </label>
                                    </div>';
                        }
                    }
    
                }
                echo   '	<div class="md-radio md-radio-inline radiocheck">
                            <input id="section-1" class="selectemploy"  type="radio" name="employee" value="0" checked/>
                            <label for="section-1">
                                <h5 class="styethis">ไม่ระบุ</h5>
                            </label>
                        </div>';
    
            }else{
                echo 'ดีลหมดแล้ว';
            }
        }else{
            echo 'ช่วงเวลานี้ไม่เปิดให้บริการ';
        }

    }


    public function date($var){
        $month_th['01'] = 'มกราคม';
        $month_th['02'] = 'กุมภาพันธ์';
        $month_th['03'] = 'มีนาคม';
        $month_th['04'] = 'เมษายน';
        $month_th['05'] = 'พฤษภาคม';
        $month_th['06'] = 'มิถุนายน';
        $month_th['07'] = 'กรกฎาคม';
        $month_th['08'] = 'สิงหาคม';
        $month_th['09'] = 'กันยายน';
        $month_th['10'] = 'ตุลาคม';
        $month_th['11'] = 'พฤศจิกายน';
        $month_th['12'] = 'ธันวาคม';
        $month_en['01'] = 'JANUARY';
        $month_en['02'] = 'FEBRUARY';
        $month_en['03'] = 'MARCH';
        $month_en['04'] = 'APRIL';
        $month_en['05'] = 'MAY';
        $month_en['06'] = 'JUNE';
        $month_en['07'] = 'JULY';
        $month_en['08'] = 'AUGUST';
        $month_en['09'] = 'SEPTEPBER';
        $month_en['10'] = 'OCTOBER';
        $month_en['11'] = 'NOVENBER';
        $month_en['12'] = 'DECEBER';

        $day = explode('-',date_format($var, 'Y-m-d'));/////var is column name
        if(Config::get('app.locale') == 'en' ){
            $year = $day[0]+543;
        }else{
            $year = $day[0];
        }

        $date_text = $day[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$day[1]] : $month_th[$day[1]] ).' '.$year;
        return ''.$date_text.'';
    }
    ////////get price

    public static function Price($date , $service,$selecttime){
      
        $camp = \App\Campaign::whereRaw('"'.date_format(date_create($date),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                            ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                            ->first();

                            //dd($camp);

        $_service = \App\Service::where('id_service',$service)->first();

        $day = date('D',strtotime($date));
        switch ($day){
            case 'Sat' : 
                $_day = 6;
            break;
            case 'Sun' : 
                $_day = 7;
            break;
            case 'Mon' : 
                $_day = 1;
            break;
            case 'Tue' : 
                $_day = 2;
            break;
            case 'Wed' : 
                $_day = 3;
            break;
            case 'Thu' : 
                $_day = 4;
            break;
            case 'Fri' : 
                $_day = 5;
            break;

        }
                
        if($selecttime != null){   
            if(strlen($selecttime) < 6 ){
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                    ->where('id_service',$service)
                                                    ->where('timed',$selecttime)->first();  
                $time_type = 1;/////แบบมาตรฐาน
            }else{
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                    ->where('id_service',$service)
                                                    ->where('start',$selecttime)->first(); 
                $time_type = 2;/////แบบช่วงเวลา
            }
        }else{
            $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)->where('id_service',intval($service))->Orderby('offpeak_time')->first();
            $time_type = 0;/////ไม่มีเวลา 
        }

                  //  dd($service);
        if(!empty($time)){
            $timeprice = $time->offpeak_time;
        }else{
            $timeprice = 0;
        }    

        if(!empty($camp)){
            $campitem = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$service)->first();
            if(!empty( $campitem)){
                $campprice = $campitem->campaign_price;
            }else{
                $campprice = 0;
            }
        }else{
            $campprice = 0;
        }
        
        $store = \App\Store::where('id_store',$_service->id_store)->first();
        $com = \App\StoreComission::where('id_store',$_service->id_store)->first();

        if($campprice != 0 &&  $timeprice != 0 ){
            if($campprice  < $timeprice){
                $price =  $campprice;
                $text = 'camp';
                $camp_service =  $camp->campaign_id;
            }else{
                $price = $timeprice;
                $text = 'peak';
                $camp_service =  '';
            }
        }else if($campprice == 0 &&  $timeprice != 0 ){
                $price =  $timeprice;
                $text = 'peak';
                $camp_service =  '';
        }else if($campprice != 0  &&  $timeprice == 0 ){
                $price =  $campprice;
                $text = 'camp';
                $camp_service =  $camp->campaign_id;
        }else{
            $price = $_service->service_free-($_service->service_free*($com->commision/100));
            $text = 'N';
            $camp_service =  '';
        }

        $data = array(
            'type'      =>   $text,
            'price'     =>   $price,
            'time'      =>   $time_type, 
            'camp'   =>   $camp_service,
        );

                return $data;

    }

    public function CheckPrice(Request $request){


        $day = date('D',strtotime($request->date));
        switch ($day){
            case 'Sat' : 
                $_day = 6;
            break;
            case 'Sun' : 
                $_day = 7;
            break;
            case 'Mon' : 
                $_day = 1;
            break;
            case 'Tue' : 
                $_day = 2;
            break;
            case 'Wed' : 
                $_day = 3;
            break;
            case 'Thu' : 
                $_day = 4;
            break;
            case 'Fri' : 
                $_day = 5;
            break;

        }

        if(!empty($request->time)){
            if(strlen($request->time) < 6 ){
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                    ->where('id_service',$request->service)
                                                    ->where('timed',$request->time)->first();  
                $_time = date("H:i", strtotime($time->timed));
            }else{
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                    ->where('id_service',$request->service)
                                                    ->where('start',$request->time)->first(); 
                $_time = date("H:i", strtotime($time->start)).' - '.date("H:i", strtotime($time->finish));
            }

        }else{
            $_time = '-';
        }
        $currency = DB::table('currency')->where('currency_id',Session::get('idcurrency'))->first();
        
        if($request->service_store != null){

            //////check if have peak deal 
            $check_typestore =array();
            foreach($request->service_store as $_store){
                array_push($check_typestore,$this->price($request->date,$_store,$request->time)['type']);
            }

           // dd($check_type);

            echo    '<div class="bg_orange_app mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>ชำระที่ร้าน</h4>
                            </div>
                            <div class="col-md-3 text-center">ราคาปกติ</div>
                            <div class="col-md-3 text-md-right">ราคาที่คุณจ่าย</div>
                        </div>
                    </div>
                    <div class="border_register">';
                         $i=1;
                         $sum_store =0;
                        foreach ($request->service_store as $_store){
                            $service_store = \App\Service::where('id_service',$_store)->first();
                          echo    '<div class="padpad">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="list_pay_content"><span class="numbercircle">'.$i.'</span> <b>'.$service_store->service_name_th.'<i class="far fa-clock" style="color:#ffc186;"></i> <span class="smtxt2 lightgray">'.$service_store->service_time.' นาที</span></b>&nbsp;&nbsp; <span class="smtxt2 reloaddate">วันที่ '.$this->date(date_create($request->date)).' เวลา '.$_time.'</span></div>
                                            <div class="form_gray mt-3">
                                                <input type="text" placeholder="กรอกคำขอพิเศษ(ถ้ามี)" name="text_special['.$service_store->id_service.']" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <span class="actual_price2">'.number_format($service_store->service_price).'</span>
                                        </div>
                                        <div class="col-md-3 text-md-right">
                                            <span class="bigtxt2"><b> '.number_format($service_store->service_free).'</b></span> <br>
                                            <input type="hidden" name="pricestore['.$service_store->id_service.']" value="'.$service_store->service_free.'">
                                            <input type="hidden" name="typestore['.$service_store->id_service.']" value="'.$service_store->id_servic.'">
                                            <input type="hidden" name="ratestore['.$service_store->id_service.']" value="'.$currency->currency_rate.'">
                                            <!--span class="lightgray smtxt2"><i>คุณจะได้รับ 12 เหรียญ <br>
                                                    หลังจากใช้บริการแล้ว</i></span-->
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr>';
                            $sum_store += $service_store->service_free;
                                // $sum += $price;
                           
                            $i++;
                            }
            echo        '<div class="padpad">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="bigtxt3"><b>รวมทั้งหมด</b></span>
                                </div>
                                <div class="col-md-3 text-md-right">
                                    <span class="redtext bigtxt3">'.$sum_store.'</span> <br>
                                    <span class="lightgray smtxt3"><i><b>ราคานี้รวมภาษีมูลค่าเพิ่มแล้ว</b></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>';
         }

         /////////////////////////////////////////booknow paylater
         if($request->service_booknow != null){

            //////check if have peak deal 
            $check_typebook =array();
            foreach($request->service_booknow as $_book){
                array_push($check_typebook,$this->price($request->date,$_book,$request->time)['type']);
            }
          //  dd($check_typebook);
           

            echo    '<div class="bg_orange_app mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>จองตอนนี้ชำระทีหลัง</h4>
                            </div>
                            <div class="col-md-3 text-center">ราคาปกติ</div>
                            <div class="col-md-3 text-md-right">ราคาที่คุณจ่าย</div>
                        </div>
                    </div>
                    <div class="border_register">';
                         $i=1;
                         $sum_store =0;
                        foreach ($request->service_booknow as $_book){
                            $service_book = \App\Service::where('id_service',$_book)->first();
                          echo    '<div class="padpad">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="list_pay_content"><span class="numbercircle">'.$i.'</span> <b>'.$service_book->service_name_th.'<i class="far fa-clock" style="color:#ffc186;"></i> <span class="smtxt2 lightgray">'.$service_book->service_time.' นาที</span></b>&nbsp;&nbsp; <span class="smtxt2 reloaddate">วันที่ '.$this->date(date_create($request->date)).' เวลา '.$_time.'</span></div>
                                            <div class="form_gray mt-3">
                                                <input type="text" placeholder="กรอกคำขอพิเศษ(ถ้ามี)" name="text_special['.$service_book->id_service.']" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <span class="actual_price2">'.number_format($service_book->service_price).'</span>
                                        </div>
                                        <div class="col-md-3 text-md-right">
                                            <span class="bigtxt2"><b> '.number_format($service_book->service_free).'</b></span> <br>
                                            <input type="hidden" name="pricebook['.$service_book->id_service.']" value="'.$service_book->service_free.'">
                                            <input type="hidden" name="typebook['.$service_store->id_service.']" value="'.$service_store->id_servic.'">
                                            <input type="hidden" name="ratebook['.$service_book->id_service.']" value="'.$currency->currency_rate.'">
                                       
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr>';
                            $sum_store += $service_book->service_free;
                                // $sum += $price;
                           
                            $i++;
                            }
            echo        '<div class="padpad">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="bigtxt3"><b>รวมทั้งหมด</b></span>
                                </div>
                                <div class="col-md-3 text-md-right">
                                    <span class="redtext bigtxt3">'.$sum_store.'</span> <br>
                                    <span class="lightgray smtxt3"><i><b>ราคานี้รวมภาษีมูลค่าเพิ่มแล้ว</b></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>';
         }




         /////////////////////////ตอนนี้//////////////////////////////////////////////////
        
            if($request->service_now != null){
                   //////check if have peak deal 
            $check_typenow =array();
            foreach($request->service_now as $_now){
                array_push($check_typenow,$this->price($request->date,$_now,$request->time)['type']);
            }

            if(in_array('N',$check_typenow) || in_array('camp',$check_typenow)){
                $camp = \App\Campaign::whereRaw('"'.date_format(date_create($request->date),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                                        ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                                        ->first();

                echo  '<div class="bg_orange_app mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>ชำระตอนนี้</h4>
                            </div>
                            <div class="col-md-3 text-center">ราคาปกติ</div>
                            <div class="col-md-3 text-md-right">ราคาที่คุณจ่าย</div>
                        </div>
                    </div>
                    <div class="border_register">';
                        $i=1; $sum=0;
                        foreach ($request->service_now as $_paynow){
                        $service = \App\Service::where('id_service',$_paynow)->first();
                        $store = \App\Store::where('id_store',$service->id_store)->first();
                        $com =\App\StoreComission::where('id_store',$service->id_store)->first();
                     
                        if(!empty( $camp)){
                            $campprice = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$_paynow)->first();
                          //  dd($campprice);
                                if(!empty( $campprice)){
                                    $pricenow = $campprice->campaign_price;
                                    $type = 'camp';
                                }else{
                                $pricenow = $service->service_free - ($service->service_free*($com->commision/100));
                                $type = 'N';
                                }
                        }else{
                            $pricenow = $service->service_free - ($service->service_free*($com->commision/100));
                            $type = 'N';
                            
                        }

                echo          '<input type="hidden" name="type" value="'.$type.'">
                               <div class="padpad">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="list_pay_content"><span class="numbercircle">'.$i.'</span> <b>'.$service->service_name_th.' <i class="far fa-clock" style="color:#ffc186;"></i> <span class="smtxt2 lightgray">'.$service->service_time.' นาที</span></b>&nbsp;&nbsp; <span class="smtxt2 reloaddate">วันที่ '.$this->date(date_create($request->date)).' เวลา '.$_time.'</span> </div>
                                        <div class="form_gray mt-3">
                                            <input type="text" placeholder="กรอกคำขอพิเศษ(ถ้ามี)" name="text_special['.$service->id_service.']" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-3 text-center">
                                        <span class="actual_price2">'.number_format($service->service_price).'</span>
                                    </div>
                                    <div class="col-md-3 text-md-right">
                                        <span class="bigtxt2"><b> '.$pricenow.'</b></span> <br>
                                        <input type="hidden" name="pricenow['.$service->id_service.']" value="'.$pricenow.'">
                                        <input type="hidden" name="typenow['.$service->id_service.']" value="'.$type.'">
                                        <input type="hidden" name="campid['.$service->id_service.']" value="'.$this->price($request->date,$service->id_service,$request->time)['camp'].'">
                                        <input type="hidden" name="ratenow['.$service->id_service.']" value="'.$currency->currency_rate.'">
                                        <!--span class="lightgray smtxt2"><i>คุณจะได้รับ 12 เหรียญ <br>
                                                หลังจากใช้บริการแล้ว</i></span-->
                                    </div>
                                </div>
                                <br>
                            </div>
                            <hr>';
                            $sum += $pricenow;
                            $i++; 
                        }
                echo      '<div class="padpad">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="bigtxt3"><b>รวมทั้งหมด</b></span>
                                </div>
                                <div class="col-md-3 text-md-right">
                                    <span class="redtext bigtxt3">'.number_format($sum).'</span> <br>
                                    <span class="lightgray smtxt3"><i><b>ราคานี้รวมภาษีมูลค่าเพิ่มแล้ว</b></i></span>
                                </div>
                            </div>
                        </div>
                    </div>';
            }else{

                ////////////////////////if check peak deal
                echo  '<div class="bg_orange_app mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>ชำระตอนนี้</h4>
                            </div>
                            <div class="col-md-3 text-center">ราคาปกติ</div>
                            <div class="col-md-3 text-md-right">ราคาที่คุณจ่าย</div>
                        </div>
                    </div>
                    <div class="border_register">';
                        $i=1; $sum=0;
                        foreach ($request->service_now as $_paynow){
                        $service = \App\Service::where('id_service',$_paynow)->first();
                        if(!empty($request->time)){   

                            if(strlen($request->time) < 6 ){
                                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                                    ->where('id_service',$service->id_service)
                                                                    ->where('timed',$request->time)->first();  
                          
                            }else{
                                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                                    ->where('id_service',$service->id_service)
                                                                    ->where('start',$request->time)->first(); 
              
                            }

                        }else{
                            $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)->where('id_service',intval($service->id_service))->Orderby('offpeak_time')->first(); 
                        }
        
                        $pricepeak = $time->offpeak_time;
                        $type = 'peak';

                echo          '<input type="hidden" name="type" value="'.$type.'">
                                <div class="padpad">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="list_pay_content"><span class="numbercircle">'.$i.'</span> <b>'.$service->service_name_th.' <i class="far fa-clock" style="color:#ffc186;"></i> <span class="smtxt2 lightgray">'.$service->service_time.' นาที</span></b>&nbsp;&nbsp; <span class="smtxt2 reloaddate">วันที่ '.$this->date(date_create($request->date)).' เวลา '.$_time.'</span> </div>
                                        <div class="form_gray mt-3">
                                            <input type="text" placeholder="กรอกคำขอพิเศษ(ถ้ามี)" name="text_special['.$service->id_service.']" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-3 text-center">
                                        <span class="actual_price2">'.number_format($service->service_price).'</span>
                                    </div>
                                    <div class="col-md-3 text-md-right">
                                        <span class="bigtxt2"><b> '.$pricepeak.'</b></span> <br>
                                        <input type="hidden" name="pricenow['.$service->id_service.']" value="'.$pricepeak.'">
                                        <input type="hidden" name="typenow['.$service->id_service.']" value="'.$type.'">
                                        <input type="hidden" name="ratenow['.$service->id_service.']" value="'.$currency->currency_rate.'">
                                        <span class="lightgray smtxt2"><i>คุณจะได้รับ 12 เหรียญ <br>
                                                หลังจากใช้บริการแล้ว</i></span>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <hr>';
                            $sum += $pricepeak;
                            $i++; 
                        }
                echo      '<div class="padpad">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="bigtxt3"><b>รวมทั้งหมด</b></span>
                                </div>
                                <div class="col-md-3 text-md-right">
                                    <span class="redtext bigtxt3">'.number_format($sum).'</span> <br>
                                    <span class="lightgray smtxt3"><i><b>ราคานี้รวมภาษีมูลค่าเพิ่มแล้ว</b></i></span>
                                </div>
                            </div>
                        </div>
                    </div>';
            }

           
            }
    }

    public function CheckPeakDeal(Request $request){
        $day = date('D',strtotime(date('m/d/yy')));
        switch ($day){
            case 'Sat' : 
                $_day = 6;
            break;
            case 'Sun' : 
                $_day = 7;
            break;
            case 'Mon' : 
                $_day = 1;
            break;
            case 'Tue' : 
                $_day = 2;
            break;
            case 'Wed' : 
                $_day = 3;
            break;
            case 'Thu' : 
                $_day = 4;
            break;
            case 'Fri' : 
                $_day = 5;
            break;

        }

            $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                ->where('id_service',intval($request->service_id))
                                                ->where('id_store',doubleval($request->store))
                                                ->first();  



            if($time==NULL){

                return  0;
            }else{
                $arr_service = array();
                if($time->timed == NULL){
                    $all = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                        //->where('id_service',intval($request->service_id))
                                                        ->where('timed',null)
                                                        ->where('id_store',doubleval($request->store))
                                                        ->get();  
                }else{
                    $all = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                        //->where('id_service',intval($request->service_id))
                                                        ->where('timed','!=',null)
                                                        ->where('id_store',doubleval($request->store))
                                                        ->get();  
                }
              

                foreach($all as $_all ){
                    if(in_array($_all->id_service,$arr_service)==false){
                        array_push($arr_service,$_all->id_service);
                    }
                }

                //dd($arr_service);
                return $arr_service;
            }
    }

    public function GetOffPeak(Request $request){
        $data = array();
        if(!empty($request->type)){
          
            if($request->type == 'peak'){
         
                if(date('m') == $request->month+1){
                    for($i = date('d'); $i <=31;$i++  ){
                        $day = date('D',strtotime(date('m/'.$i.'/yy')));
                        switch ($day){
                            case 'Sat' : 
                                $_day = 6;
                            break;
                            case 'Sun' : 
                                $_day = 7;
                            break;
                            case 'Mon' : 
                                $_day = 1;
                            break;
                            case 'Tue' : 
                                $_day = 2;
                            break;
                            case 'Wed' : 
                                $_day = 3;
                            break;
                            case 'Thu' : 
                                $_day = 4;
                            break;
                            case 'Fri' : 
                                $_day = 5;
                            break;
                
                        }
                //////peak
                            $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                                ->where('id_service',intval($request->service))
                                                                ->where('id_store',doubleval($request->store))
                                                                ->orderby('offpeak_time')
                                                                ->first();  
                            
                            
                            if(!empty($time->offpeak_time)){
                                $price = $time->offpeak_time;
                            }else{
                                $price = '';     
                            }
        
                          //  dd($price);   
                            array_push($data,$price);
                         
                    }
                }else{
               
                    $m = $request->month+1;
                    $y = $request->year;
                    $last_month =date("t", strtotime(''.$m.'/1/'.$y.''));
                    for($i = 1; $i <= $last_month; $i++){
               
                       $day = date('D',strtotime(date(''.$m.'/'.$i.'/'.$y.'')));
               
                        switch ($day){
                            case 'Sat' : 
                                $_day = 6;
                            break;
                            case 'Sun' : 
                                $_day = 7;
                            break;
                            case 'Mon' : 
                                $_day = 1;
                            break;
                            case 'Tue' : 
                                $_day = 2;
                            break;
                            case 'Wed' : 
                                $_day = 3;
                            break;
                            case 'Thu' : 
                                $_day = 4;
                            break;
                            case 'Fri' : 
                                $_day = 5;
                            break;
                
                        }
                
                          
                //////peak
                $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                    ->where('id_service',intval($request->service))
                                                    ->where('id_store',doubleval($request->store))
                                                    ->orderby('offpeak_time')
                                                    ->first();  
        
        
                    if(!empty($time->offpeak_time)){
                         $price = $time->offpeak_time;
                    }else{
                        $price = '';
                       
                    }
        
                            array_push($data,$price);
                         
                    }
                }
            }else{////////////end check off peak
                if(date('m') == $request->month+1){
                    for($i = date('d'); $i <=31;$i++  ){
                        $day = date('D',strtotime(date('m/'.$i.'/yy')));
                        switch ($day){
                            case 'Sat' : 
                                $_day = 6;
                            break;
                            case 'Sun' : 
                                $_day = 7;
                            break;
                            case 'Mon' : 
                                $_day = 1;
                            break;
                            case 'Tue' : 
                                $_day = 2;
                            break;
                            case 'Wed' : 
                                $_day = 3;
                            break;
                            case 'Thu' : 
                                $_day = 4;
                            break;
                            case 'Fri' : 
                                $_day = 5;
                            break;
                
                        }
                        $camp = \App\Campaign::whereRaw('"'.date_format(date_create(date('m/'.$i.'/yy')),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                                                ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                                                ->first();

                        $service = \App\Service::where('id_service',$request->service)->first();

                            if(!empty( $camp)){
                                $campitem = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$request->service)->first();
                                if(!empty( $campitem)){
                                    $price = $campitem->campaign_price;
                                }else{
                                    $price = $service->service_free;
                                }
                            }else{
                                $price = $service->service_free;
                            }
                                array_push($data,$price);
                                                
                    }
                }else{
               
                    $m = $request->month+1;
                    $y = $request->year;
                    $last_month =date("t", strtotime(''.$m.'/1/'.$y.''));
                    for($i = 1; $i <= $last_month; $i++){
               
                       $day = date('D',strtotime(date(''.$m.'/'.$i.'/'.$y.'')));
               
                        switch ($day){
                            case 'Sat' : 
                                $_day = 6;
                            break;
                            case 'Sun' : 
                                $_day = 7;
                            break;
                            case 'Mon' : 
                                $_day = 1;
                            break;
                            case 'Tue' : 
                                $_day = 2;
                            break;
                            case 'Wed' : 
                                $_day = 3;
                            break;
                            case 'Thu' : 
                                $_day = 4;
                            break;
                            case 'Fri' : 
                                $_day = 5;
                            break;
                
                        }
        
                    $camp = \App\Campaign::whereRaw('"'.date_format(date_create(date(''.$m.'/'.$i.'/'.$y.'')),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                                            ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                                            ->first();
        
                    $service = \App\Service::where('id_service',$request->service)->first();
                        if(!empty( $camp)){
                            $campitem = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$request->service)->first();
                            if(!empty( $campitem)){
                                $price = $campitem->campaign_price;
                            }else{
                                $price = $service->service_free;
                            }
                        }else{
                            $price = $service->service_free;
                        }
                    
        
                            array_push($data,$price);
                         
                    }
                }
            
            }////end check when have type
        }else{
            if(date('m') == $request->month+1){
                for($i = date('d'); $i <=31;$i++  ){
                    $day = date('D',strtotime(date('m/'.$i.'/yy')));
                    switch ($day){
                        case 'Sat' : 
                            $_day = 6;
                        break;
                        case 'Sun' : 
                            $_day = 7;
                        break;
                        case 'Mon' : 
                            $_day = 1;
                        break;
                        case 'Tue' : 
                            $_day = 2;
                        break;
                        case 'Wed' : 
                            $_day = 3;
                        break;
                        case 'Thu' : 
                            $_day = 4;
                        break;
                        case 'Fri' : 
                            $_day = 5;
                        break;
            
                    }
            //////peak
                        $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                            ->where('id_service',intval($request->service))
                                                            ->where('id_store',doubleval($request->store))
                                                            ->where('offpeak_time','!=',NULL)
                                                            ->orderby('offpeak_time')
                                                            ->first();  
    
            /////camp
                        
                        $camp = \App\Campaign::whereRaw('"'.date_format(date_create(date('m/'.$i.'/yy')),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                                                ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                                                ->first();
    
                        $service = \App\Service::where('id_service',$request->service)->first();
                        
                        if(!empty($time->offpeak_time)){
                            $price = $time->offpeak_time;
                        }else{
                            
                            if(!empty( $camp)){
                                $campitem = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$request->service)->first();
                                if(!empty( $campitem)){
                                    $price = $campitem->campaign_price;
                               }else{
                                $price = $service->service_free;
                               }
                            }else{
                                $price = $service->service_free;
                            }
                        }
    
                      //  dd($price);
                       
                        
                        array_push($data,$price);
                     
                }
            }else{
                $m = $request->month+1;
                $y = $request->year;
                $last_month =date("t", strtotime(''.$m.'/1/'.$y.''));
                for($i = 1; $i <= $last_month; $i++){
           
                   $day = date('D',strtotime(date(''.$m.'/'.$i.'/'.$y.'')));
           
                    switch ($day){
                        case 'Sat' : 
                            $_day = 6;
                        break;
                        case 'Sun' : 
                            $_day = 7;
                        break;
                        case 'Mon' : 
                            $_day = 1;
                        break;
                        case 'Tue' : 
                            $_day = 2;
                        break;
                        case 'Wed' : 
                            $_day = 3;
                        break;
                        case 'Thu' : 
                            $_day = 4;
                        break;
                        case 'Fri' : 
                            $_day = 5;
                        break;
            
                    }
            
                      
            //////peak
            $time = DB::table('mange_datetimed')->where('id_day_datetime',$_day)
                                                ->where('id_service',intval($request->service))
                                                ->where('id_store',doubleval($request->store))
                                                ->orderby('offpeak_time')
                                                ->first();  
    
                /////camp
    
                $camp = \App\Campaign::whereRaw('"'.date_format(date_create(date(''.$m.'/'.$i.'/'.$y.'')),'yy-m-d') .'" between `campaign_datestart` and `campaign_datefinish`')
                                        ->whereRaw('"'.date('H:i:s').'" between `campaign_timestart` and `campaign_timefinish`')
                                        ->first();
    
                $service = \App\Service::where('id_service',$request->service)->first();
    
                if(!empty($time->offpeak_time)){
                     $price = $time->offpeak_time;
                }else{
    
                    if(!empty( $camp)){
                        $campitem = \App\CampaignItem::where('campaign_id',$camp->campaign_id)->where('campaign_service_id',$request->service)->first();
                        if(!empty( $campitem)){
                            $price = $campitem->campaign_price;
                        }else{
                            $price = $service->service_free;
                        }
                    }else{
                        $price = $service->service_free;
                    }
                }
    
                        array_push($data,$price);
                     
                }
            }
        }

       
       return  $data;
    }


    public function Test1(){
        // $exchangeRates = new ExchangeRate();
        // $result = $exchangeRates->convert(100, 'THB', 'USD', Carbon::now());

        // $data = array(
        //     'data' => $result
        // );
        $sql = DB::Table('currency')->leftJoin('currencycountries','currency.id_country','=','currencycountries.idCountry')->where('currency_id',2)->first();

        
         $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://free.currconv.com/api/v7/currencies?apiKey=fc843de6437872042283",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 15,
            CURLOPT_TIMEOUT => 30,
            
        ));
            
            $json_string = curl_exec($curl);
            $obj = json_decode($json_string, true);
            dd($obj['results'][$sql->currencyCode]);
            // $val = floatval($obj[$query]);
            // $total = $val * $amount;
            // if($to_Currency=='THB'){
            //     echo  number_format($total).'  ฿';
            // }elseif($to_Currency=='USD'){
            //     echo  number_format($total, 2, '.', '').'  $';
            // }else{
            //     echo  number_format($total).'  '.$to_Currency;
            // }

        return view('frontend.test1',$data );
    }

    public function RewardId($id){
        $sql = DB::Table('reward')->where('reward_id',$id)->first();
        $img = URL::asset('storage/app/'.$sql->filepath);

        $data = '   
                    <div class="row">
                        <div class="col-sm">
                            <img src="'.$img.'" alt="" class="img-fluid" width="200px">

                        </div>
                        <div class="col-sm">
                        <br>
                            <div class="row">
                                '.$sql->title_th.'

                            </div>
                            <div class="row">
                                จำนวนเหรียญที่ใช้ : '.$sql->reward_coin.'

                            </div>
                            <div class="row">
                                วันหมดเขต : '.$sql->dateto.'

                            </div>
                            <div class="row">
                                เงื่อนไข : '.$sql->description_th.'

                            </div>
                        </div>
                    </div>
        
        
        ';
        return $data;
    }

    public function RewardExchange($id,$coin){
        // dd(gettype($coin));
    
        DB::Table('customer_redeem')->insert(['customer_id'=>Session::get('customer_id'),'redeem_coin'=>$coin,'reward_id'=>$id,'status_redeem'=>0]);
        $sql =  Customer::where('customer_id',Session::get('customer_id'))->first();
        $sql2 =  Reward::where('reward_id',$id)->first();
        $coinup = ((int)$sql->coin) - ((int)$coin);
        $dealup = ((int)$sql2->reward_deal) - 1;
        Customer::where('customer_id',Session::get('customer_id'))->update(['coin' => $coinup]);
        Reward::where('reward_id',$id)->update(['reward_deal' => $dealup]);
        
    }


    /////////////////////////////////////search//////////////////////////////////////////////////
    public function Search(Request $request){
        $result = explode(" ",$request->search);
        $store = [];

        foreach($result as $_result){
            $keyword = Keyword::where('keyword',$_result)->where('status',1)->first();

            if(empty($keyword)){
                $district = DB::table('districts')->where('name_th','like','%'.$_result)
                                                  ->orwhere('name_en','like','%'.$_result)->get();

                $store_ = DB::table('store')->orwhere('store_name_th','like','%'.$_result.'%')
                                           ->orwhere('store_name_en','like','%'.$_result.'%')
                                           ->orwhere('store_name_ch','like','%'.$_result.'%')
                                           ->get();
                
                $service = DB::table('service')->orwhere('service_name_th','like','%'.$_result.'%')
                                           ->orwhere('service_name_en','like','%'.$_result.'%')
                                           ->orwhere('service_name_ch','like','%'.$_result.'%')
                                           ->get();
    
                if(count($district) > 0){
                        foreach ($district as $key => $value) {
                          
                        $_store = Store::where('store_address','like','%'.$value->zip_code.'%')->first();
                            if(!empty($_store)){
                                if(in_array($_store->id_store,$store) == false){
                                    
                                    array_push($store,$_store->id_store);
                                }
                                
                            }
                            
                        }
                }

                if(count($store_)>0){
                        
                    foreach ($store_ as $key => $value) {
                        if(in_array($value->id_store,$store) == false){
                            
                            array_push($store,$value->id_store);
                        }
            
                    }
                }

                if(count($service) > 0){
                    foreach ($service as $key => $value) {
                        if(in_array($value->id_store,$store) == false){
                            
                            array_push($store,$value->id_store);
                        }
            
                    }
                }
            }else{
                $search =  KeywordItem::where('keyword_id',$keyword->keyword_id)->first();
                if(!empty($search)){
                    if(in_array($search->id_store,$store) == false){
                        array_push($store,$search->id_store);
                    }
                }
                
            }
        }


        if(!empty(Session::get('customer_id'))){
            foreach($result as $_result){
                $newkeyword = new CustomerKeyoword;
                $newkeyword->customer_id = Session::get('customer_id');
                $newkeyword->keyword = $_result;
                $newkeyword->save();
            }
        }
            

        Session::forget('store_search');
        Session::push('store_search',$store);
     

        return redirect('category_index/search');
        
    }

    public static function ChangeCurrency($idCurrency,$amount){
            // dd($idCurrency);
            $sql = DB::Table('currency')->leftJoin('currencycountries','currency.id_country','=','currencycountries.idCountry')
                    ->where('currency_id',$idCurrency)->first();
            // dd($sql);
            $total = $sql->currency_rate * $amount;
            if(Session::get('currency')=='THB'){
                echo  number_format($total).'  ฿';
            }elseif(Session::get('currency')=='USD'){
                echo  number_format($total, 2, '.', '').'  $';
            }else{
                echo  number_format($total).'  '.$sql->countryCode;
            }
            
            
    }


    public function FindDistrict(Request $request){
        
        $districts = DB::table('amphures')->where('province_id',$request->province)
                        ->orderByRaw('CONVERT(name_th USING tis620)')
                        ->groupBy('name_th')->get();
                       
        // dd($districts);
        $html = '<option value="">เลือกเขต</option>';
        foreach($districts as $_districts => $item){
            $html .=  '<option value="'.$item->id.'">'.$item->name_th.'</option>';
        }
        echo $html;
    }

    public function ChangeFilter($chk,Request $request){
        // dd($request->all());
        $score =0;
        $arr = [];
        if($chk==1){
            $sql = Service::where('subcategory1_id',$request->id)->groupBy('id_store')->get();
        }elseif($chk==2 || $chk==3 ){
            if(((int)$request->min) > ((int)$request->max)){
                $sql = Service::where('service_free','>=',(int)$request->max)
                    ->where('service_free','<=',(int)$request->min)
                    ->groupBy('id_store')->get();
            }else{
                $sql = Service::where('service_free','>=',(int)$request->min)
                    ->where('service_free','<=',(int)$request->max)
                    ->groupBy('id_store')->get();
            }
            
            if(count($sql)==0){
                return 0;
            }
        
        }elseif($chk==4){
            $arr = [];
            $review = Customer_review::select('id_store',DB::raw('count(*) as count'),DB::raw('SUM(score_relax) as relax')
                                    ,DB::raw('SUM(score_clean) as clean'),DB::raw('SUM(score_emp) as emp')
                                    ,DB::raw('SUM(score_value) as value'))
                                    ->groupBy('id_store')
                                    ->get();
            foreach($review as $reviews){
                $score = ((($reviews->relax)+($reviews->clean)+($reviews->emp)+($reviews->value))/4)/$reviews->count;
                if($score==((int)$request->star) && $score<=((int)($request->star)+1)){
                    array_push($arr,$reviews->id_store);
                }
            }
            $sql = Store::whereIn('id_store',$arr)->get();
            // dd($sql);
        }elseif($chk==5){
            $zip = DB::Table('districts')->where('amphure_id',$request->district)->first(); 
            // dd($request->district);
            $sql = Store::where('store_address','like','%'.$zip->zip_code.'%')->get();

        }
        // dd($sql); 
        $saleimg = URL::asset('frontend/images/sale_tag.png');
        $peakimg = URL::asset('frontend/images/offpeak_tag.png');
        // $saleimg = URL::asset('frontend/images/sale_tag.png');
        foreach ($sql as $_item){
            $item = Store::leftJoin('highlight','store.store_highlight','=','highlight.id_highlight')->where('display',0)->where('id_store',$_item->id_store)->first();
            $date = DB::table('mange_datetimed')->where('id_store',$item->id_store)->get();
            $img = URL::asset('storage/app/'.$item->highlight_image);

            if(!empty($item) && count($date) > 0){
                echo '<div class="row">
                        <div class="col">';
                            if($item->store_highlight==1){
                               echo' <div class="hotservice_border">
                                        <img src="'.$img.'" alt="">'.$item->highlight_th.'
                                    </div>
                                    <div class="bordergreen_hot">';
                            }elseif($item->store_highlight==2){
                                echo' <div class="hotservice_border_2">
                                        <img src="'.$img.'" alt="">'.$item->highlight_th.'
                                    </div>
                                    <div class="bordergreen_hot_2">';
                            }elseif($item->store_highlight==3){
                                echo' <div class="hotservice_border_3">
                                        <img src="'.$img.'" alt="">'.$item->highlight_th.'
                                    </div>
                                    <div class="bordergreen_hot_3">';
                            }else{
                                  echo'  <div class="group_cate">';
                            }
                            $starstore = Customer_review::select('id_store',DB::raw('count(*) as count'),DB::raw('SUM(score_relax) as relax')
                                                        ,DB::raw('SUM(score_clean) as clean'),DB::raw('SUM(score_emp) as emp')
                                                        ,DB::raw('SUM(score_value) as value'))
                                                        ->where('id_store',$_item->id_store)
                                                        ->first();
                            $scorestore = ((($starstore->relax)+($starstore->clean)+($starstore->emp)+($starstore->value))/4)/$starstore->count;
                            echo' <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="hoverstyle">
                                            <figure>
                                                <a href="#">';
                                                    if(!empty($item->store_preview_image)){
                                                        $img1 = URL::asset('storage/app/'.$item->store_preview_image);
                                                        echo '<img src="'.$img1.'" class="img-fluid">';
                                                    }
                                                echo' </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="category_content_index">';
                                            if(!empty($item->store_name_th)){
                                                echo '<h4>'.$item->store_name_th.'</h4>';
                                            }else{
                                                echo '<h4></h4>';
                                            }
                                            if($scorestore==5){
                                                echo'<div class="review"> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <span class="ita_review">'.$starstore->count.' รีวิว</span>
                                                        <span class="promotion_label"> Promotion</span>
                                                        <span class="saletag"><img src="'.$saleimg.'" alt=""></span>
                                                    </div> ';
                                            }elseif($scorestore==4 && $scorestore<=5){
                                                echo'<div class="review"> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <span class="ita_review">'.$starstore->count.' รีวิว</span>
                                                        <span class="promotion_label"> Promotion</span>
                                                        <span class="saletag"><img src="'.$saleimg.'" alt=""></span>
                                                    </div> ';
                                            }elseif($scorestore==3 && $scorestore<=4){
                                                echo'<div class="review"> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <span class="ita_review">'.$starstore->count.' รีวิว</span>
                                                        <span class="promotion_label"> Promotion</span>
                                                        <span class="saletag"><img src="'.$saleimg.'" alt=""></span>
                                                    </div> ';
                                            }elseif($scorestore==2 && $scorestore<=3){
                                                echo'<div class="review"> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <span class="ita_review">'.$starstore->count.' รีวิว</span>
                                                        <span class="promotion_label"> Promotion</span>
                                                        <span class="saletag"><img src="'.$saleimg.'" alt=""></span>
                                                    </div> ';
                                            }elseif($scorestore==1 && $scorestore<=2){
                                                echo'<div class="review"> 
                                                        <i class="fas fa-star fullmask"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <i class="fas fa-star norate"></i> 
                                                        <span class="ita_review">'.$starstore->count.' รีวิว</span>
                                                        <span class="promotion_label"> Promotion</span>
                                                        <span class="saletag"><img src="'.$saleimg.'" alt=""></span>
                                                    </div> ';
                                            }
                                            echo'
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-9">';
                                                        if(!empty($item->store_name_th)){
                                                            echo '<p class="address_index">'.$item->store_name_th.'</p>';
                                                        }else{
                                                            echo '<p class="address_index"></p>';
                                                        }
                                                    echo '</div>
                                                    <div class="col-md-3 text-md-right"> 
                                                        <a class="blacktext smtxt3 branch_index" data-fancybox data-src="#branch" href="javascript:;" data-width="650" data-height="500">
                                                            <u>สาขาอื่น</u>
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>';
                                                $service = \App\Service::where('id_store',$item->id_store)->get();
                                                foreach ($service as $_service){
                                                    echo '<div class="row">
                                                            <div class="col">
                                                                <ul class="catechoose">
                                                                    <li>
                                                                        <a href="#">'.$_service->service_name_th.'
                                                                            <i class="far fa-clock" style="color:#ffc186;"></i> '.$_service->service_time.' นาที | 
                                                                                <span class="actual_price2">'.self::ChangeCurrency(Session::get('idcurrency'),$_service->service_price).' </span> 
                                                                                <span class="redtext">'.self::ChangeCurrency(Session::get('idcurrency'),self::Price(date('m/d/yy'),$_service->id_service, NULL)['price']).' </span> 
                                                                                <span class="freecalcel">Free cancellatioN</span> <span class="offpeak"><img src="'.$peakimg.'" alt=""></span>
                                                                        
                                                                            </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                    </div>   ';
                                            }
                                            echo '<div class="row mt-3">
                                                <div class="col">
                                                    <div class="btn_viewmore text-md-right">
                                                        <a href="'.url('category_inside/'.$item->id_store.'/'.$request->catid.'').'" class="btn btn-dark"><b>ดูเพิ่มเติม</b></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>';
                if(empty($item->store_highlight)){
                    echo '<hr>';
                }
            }
        }

    }
    
}
?>