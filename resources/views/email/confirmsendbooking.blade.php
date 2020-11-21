<html>
<head>
    <style>
   
    </style>
</head>
<body>
    <div class="borderoutside" style="padding: 10%;">
        <div class="borderinside" style="border: 2px solid #ffc186;">
            <br>
            <div class="logo"> 
                <table>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <img src="{{asset('frontend/images/SVG/logo.svg')}}" width="200px">
                            </div>
                        </td>
                        <td>
                            <h2 style="padding-top: 20px;">ยืนยันหมายเลขการจอง {{$booking->booking_id}}</h2>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div style="background-color: #ffc186;padding: 2%;">
                <div style="line-height: 2;">
                    <table>
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
                    <table>
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
                    <table>
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
                    <table>
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
            <table>
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
                <table>
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
                <table>
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
            <div style="background-color: #ffc186;padding: 2%;">
                <div class="content " style="line-height: 2;">
                    <table>
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" >วิธีการชำระเงิน : </label>
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
                                    <label for="name" >สถานะการจ่ายเงิน : </label>
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
                    <table>
                        <tr>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" >โค้ดส่วนลด : </label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm"> 
                                    <label for="name">{{!empty($booking->code) ? $booking->code : '-' }}</label>
                                </div>
                            </td>
                            <td style="width: 275px;">
                                <div data-repeater-item class="outer col-sm-3"> 
                                    <label for="name" >coin : </label>
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
    </div>
</body>
</html>
