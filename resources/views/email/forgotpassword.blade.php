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
            <br><br>
            <img src = "{{asset('frontend/images/key.png')}}" alt="beautytobook" height="150" width="170" /> 
            <h2>เปลี่ยนแปลงรหัสผ่าน</h2>
           <br><br>
           รหัสผ่านของคุณคือ : XXXXXX
            {{-- รหัสผ่านของคุณคือ :  {{$pass}} --}}
            <br><br><br>
            คุณสามารถเปลี่ยนแปลงรหัสผ่านบัญชี  Beauty to Book ของคุณ  ได้โดยคลิกที่ link ด้านล่างนี้
            <br><br>
            <a href="{{url('forgotpassword')}}">https://www.beautytobook.com/forgotpassword</a>
            <br><br>
            หากคุณไม่ได้แจ้ง  “เปลี่ยนรหัสผ่าน/ลืมรหัสผ่าน” คุณไม่จำเป็นต้องทำการเปลี่ยนแปลงใดๆ และสามารถใช้รหัสผ่านเดิมเพื่อเข้าใช้งานได้ตามปกติ
      
            <br><br><br><br>
            
            
                ด้วยความเคารพ
                <br>

                ทีมงาน Beauty to book
            <br><br><br>

            **โปรดอย่าตอบกลับอีเมลนี้**
            <br>
            <hr style="border-style: solid;border-color: #ffc186;background-color: #ffc186;">
            <br><br>
            Follow this link to reset your Beauty to Book password for your account.
            <br><br>
            <a href="{{url('forgotpassword')}}">https://www.beautytobook.com/forgotpassword</a>
            <br><br>
            If you didn’t ask to reset your password, you can ignore this email.
            <br><br><br>
            Thanks
            <br>
            Your Beauty to Book team
            <br><br><br>
            **please do not reply to this message noreply@beautytobook.com**

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