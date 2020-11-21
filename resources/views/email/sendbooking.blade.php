<html>
<head>
    <style>
   
    </style>
</head>
<body>
    <div style="border:3px solid  #ffc186;background-color: white;" >
        <div style="text-align: center;margin-top:4px">
            <a href = "https://miu.orangeworkshop.info/beautytobook" target = "_self"  > 
                <img src = "http://miu.orangeworkshop.info/beautytobook/frontend/images/SVG/logo.svg" alt = "beautytobook" height="100" width="200" /> 
            </a>
        </div>
        
   </div>
{{-- body --}}
            <br>
            @if($booking->status_payment == 1 && $booking->status_booking == 1 )
            <div class="logo" style="text-align: center;"> 
                <h2 style="padding-top: 20px;">การจองของคุณสำเร็จ<br><b>หมายเลขการจอง {{$booking->booking_id}}</b></h2><br>
                <?php $id = Crypt::encryptString($booking->booking_id);?>
                 {!! QrCode::size(200)->generate('http://miu.orangeworkshop.info/beautytobook/showqrcode/'.$id.'') !!}
            </div>
            @elseif($booking->status_payment == 0 && $booking->status_booking == 1 ) 
            <div style="text-align: center;"> 
                <h2 style="padding-top: 20px;"><b>หมายเลขการจอง {{$booking->booking_id}}</b></h2><br>
                <div>รอชำระเงิน</div><br>
                <div style="margin-left: 40%;margin-right: 40%;">
                    <div style="border:3px solid #ffc186;padding: 10%;">จำนวนที่ต้องชำระ {{$booking->total}} </div>
                </div>
              
            </div>
            @elseif($booking->status_payment == 1 && $booking->status_booking == 0 ) 
            <div style="text-align: center;"> 
                <h2 style="padding-top: 20px;"><b>หมายเลขการจอง {{$booking->booking_id}}</b></h2><br>
                <div style="color: #ffc186">กรุณาจองวันเวลาเพื่อเข้ารับบริการ  </div><br>
                <div style="margin-left: 40%;margin-right: 40%;">
                    <div style="border:3px solid #ffc186;padding: 10%;">นัดวันเข้ารับบริการ</div>
                </div>
            </div>
            @endif
            <br>
            <div style="text-align: center">ขอขอบคุณสำหรับการจองผ่าน Beauty to Book คุณสามรถตรวจสอบรายละเอียดการจองได้ตามข้อมูลด้านล่างนี้</div>
            <br>
            <br>
            <div  style="text-align:center;">
            <div >
                <div style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item  > 
                                    <label for="name" style="margin-left: 30px">ผู้รับบริการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <?php  $user = \App\Customer::where('customer_id',$booking->customer_id)->first(); ?>
                                <div data-repeater-item> 
                                    <label for="name" > {{$user->name}}</label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3 " > 
                                    <label for="name" style="margin-left: 30px">ไอดีผู้รับบริการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name" >{{$user->customer_id}}</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item  > 
                                    <label for="name" style="margin-left: 30px">โทรศัทพ์ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item> 
                                    <label for="name" >{{!empty($user->telephone)? $user->telephone : '-' }}</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3" > 
                                    <label for="name" style="margin-left: 30px">วันที่ทำรายการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">{{date_format($booking->updated_at,'d-m-yy')}}</label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3" > 
                                    <label for="name" style="margin-left: 30px">เวลาที่ทำรายการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name" >{{date_format($booking->updated_at,'H:I:s')}} น.</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3" > 
                                    <label for="name" style="margin-left: 30px">วันที่เข้ารับบริการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name" >{{$booking->booking_date}}</label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3" > 
                                    <label for="name" style="margin-left: 30px">เวลาเข้ารับบริการ : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name" >{{$booking->booking_time}} น.</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php  $item = \App\BookingItem::where('booking_id',$booking->booking_id)->get();
            $i =1; 
            ?>
            <br>
            @foreach ($item as $_item)
            <?php $service = \App\Service::where('id_service',$_item->id_service)->first();   //dd($item);?>
            <table style="margin-left:10%">
                <tr>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm-3"> 
                            <span class="numbercircle">{{$i}}.</span><label for="name" style="margin-left: 30px">ชื่อบริการ : </label>
                        </div>
                    </td>
                    <td style="width: 275px;">    
                        <div data-repeater-item class="outer col-sm"> 
                            <label for="name" >{{$service->service_name_th}} </label>
                        </div>
                    </td>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm-3"> 
                            <label for="name" style="margin-left: 30px">ร้านค้า : </label>
                        </div>
                    </td>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm"> 
                            <?php $store = \App\Store::where('id_store',$service->id_store)->first(); ?>
                            <label for="name" >{{$store->store_name_th}}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm-3"> 
                            <label for="name" style="margin-left: 30px">เวลาบริการ : </label>
                        </div>
                    </td>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm"> 
                            <label for="name" >{{$service->service_time}} นาที</label>
                        </div> 
                    </td>
                    <td style="width: 275px;">
                        <div data-repeater-item class="outer col-sm-3"> 
                            <label for="name" style="margin-left: 30px">ผู้เชี่ยวชาญ : </label>
                        </div>
                    </td>
                    <td style="width: 275px;"> 
                        <div data-repeater-item class="outer col-sm"> 
                            <?php  $employer = \App\Employer::where('id_employer',$booking->booking_Employee)->first();  ?>
                            @if(!empty($employer))
                                @if(Session::get('lang')=='th')
                                    <label for="name" >{{$employer->employer_firstname_th}}-{{$employer->employer_lastname_th}}</label>
                                @else
                                    <label for="name" >{{$employer->employer_firstname_en}}-{{$employer->employer_lastname_en}}</label>
                                @endif
                            @else
                                <label for="name" >{{Session::get('lang')=='th'?'ไม่ระบุ' :'N/A'}}</label>
                            @endif
                        </div>
                    </td>
                </tr>
            </table>
            <div class="content " style="line-height: 2;">
                <table style="margin-left:10%">
                    <tr>
                        <td style="width: 275px;"> 
                            <div data-repeater-item class="outer col-sm-3"> 
                                <label for="name" style="margin-left: 30px">ราคาปกติ : </label>
                            </div>
                        </td>
                        <td style="width: 275px;">
                            <div data-repeater-item class="outer col-sm"> 
                                <label for="name" >{{$service->service_price}} บาท</label>
                            </div>
                        </td>
                        <td style="width: 275px;">
                            <div data-repeater-item class="outer col-sm-3"> 
                                <label for="name" style="margin-left: 30px">ราคาพิเศษ : </label>
                            </div>
                        </td>
                        <td style="width: 275px;">
                            <div data-repeater-item class="outer col-sm"> 
                                <label for="name" >{{$service->service_free}} บาท</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="content " style="line-height: 2;">
                <table style="margin-left:10%">
                    <tr>
                        <td style="width: 275px;">
                            <div data-repeater-item class="outer col-sm-3"> 
                                <label for="name" style="margin-left: 30px;margin-top:5%">คำขอพิเศษ : </label>
                            </div>
                        </td>
                        <td style="width: 275px;"> 
                            <div data-repeater-item class="outer col-sm-8"> 
                                <label>{{$_item->text_special}}</label>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
        <?php  $i++;?>
        @endforeach
        <br>
            <div >
                <div class="content " style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name"  style="margin-left: 30px">วิธีการชำระเงิน : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">
                                        <?php
                                            if($booking->method == 'credit'){
                                                    echo 'เครดิต/วีซ่า';
                                            }if($booking->method == 'tranfer'){
                                                echo 'โอนผ่านธนาคาร';
                                            }if($booking->method == 'InternetBanking'){
                                                echo 'Internet Banking';
                                            }if($booking->method == 'paypal'){
                                                echo 'paypal';
                                            }
                                            ?>
                                    </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" style="margin-left: 30px">สถานะการจ่ายเงิน : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">{{$booking->method == 'store' ? 'ยังไม่จ่ายเงิน' : 'จ่ายเงินแล้ว'}}</label>
                                    @if($booking->method == 'tranfer')
                                        <a class="btn btn-success ml-3" href="javascript:void(0)">หลักฐาน</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="content " style="line-height: 2;">
                    <table style="margin-left:10%">
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" style="margin-left: 30px" >โค้ดส่วนลด : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">{{!empty($booking->code) ? $booking->code : '-' }}</label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" style="margin-left: 30px">coin : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">{{!empty($booking->coin) ? $booking->coin : '-' }}</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div style="text-align: center;margin-left:10%;">
            <h3 style="color: #ffc186">คุณจะได้รับ 18 coins หลังจากเข้ารับบริการแล้ว</h3>
        </div>
        <br><br>
        <div style="margin-left:10%;">
            <p style="color: red"><b>ข้อตกลงและเงื่อนไข: </b></p>
            <ul style="color: red">
                <li>ดีลนี้เมื่อซื้อแล้ว จะมีอายุการใช้งาน 2 เดือน นับจากวันที่ซื้อ</li>    
                <li>ทุกคูปองและบริการ ไม่สามารถแลกเปลี่ยนเป็นเงินสดได้</li>    
                <li>ไม่สามารถใช้ร่วมกับรายการ Promotions ส่งเสริมการขายอื่นได้</li>    
                <li>กรุณาแสดงคูปองจากทางอีเมลให้กับพนักงานก่อนเข้าใช้บริการ</li>    
                <li>ดีลนี้ไม่สามารถยกเลิกหรือคืนเงินได้</li>    
                <li>กรุณาโทรจองคิวล่วงหน้า สอบถามข้อมูลเพิ่มเติมได้ที่ 0945465222<br>
                    ในเวลาทำการ วันจันทร์-วันอาทิตย์ 10.00 น. - 21.00น..</li>    
            <ul>
        </div>
        <div style="margin-left:10%;">
            กรุณาไปก่อนเวลานัดหมาย 15 นาที หากมีเหตุขัดข้องกรุณาแจ้งสถานที่ให้บริการ <b style="color: red">  เราต้องการให้ทั้งลูกค้าและผู้ให้บริการมีความสุขกับการใช้บริการผ่าน Beauty to Book </b>
        </div>
        <br>
        <div style="margin-left:10%;">
            <h4>ถ้าคุณพบปัญหาหรือมีคำถาม สามารถติดต่อ Beauty to Book ได้ที่:<br>
            02 888 8888 (8:30am-5:30pm)</h4>
        </div>
    {{-- footer --}}
    <br><br><br>
    <div style="text-align: center;background-color:#ffc186;padding:7px">
        <table style="text-align: center;width:100%" >
            <thead style="text-align: left">
                <tr>
                    <th width="3%"></th>
                    <th width="5%">ขอความช่วยเหลือ</th>
            
                    <th width="5%">เกี่ยวกับเรา</th>
                    <th width="5%"></th>
                    
                    <th width="10%">ติดตามข่าวสารของเราใหม่ๆได้เลย</th>
                </tr>
            </thead>
            <tbody style="text-align: left">
                {{-- <tr width="5%">
                    <td></td>
                </tr> --}}
                <tr width="5%">
                    <td></td>
                    <td><a href="{{url('payment_confirm')}}" style="color: black;text-decoration: none;">แจ้งชำระเงิน</a></td>
                    <td><a href="{{url('contact')}}" style="color: black;text-decoration: none;">ติดต่อเรา</a></td>
                    <td><a href="{{url('terms_condition')}}" style="color: black;text-decoration: none;">นโยบายความเป็นส่วนตัว</a></td>
                </tr>
            
                <tr width="5%">
                    <td></td>
                    <td><a href="{{url('faqs')}}" style="color: black;text-decoration: none;">คำถามที่พบบ่อย</a></td>
                    <td><a href="{{url('about')}}" style="color: black;text-decoration: none;">เกี่ยวกับ Beauty To Book</a></td>
                    <td><a href="{{url('terms_condition')}}" style="color: black;text-decoration: none;">ข้อกำหนดการใช้งาน</a></td>

                </tr>
            
            
                <tr width="5%">
                    <td></td>
                    <td><a href="{{url('partner')}}" style="color: black;text-decoration: none;">ร่วมเป็น Partner กับเรา</a></td>
                    <td><a href="{{url('terms_condition')}}" style="color: black;text-decoration: none;">นโยบายเกี่ยวกับคุ้กกี้</a></td>

                </tr>
                <tr width="5%">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>ติดตามช่องทางอื่นๆ</td>
                    

                </tr>
                <tr width="5%">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div style="display: inline-flex">
                            <div style="background-color: white;width:38px;border-radius: 50px;text-align: center;margin-right:20px">
                                <a href="#">
                                    <img src="{{asset('frontend/images/fb_contact.png')}}" alt="" >
                                </a>
                            </div>
                            <div style="background-color: white;width:38px;border-radius: 50px;text-align: center;margin-right:20px">
                                <a href="#">
                                    <img src="{{asset('frontend/images/ig_contact.png')}}" alt="">
                                </a>
                            </div>
                            <div style="background-color: white;width:38px;border-radius: 50px;text-align: center;">
                                <a href="#">
                                    <img src="{{asset('frontend/images/line_contact.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
