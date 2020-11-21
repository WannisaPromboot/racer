<!DOCTYPE html>
<html>

   <head>
   </head>
	
   <body>
       <div style="border-style: solid;border-color: #ffc186;background-color: #ffc186;" >
            <div style="text-align: center;margin-top:4px">
                <a href = "https://miu.orangeworkshop.info/beautytobook" target = "_self"  > 
                    <img src = "{{asset('frontend/images/SVG/logo.svg')}}" alt = "beautytobook" height="100" width="200" /> 
                </a>
            </div>
            
       </div>
       <div style="text-align: center;">
            <h1>สวัสดี test test</h1>
            ยินดีต้อนรับสู่ประสบการณ์ใหม่ในการจองและซื้อดีลสุขภาพและความงามกับ Beauty to Book  
            <br>
            คุณสามารถค้นหาดีลที่ใช่ และจองบริการที่ถูกใจได้ง่ายๆ พร้อมรับ Cash back ทุกการจอง เพื่อใช้เป็นส่วนลดในครั้งต่อไป
            <br><br><br>
            รหัสผ่านของคุณ:  XXXXXX
            <br><br><br>
            ใส่ Code เพื่อรับส่วนลด 10% สำหรับการจองครั้งแรกของคุณ
            <br><br><br>
            <div style="border-style: solid;border-color: #ffc186;background-color: #ffc186;width:200px;margin-left:42%">
                <p style="margin-top:20px">CODE: HELLOBTB</p>
            </div>
            <br><br><br>
           
            <?php $hot = \App\HotService::where('date_start','>=',date('Y-m-d'))->where('date_finish','>=',date('Y-m-d'))->limit(4)->get();?>
            {{-- <h4 style="float: left;margin-left:10% !important">บริการยอดนิยม</h4>
            <br><br> --}}
            @foreach ($hot as $item)
           
                    <div style="display: inline-flex">
                        <figure>
                            <a href="{{url('allservices/'.$item->id_hot.'')}}">
                                <img src="{{url('storage/app/'.$item->filepath)}}" width="250" height="150">
                            </a>
                            <figcaption>{{$item->title_th}}</figcaption>
                        </figure>
                    </div>
               
            @endforeach
            <br><br>
            <br><br>
                เพลิดเพลินและสนุกไปกับการจองบริการที่หลากหลาย เช่น บริการทำผม บริการทำเล็บ บริการนวด สปา  ออนเซ็น ฟิตเนส บริการเสริมความงาม
                <br>
                บริการศัลยกรรม บริการทำฟัน  บริการปรึกษาด้านการมีบุตร  บริการตรวจสุขภาพ และบริการอีกมากมายกับ  Beauty to book
                <br><br>
                <br><br>
                <br><br>
                ด้วยความเคารพ
                <br>

                ทีมงาน Beauty to book

    </div>
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