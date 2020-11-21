<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use App\Booking;
use App\BookingItem;
use App\BookingDeal;
use App\FlashSaleItem;
use Session;
use DB;
use Mail;
use \App\Http\Controllers\NotificationController;


class AppoinmentController extends Controller
{

    public function AppointmentStep1(Request $request){

       // dd($request->all());
        
        if(!empty($request->paynow)){
            foreach($request->paynow as $item){
               Session::push('paynow',  $item );
            }
        }

        if(!empty($request->paystore)){
            foreach($request->paystore as $item){ 
                Session::push('paystore',$item);
            }
        }

        if(!empty($request->booknow)){
            foreach($request->booknow as $item){
               Session::push('booknow',  $item );
            }
        }

   //     dd(Session::get('paystore'));

        Session::put('id_store',$request->id_store);
         return redirect('appointment/'.$request->id_store.'');
    }


    public function  StoreDataBooking(Request $request,$id){
        if(!empty(Session::get('booking_id'))){
            if($id == 1){
                    //dd($request->all());
                    $time = DB::table('mange_datetimed')->where('id_mange_datetimed',$request->time)->first();
                    if(!empty($time->timed)){
                        $select_time = $time->timed;
                    }else{
                        $select_time = $time->start.'-'.$time->finish;
                    }

                    $UpdateBooking = Booking::where('booking_id',Session::get('booking_id'))->first();
                  //  dd($UpdateBooking);
                    $UpdateBooking->booking_id = Session::get('booking_id');
                    $UpdateBooking->bookingstore_id = substr(Session::get('booking_id'),0,6);
                    $UpdateBooking->customer_id = Session::get('customer_id');
                    $UpdateBooking->booking_Employee = $request->emp;
                    $UpdateBooking->booking_date = $request->date;
                    $UpdateBooking->booking_time = $select_time;
                    $UpdateBooking->status_booking = 1;
                    $UpdateBooking->status_process = 0;
                    $UpdateBooking->type = $request->type;
                    $UpdateBooking->id_store = $request->id_store;
                    
            
                    $UpdateBooking->save();

                    if(!empty(Session::get('paynow'))){

                        foreach(Session::get('paynow') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricenow[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratenow[$item];
                            $UpdateBookingItem->payment = 'now';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }
                    }

                    if(!empty(Session::get('paystore'))){

                        foreach(Session::get('paystore') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricestore[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratestore[$item];
                            $UpdateBookingItem->payment = 'store';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }
                    }


                    if(!empty(Session::get('booknow'))){
                    
                        foreach(Session::get('booknow') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricebook[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratebook[$item];
                            $UpdateBookingItem->payment = 'book';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }

                     }
                   


            }else{
                    // $time = DB::table('mange_datetimed')->where('id_mange_datetimed',$request->time)->first();
                    // if(!empty($time->timed)){
                    //     $select_time = $time->timed;
                    // }else{
                    //     $select_time = $time->start.'-'.$time->finish;
                    // }

                    $UpdateBooking = Booking::where('booking_id',Session::get('booking_id'))->first();
                    $UpdateBooking->booking_id = Session::get('booking_id');
                    $UpdateBooking->bookingstore_id = substr(Session::get('booking_id'),0,6);
                    $UpdateBooking->customer_id = Session::get('customer_id');
                    $UpdateBooking->booking_Employee = NULL;
                    $UpdateBooking->booking_date = NULL;
                    $UpdateBooking->booking_time = NULL;
                    $UpdateBooking->status_booking = 0;
                    $UpdateBooking->status_process = 0;
                    $UpdateBooking->type = $request->type;
                    $UpdateBooking->id_store = $request->id_store;
            
                    $UpdateBooking->save();

                    if(!empty(Session::get('booknow'))){

                        foreach(Session::get('paynow') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricenow[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratenow[$item];
                            $UpdateBookingItem->payment = 'now';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }
                    }

                    if(!empty(Session::get('paystore'))){

                        foreach(Session::get('paystore') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricestore[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratestore[$item];
                            $UpdateBookingItem->payment = 'store';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }
                    }


                    if(!empty(Session::get('paystore'))){
                        foreach(Session::get('booknow') as $item){
                    
                            $UpdateBookingItem = BookingItem::where('booking_id',Session::get('booking_id'))->where('id_service',$item)->first();
                            $UpdateBookingItem->price = $request->pricebook[$item];
                            $UpdateBookingItem->text_special = $request->text_special[$item];
                            $UpdateBookingItem->currency_rate = $request->ratebook[$item];
                            $UpdateBookingItem->payment = 'book';
                            $UpdateBooking->id_store = $request->id_store;
                            
                            $UpdateBookingItem->save(); 
                        }
                    }

            }
            
            return redirect('payment_method/'.Session::get('booking_id').'');
//////////////////////end when user edit 
        }else{

            $number = mt_rand( 1000000000, 9999999999);

            if($id == 1){
                $time = DB::table('mange_datetimed')->where('id_mange_datetimed',$request->time)->first();
                if(!empty($time->timed)){
                    $select_time = $time->timed;
                }else{
                    $select_time = $time->start.'-'.$time->finish;
                }
  
              $NewBooking = new Booking;
      
              $NewBooking->booking_id = $number;
              $NewBooking->bookingstore_id = substr($number,0,6);
              $NewBooking->customer_id = Session::get('customer_id');
              $NewBooking->booking_Employee = $request->emp;
              $NewBooking->booking_date = $request->date;
              $NewBooking->booking_time = $select_time;
              $NewBooking->status_booking = 1;
              $NewBooking->status_process = 0;
              $NewBooking->type = $request->type;
              $NewBooking->id_store = $request->id_store;
      
              $NewBooking->save();
      
              if(!empty(Session::get('paynow'))){
                  
                  foreach(Session::get('paynow') as $item){
                  
                      $NewBookingItem = New BookingItem;
      
                      $NewBookingItem->booking_id = $number;
                      $NewBookingItem->id_service = $item;
                      $NewBookingItem->price = $request->pricenow[$item];
                      $NewBookingItem->text_special = $request->text_special[$item];
                      $NewBookingItem->currency_rate = $request->ratenow[$item];
                      $NewBookingItem->payment = 'now';
                      $NewBookingItem->id_store = $request->id_store;
                      
                      $NewBookingItem->save(); 
                  }
             }
      
             if(!empty(Session::get('paystore'))){
      
                  foreach(Session::get('paystore') as $item){
                      $NewBookingItem = New BookingItem;
      
                      $NewBookingItem->booking_id = $number;
                      $NewBookingItem->id_service = $item;
                      $NewBookingItem->price = $request->pricestore[$item];
                      $NewBookingItem->text_special = $request->text_special[$item];
                      $NewBookingItem->currency_rate = $request->ratestore[$item];
                      $NewBookingItem->payment = 'store';
                      $NewBookingItem->id_store = $request->id_store;
                      
                      $NewBookingItem->save(); 
                      
                  }

      
              }


              if(!empty(Session::get('booknow'))){
                foreach(Session::get('booknow') as $item){
                  
                    $NewBookingItem = New BookingItem;
      
                    $NewBookingItem->booking_id = $number;
                    $NewBookingItem->id_service = $item;
                    $NewBookingItem->price = $request->pricebook[$item];
                    $NewBookingItem->text_special = $request->text_special[$item];
                    $NewBookingItem->currency_rate = $request->ratebook[$item];
                    $NewBookingItem->payment = 'book';
                    $NewBookingItem->id_store = $request->id_store;
                    
                    $NewBookingItem->save(); 
                }
              }

              Session::put('date',['date'=>$request->date,'time'=>$request->time]);
           

            }else{


               
                  $NewBooking = new Booking;
      
                  $NewBooking->booking_id = $number;
                  $NewBooking->bookingstore_id = substr($number,0,6);
                  $NewBooking->customer_id = Session::get('customer_id');
                  $NewBooking->booking_Employee = null;
                  $NewBooking->booking_date = null;
                  $NewBooking->booking_time = null;
                  $NewBooking->status_booking = 0;
                  $NewBooking->status_process = 0;
                  $NewBooking->type = $request->type;
                  $NewBooking->id_store = $request->id_store;
                  
                  $NewBooking->save();

              if(!empty(Session::get('paynow'))){     
                  foreach(Session::get('paynow') as $item){
                  
                      $NewBookingItem = New BookingItem;
      
                      $NewBookingItem->booking_id = $number;
                      $NewBookingItem->id_service = $item;
                      $NewBookingItem->price = $request->pricenow[$item];
                      $NewBookingItem->text_special = $request->text_special[$item];
                      $NewBookingItem->payment = 'now';
                      $NewBookingItem->id_store = $request->id_store;
                      
                      $NewBookingItem->save(); 
                  }
             }
      
             if(!empty(Session::get('paystore'))){
      
                  foreach(Session::get('paystore') as $item){
                      $NewBookingItem = New BookingItem;
      
                      $NewBookingItem->booking_id = $number;
                      $NewBookingItem->id_service = $item;
                      $NewBookingItem->price = $request->pricestore[$item];
                      $NewBookingItem->text_special = $request->text_special[$item];
                      $NewBookingItem->payment = 'store';
                      $NewBookingItem->id_store = $request->id_store;
                      
                      $NewBookingItem->save(); 
                      
                  }
              }

              if(!empty(Session::get('booknow'))){
                    foreach(Session::get('booknow') as $item){
                        
                        $NewBookingItem = New BookingItem;
        
                        $NewBookingItem->booking_id = $number;
                        $NewBookingItem->id_service = $item;
                        $NewBookingItem->price = $request->pricebook[$item];
                        $NewBookingItem->text_special = $request->text_special[$item];
                        $NewBookingItem->currency_rate = $request->ratebook[$item];
                        $NewBookingItem->payment = 'book';
                        $NewBookingItem->id_store = $request->id_store;
                        
                        $NewBookingItem->save(); 
                    }
                }
            }


            //////////////////typenow  
            if(!empty($request->typenow)){
                if(empty($request->campid)){
                    foreach($request->typenow as  $key => $item){
                        $_data = array(
                            'service'  =>  $key,
                            'type'      => $item,  
                            'campaing'  => $request->campid
                        );
                        Session::push('typenow',$_data );
                    }
                }else{
                    foreach($request->typenow as  $key => $item){
                        $_data = array(
                            'service'  =>  $key,
                            'type'      => $item,  
                            'campaing'  => $request->campid[$key]
                        );
    
                        Session::push('typenow',$_data );
                    }
                }
            }

            //////////////////typestore 
            if(!empty($request->typestore)){
                foreach($request->typestore as  $key => $item){
                    $_data = array(
                        'service'  =>  $key,
                    );
                    Session::push('typestore',$_data );
                }
        
            }  

            //////////////////typebook
            if(!empty($request->typebook)){
                foreach($request->typebook as  $key => $item){
                    $_data = array(
                        'service'  =>  $key,
                    );
                    Session::push('typebook',$_data );
                }
            }   
      
            Session::put('booking_id' , $number);
            return redirect('payment_method/'.$number.'');
        }


        
    }


    public function  StoreDataBooking2(Request $request){

        if(!empty(Session::get('flashsale'))){
            $NewBooking = new Booking;

            $NewBooking->booking_id = Session::get('flashsale')['booking_id'];
            $NewBooking->bookingstore_id = substr(Session::get('flashsale')['booking_id'],0,6);
            $NewBooking->customer_id = Session::get('customer_id');
            $NewBooking->status_booking = 0;
            $NewBooking->type = 'flashsale';
            $NewBooking->id_store = Session::get('flashsale')['store'];
            $NewBooking->save();

            $NewBookingItem = New BookingItem;
            $NewBookingItem->booking_id = Session::get('flashsale')['booking_id'];
            $NewBookingItem->id_service = Session::get('flashsale')['service_id'];
            $NewBookingItem->price = Session::get('flashsale')['price'];
            $NewBookingItem->text_special = $request->text_special[Session::get('flashsale')['service_id']];
            $NewBookingItem->payment = 'flashsale';
            $NewBookingItem->save(); 

            return redirect('summary/'.$NewBookingItem->booking_id.'');
        }else{

            $booking = \App\Booking::where('booking_id',$request->booking_id)->first();
            $bookingitem = \App\BookingItem::where('booking_id',$request->booking_id)->first();

            if($request->pay == 'tranfer' || $request->pay == 'store' ){
                $status = 0;
            }else{
                if($bookingitem->payment == 'book'){
                    $status = 0;
                }else{
                    $status = 1;
                }
                
            }

            $booking->method =  $request->pay;
            $booking->status_payment =  $status;

            $booking->save();

            // Session::forget('paynow');
            // Session::forget('paystore');

            return redirect('summary/'.$request->booking_id.'');
        }
    }

    public function  StoreDataBooking3(Request $request){
      
        $sql = Booking::where('booking_id',$request->booking_id)->first();
       
        if(!empty($request->flashsale)){            
            DB::table('customer_booking')->where('booking_id',$request->flashsale)->update(['status_booking'=> 1,'total'=> $request->sum]);
            
           $flashsale = FlashSaleItem::where('flashsale_id', Session::get('flashsale')['flashsale_id'])
                        ->where('service_id',Session::get('flashsale')['service_id'])->first();
            
            if($flashsale->use == NULL){
                $use  = 0 + 1;
            }else{
                $use  = $flashsale->use + 1 ;
            }

            $flashsale->use = $use;

            $flashsale->save();

            Session::forget('flashsale');
            if($sql->method=='paypal'){
                return redirect('charge/'.$sql->total.'/'.$request->booking_id.'');
            }else{
                return redirect('confirm_order/'.$request->flashsale.'');

            }
            
        }else{
            $data = array( 
                'coin'   =>  $request->mycoin,
                'code'   => $request->mycode,
                'code_discount'   => $request->code,
                'total'  => $request->total_mysum,
                'status_process'   => 1,
            );                 
           

            ////////คำนวณ coin
            DB::table('customer_booking')->where('booking_id',$request->booking_id)->update($data);

            if(!empty( $request->mycoin)){
                DB::table('customer')->where('customer_id',Session::get('customer_id'))->update(['coin'=>0]);
            }

            if(!empty($request->mycode)){
                $code = \App\Coupon::where('code',$request->mycode)->first();

                    if(!empty($code->use)){
                        $code->use  =  $code->use + 1;
                    }else{
                        $code->use  =  1;
                    }
                    
                    $code->save();
            }

            ///////////แจ้งเตือน
            $UpdateBooking =  Booking::where('booking_id',$request->booking_id)->first();
            $user = \App\Customer::where('customer_id',Session::get('customer_id'))->first();
            NotificationController::Notification('การจองบริการ',$user->name.' จองบริการหมายเลข '.$UpdateBooking->bookingstore_id,url('/detail-booking1/'.$UpdateBooking->bookingstore_id.''),'user'.Session::get('customer_id'),$UpdateBooking->id_store,'booking'); ///////edit id store

            ////////////////////////////การคำนวนจำนวนดีล
            if(!empty(Session::get('date')['date']) && !empty(Session::get('date')['time'])){
              
                $this->calculatedeal(Session::get('date')['time'],Session::get('date')['date']);
            }else{
              
                $this->calculatedealwithoutdate();
            }

            Session::forget('booking_id');
            Session::forget('typenow');
            Session::forget('typestore');
            Session::forget('typebook');
            Session::forget('date');

            $data  = array(
                'booking'   => \App\Booking::where('booking_id',$request->booking_id)->first(),
            );


            /////email
        
            
            if($sql->method=='paypal'){
                return redirect('charge/'.$sql->total.'/'.$request->booking_id.'');
            }else{
                Mail::send('email.sendbooking',$data,function($message) use($user){
                    $message->to($user->email)
                            ->subject('ยืนยันการจองบริการจากเว็บ beautygowhere')
                            ->from('58030218@kmail.ac.th');
                });
                return redirect('confirm_order/'.$request->booking_id.'');

            }
         }
    }

    public function RescheduleAppointment(Request $request){
      //  dd($request->all());

        $time = DB::table('mange_datetimed')->where('id_mange_datetimed',$request->time)->first();
        if(!empty($time->timed)){
            $select_time = $time->timed;
        }else{
            $select_time = $time->start.'-'.$time->finish;
        }
        $data = array(
            'booking_date'      =>  $request->date,
            'booking_time'      =>  $select_time,
            'booking_Employee'  =>  $request->emp,
            'status_booking'  =>  1,
        );

      
        $allitem =  DB::table('customer_booking_item')->where('booking_id',$request->booking_id)->get();
        $datetime =  DB::table('mange_datetimed')->where('id_mange_datetimed',$request->time)->first();

        foreach($allitem as $item){
            $Booking = BookingDeal::where('id_manage_datetime',$request->time)->where('date', $request->date)->where('service',$item->id_service)->first();   
            $ex_booking =  DB::table('customer_booking')->where('booking_id',$request->booking_id)->first();

            $del_Booking = BookingDeal::where('date', $ex_booking->booking_date)
                                      ->where('service',$item->id_service)
                                      ->Where('deal_time','like','%'.$ex_booking->booking_time.'%')
                                      ->first();

            //////ลบเวลา
            if($del_Booking->deal != 0){
                $del_Booking->deal =   $del_Booking->deal - 1 ;
                $del_Booking->save();
            }else{
                $del_Booking->deal =   0 ;
                $del_Booking->save();
            }
          

            ////////////เพิ่มเวลาใหม่
            if(!empty($Booking)){
 
                    $Booking->deal =  $Booking->deal+1;
                    $Booking->deal_time  = $select_time;
                    $Booking->id_store  = $datetime->id_store;
                    $Booking->save();
            }else{

                    $NewBooking = New BookingDeal;
                    $NewBooking->date = $request->date;
                    $NewBooking->id_manage_datetime = $request->time;
                    $NewBooking->service =  $item->id_service;
                    $NewBooking->deal = 1;
                    $NewBooking->deal_time  = $select_time;
                    $NewBooking->id_store  = $datetime->id_store;
                    $NewBooking->save();
                
            }
           
        }

        DB::table('customer_booking')->where('booking_id',$request->booking_id)->update($data);

        return redirect('member_booking');

    }

    public function CanCleAppointment(Request $request){
       DB::table('customer_booking')->where('booking_id',$request->booking_id)->update(['status_cancle' => 1]);
    }

    public function StoreDataBookingFlashsale(Request $request){
        
        $number = mt_rand( 1000000000, 9999999999);
        $data  = array(
            'flashsale_id'  =>  $request->flashsale_id,
            'service_id'  =>  $request->service_id,
            'price'  =>  $request->price,
            'type'  =>  $request->type,
            'booking_id'    =>   $number,
            'store'    =>    $request->store
        );

        Session::put('flashsale',$data);

        return  redirect('payment_method/'.$number);
    }

    /////check
    public function CheckCode(Request $request){
          $code = \App\Coupon::where('code',$request->code)->first();
          if(!empty($code)){
            $deal  = \App\CouponItem::where('code_id',$code->code_id)->where('service_id',intval($request->service_id))->first();
            if(!empty($deal)){

                if($code->deal == 0){
                    $coin  = 'โค้ดส่วนลดนี้ไม่สามารถใช้เหรียญได้';
                    if($code->deal != 0){
                        if($code->method == "price"){
                            if($request->sum >= $code->price_total){
                                $sum =  $request->sum - $code->price;
                                $discount = $code->price;
                                $text = '';
                             
                            }else{
                                $sum = '';
                                $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ ยอดคำสั่งซื้อไม่ตรงตามเงื่อนไขที่กำหนด';
                                $discount ='';
                               
                            }
                        }else{
                            if($request->sum >= $code->percent_total){
                                $sum =  $request->sum - ($code->percent % $request->sum) ;
                                $discount = $code->percent % $request->sum;
                                $text = '';
                              
                            }else{
                                $sum = '';
                                $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ ยอดคำสั่งซื้อไม่ตรงตามเงื่อนไขที่กำหนด';
                                $discount ='';
                               
                            }
            
                        }
                    }else{
                            $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ เนื่องโค้ดส่วนลดหมดแล้ว';
                            $sum = '';
                            $discount ='';
                           
                    }
                }else{
                    if($code->deal != 0){
                        if($code->method == "price"){
                            if($request->sum >= $code->price_total){
                                $sum =  $request->sum - $code->price;
                                $discount =$code->price;
                                $text = '';
                                $coin = '';
                            }else{
                                $sum = '';
                                $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ ยอดคำสั่งซื้อไม่ตรงตามเงื่อนไขที่กำหนด';
                                $coin = '';
                                $discount ='';
                                
                            }
                        }else{
                            if($request->sum >= $code->percent_total){
                                $sum =  $request->sum - ($code->percent % $request->sum) ;
                                $text = '';
                                $coin = '';
                                $discount =$code->percent % $request->sum;
                            }else{
                                $sum = '';
                                $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ ยอดคำสั่งซื้อไม่ตรงตามเงื่อนไขที่กำหนด';
                                $coin = '';
                                $discount ='';
                            }
            
                        }
                    }else{
                            $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ เนื่องโค้ดส่วนลดหมดแล้ว';
                            $sum = '';
                            $coin = '';
                            $discount ='';
                    }
                }
            }else{
               $text = 'ไม่สามารถใช้โค้ดส่วนลดได้ เนื่องจากบริการนี้ไม่ได้เข้าร่วมรายการ';
               $sum = '';
               $coin = '';
               $discount ='';
            }
   
           
           $data = array(
               'sum'   => $sum,
               'text'  => $text,
               'coin'  => $coin,
               'discount' => $discount
           );

           //dd($data);
       
           return json_encode($data);
          }
    }

    ////ใช้ก็ต่อเมื่อจองวันที่แล้วเท่านั้น นั้นคือลบแคมเปญ และ flash sale ---> เพิ่มตารางเพื่อเก็บ deal
    ////แคมเปญ และ flashsale คิดยังไง คิดอย่างไร
    public function calculatedeal($id,$date){

        $datetime =  DB::table('mange_datetimed')->where('id_mange_datetimed',$id)->first();
        if(!empty($datetime->timed)){
            $time = $datetime->timed;
        }else{ 
            $time = $datetime->start.'-'.$datetime->finish;
        }

        if(!empty(Session::get('typenow'))){
            foreach(Session::get('typenow') as $item){
                $Booking = BookingDeal::where('id_manage_datetime',$id)->where('date', $date)->where('service',$item['service'])->first();
                if(!empty($Booking)){
                        ////////////////////deal
                        $Booking->deal =  $Booking->deal+1;
                        $Booking->deal_time  = $time;
                        $Booking->id_store  = $datetime->id_store;
                        $Booking->save();
                  

                 
    
                    if($item['type'] == 'camp'){
                        $camp = \App\CampaignItem::where('campaign_id',$item['campaing'])->where('campaign_service_id',$item['service'])->first();
                        $count = $camp->campaign_deal-1 ;
                        if($camp->campaign_use == NULL){
                            $use  = 0 + 1 ;
                        }else{
                            $use  = $camp->campaign_use + 1 ;
                        }
    
                        $camp->campaign_deal = $count;
                        $camp->campaign_use = $use;
    
                        $camp->save();
    
                    }
    
                        
                }else{

                        $NewBooking = New BookingDeal;
                        $NewBooking->date = $date;
                        $NewBooking->id_manage_datetime = $id;
                        $NewBooking->service =  $item['service'];
                        $NewBooking->deal = 1;
                        $NewBooking->deal_time  = $time;
                        $NewBooking->id_store  = $datetime->id_store;
                        $NewBooking->save();

                    if($item['type'] == 'camp'){
                        $camp = \App\CampaignItem::where('campaign_id',$item['campaing'])->where('campaign_service_id',$item['service'])->first();
                        $count = $camp->campaign_deal-1 ;
                        if($camp->campaign_use == NULL){
                            $use  = 0 + 1 ;
                        }else{
                            $use  = $camp->campaign_use + 1 ;
                        }
    
                        $camp->campaign_deal = $count;
                        $camp->campaign_use = $use;
    
                        $camp->save();
    
                    }
    
               
                }
    
            }
           
        }
         /////////////////////////////
        if(!empty(Session::get('typestore'))){
            foreach(Session::get('typestore') as $item){
                $Booking = BookingDeal::where('id_manage_datetime',$id)->where('date', $date)->where('service',$item['service'])->first();
                if(!empty($Booking)){
//////////////deal
                        $Booking->deal =  $Booking->deal+1;
                        $Booking->deal_time  = $time;
                        $Booking->id_store  = $datetime->id_store;
                        $Booking->save();
                    
                }else{
                        $NewBooking = New BookingDeal;
                        $NewBooking->date = $date;
                        $NewBooking->id_manage_datetime = $id;
                        $NewBooking->service =  $item['service'];
                        $NewBooking->deal = 1;
                        $NewBooking->deal_time  = $time;
                        $NewBooking->id_store  = $datetime->id_store;
                        $NewBooking->save();

                    $NewBooking->save();
                }
    
            }
        }
        ///////////////////////
        if(!empty(Session::get('typebook'))){
            foreach(Session::get('typebook') as $item){
                $Booking = BookingDeal::where('id_manage_datetime',$id)->where('date', $date)->where('service',$item['service'])->first();
                if(!empty($Booking)){
                        $Booking->deal =  $Booking->deal+1;
                        $Booking->deal_time  = $time;
                        $Booking->id_store  = $datetime->id_store;
                        $Booking->save();

                }else{

                        $NewBooking = New BookingDeal;
                        $NewBooking->date = $date;
                        $NewBooking->id_manage_datetime = $id;
                        $NewBooking->service =  $item['service'];
                        $NewBooking->deal = 1;
                        $NewBooking->deal_time  = $time;
                        $NewBooking->id_store  = $datetime->id_store;
                        $NewBooking->save();

    
                    $NewBooking->save();
                }
    
            }
        }
    }

    ////////////////ในกรณีที่จองทีหลงให้เช็คว่ามีที่เป็น campaign หรือไม่ ถ้ามีให้ลบออกจาก campaign
    public function calculatedealwithoutdate(){
        if(!empty(Session::get('typenow'))){
            foreach(Session::get('typenow') as $item){
                if($item['type'] == 'camp'){
                    $camp = \App\CampaignItem::where('campaign_id',$item['campaing'])->where('campaign_service_id',$item['service'])->first();
                    $count = $camp->campaign_deal-1 ;
                    if($camp->campaign_use == NULL){
                        $use  = 0 + 1;
                    }else{
                        $use  = $camp->campaign_use + 1 ;
                    }

                    $camp->campaign_deal = $count;
                    $camp->campaign_use = $use;

                    $camp->save();
                    }
                }
            }
        
            
     
    }

    // public function Autocancle(Schedule $schedule){
    //     $schedule->call(function () {
    //         $date = date_format(date_create(date('Y/m/d')),"Y/m/d");  /// today
    //         $all = Booking::where('status_process',1)
    //                         ->where('status_success',0)
    //                         ->where('booking_date','<',$date)
    //                         ->get();

    //         foreach($all as $_all){
    //             DB::table('customer_booking')->update(['status_cancle'=>1]);
    //         }

    //     })->daily();

    // }
    

    
}
