<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Frontend\GetdataController;
use DB;

class ReportController extends Controller
{
    public function ReportContent(){
        $data = array(
            'store'   => \App\Store::where('display',0)->get(),
        );
        return view('Admin.report.report-content',$data);
    }

    public function GetReport(Request $request){
        if(!empty($request->id_store) && $request->id_store != 0 && empty($request->datefrom) &&  empty($request->dateto)){

            if($request->report == 1){
                $customer = \App\CustomerLogin::join('customer','customer_login.customer_id','=','customer.customer_id')->orderby()->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>IP</th>
                                        <th>Firstname</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Search keyword</th>
                                        <th>Login Date & Time</th>
                                        <th>Login Duration</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        foreach($customer as $_item){

                            $cus_keyword = DB::table('customer_keyword')->where('customer_id',$_item->customer_id)->get();
                    
                echo                 '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->ip.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->birthday.'</td>
                                        <td>';
                                        foreach( $cus_keyword  as $key){
                                            echo $key->keyword.', ';
                                        }
                echo                        '</td>
                                        <td>'.$_item->created_at.'</td>
                                        <td>'.$_item->duration.'</td>
                                    </tr>';
                        }
                echo             '</thead>
                            </table>';
    
            }else if($request->report == 2){
                $store = \App\Store::join('service','store.id_store','=','service.id_store')->where('store.id_store',$request->id_store)->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>GP</th>
                                    <th>Credit card fee</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>วันที่สร้างบริการ/edit</th>
                                    <th>วันที่ร้านค้าเข้าระบบล่าสุด</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();
                        $login = \App\StoreLogin::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();

                        if(!empty($type1)){
                            $_type1 = $type1->type_th;
                        }else{
                            $_type1 = '-';
                        }

                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }

                        if(!empty($login)){
                            $_login = $login->created_at;
                        }else{
                            $_login = '-';
                        }
    
    
                        $pricenow = $_item->service_free-($_item->service_free*0.01);
                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$com->commision.' %</td>
                                    <td></td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$_type1.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.$pricenow.'</td>
                                    <td>-</td>
                                    <td>'.$_item->updated_at.'</td>
                                    <td>'.$_login.'</td>
                                </tr>';
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 3){
    
                $store = \App\Store::join('service','store.id_store','=','service.id_store')
                                    ->join('customer_booking_item','service.id_service','=','customer_booking_item.id_service')
                                    ->where('store.id_store',$request->id_store)->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>วันที่ทำรายการ</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ช่องทางการชำระเงิน</th>
                                    <th>pay date</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>ราคาที่ชำระจริง</th>
                                    <th>วันที่ชำระจริง</th>
                                    <th>code ส่วนลด</th>
                                    <th>ส่วนลด</th>
                                    <th>จำนวนเหรียญที่ใช้</th>
                                    <th>รายได้จากค่าบริการจริง</th>
                                    <th>total commision</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();

                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                        $booking = \App\Booking::where('booking_id',$_item->booking_id)->first();
    
    
                        $pricenow = $_item->service_free-($_item->service_free*($com->paynow/100));
                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$type1->type_th.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$booking->booking_date.'</td>
                                    <td>'.$booking->method.'</td>
                                    <td>-</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.number_format($pricenow).'</td>
                                    <td>-</td>
                                    <td></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>';
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 4){
                $review = \App\Customer::join('customer_booking','customer.customer_id','=','customer_booking.customer_id') 
                                        ->join('customer_booking_item','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                        ->join('customer_review','customer_review.customer_id','=','customer_booking.customer_id')->get();
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>telephone</th>
                                    <th>บริการทที่ใช้</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ชื่อร้าน</th>
                                    <th>จำนวนเงินที่ลูกค้าจ่ายจริง</th>
                                    <th>ข้อความที่ลูกค้ารีวิว</th>
                                    <th>วันที่รีวิว</th>
                                    <th>คะแนนบรรยากาศ</th>
                                    <th>คะแนนความสะอาด</th>
                                    <th>คะแนนพนักงาน</th>
                                    <th>คะแนนความคุ้มค่า</th>
                                    <th>ข้อความที่ตอบกลับของร้านค้า</th>
                                    <th>วันที่ตอบกลับ</th>
                                </tr>
                            </thead>
                            <tbody>';
                        foreach($review as $_item){
                        $service = \App\Service::where('id_service',$_item->id_service)->first();
                        $store = \App\Store::where('id_store',$_item->id_store)->first();
    
                        $main = \App\Mainmenu::where('menu_id',$service->category_id)->first();
                        $type1 = \App\Type::where('type_id',$service->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$service->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$service->subcategory3_id)->first();
                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                
                            if(  $store->id_store == $request->id_store){
                                echo     '<tr>
                                            <td>'.$_item->customer_id.'</td>
                                            <td>'.$_item->name.'</td>
                                            <td>'.$_item->lastname.'</td>
                                            <td>'.$_item->lastname.'</td>
                                            <td>'.$type1->type_name.'</td>
                                            <td>'.$_item->boooking_date.'</td>
                                            <td>'.$store->store_name_th.'</td>
                                            <td>'.$_item->total.'</td>
                                            <td>'.$_item->text.'</td>
                                            <td>'.$_item->created_at.'</td>
                                            <td>'.$_item->score_relax.'</td>
                                            <td>'.$_item->score_clean.'</td>
                                            <td>'.$_item->score_emp.'</td>
                                            <td>'.$_item->score_value.'</td>
                                            <td>'.$_item->reply.'</td>
                                            <td>'.$_item->updated_at.'</td>
                                        </tr>';
                            }
                        
                        }
                        echo             '</tbody>
                        </table>';
    
            }else if($request->report == 5){
    
                $review = \App\Customer::get();
                            echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>telephone</th>
                                    <th>Dare of birth</th>
                                </tr>
                            </thead>
                            <tbody>';
                            foreach($review as $_item){
    
                            echo     '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->telephone.'</td>
                                        <td>'.$_item->birthday.'</td>
                                      </tr>';
                            }
                            echo             '</tbody>
                            </table>';
    
            }else if($request->report == 6){  /////รายงานคอมมิชชั่น
                        $bookingItem = \App\BookingItem::join('customer_booking','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                                        ->where('status_process',1)
                                                        ->where('customer_booking_item.id_store',$request->id_store)
                                                        ->get();
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>รหัสร้านค้า</th>
                                <th>ชื่อร้านค้า</th>
                                <th>สาขา</th>
                                <th>อีเมล</th>
                                <th>โทรศัพท์</th>
                                <th>pay now</th>
                                <th>pay@store</th>
                                <th>วันที่ทำรายการในระบบ</th>
                                <th>วันที่เข้ารับบริการ</th>
                                <th>ชื่อบริการ</th>
                                <th>ราคาโปร pay now</th>
                                <th>ราคาโปร pay@store</th>
                                <th>ลูกค้าจ่ายจริง</th>
                                <th>รหัสส่วนลด</th>
                                <th>% ส่วนลด</th>
                                <th>% BTB ลดให้ลูกค้า</th>
                                <th>% ร้านค้าร่วมลด</th>
                                <th>ร้านค้าร่วมลด</th>
                                <th>% คอมมิชชั่น</th>
                                <th>ค่าคอมมิชชั่น</th>
                                <th>วิธีจ่าย</th>
                                <th>ค่าธุรกรรมบัตรเครดิต</th>
                                <th>การใช้เหรียญ</th>
                                <th>รายได้ของร้านค้า paynow</th>
                                <th>รายได้ของร้านค้า pay@store</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach($bookingItem as $_item){
                            $service = \App\Service::where('id_service',$_item->id_service)->first();
                            $store = \App\Store::where('id_store',$service->id_store)->first();
                            $com = \App\StoreComission::where('id_store',$_item->id_store)->first();

                        
                            /////check pay
                            if($_item->payment == 'now'){
                                    $pay_now = 'Y';
                                    $pay_store = '';
                                
                            }else if($_item->payment == 'store'){
                                $pay_store = 'Y';
                                $pay_now = '';
                            }

                            //////paymeny
                            if($_item->method  ==  'tranfer'){
                                $method = 'โอนเงินผ่านธนาคาร';
                            }else if($_item->method  ==  'credit'){
                                $method = 'เครดิต/วีซ่า';
                            }else if($_item->method  ==  'paypal'){
                                $method = 'paypal';
                            }else if($_item->method  ==  'interbanking'){
                                $method = 'interbanking';
                            }else{
                                $method = 'จ่ายที่ร้านค้า';
                            }

                            $pricenow = $service->service_free-($service->service_free*0.01);
                            $pricecom = $_item->total*($com->commision/100);

                            
                            if($_item->payment == 'now'){
                                $result_now = number_format($_item->price - $pricecom);
                                $result_store = '';
                            }else if($_item->payment == 'store'){
                                $result_store = number_format($_item->price - $pricecom);
                                $result_now = '';
                            }

                        echo     '<tr>
                                    <td>'.$store->id_store.'</td>
                                    <td>'.$store->store_name_th.'</td>
                                    <td>'.substr($store->id_store,6,7).'</td>
                                    <td>'.$store->store_email.'</td>
                                    <td>'.$store->store_phone.'</td>
                                    <td>'.$pay_now.'</td>
                                    <td>'.$pay_store.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$_item->booking_date.'</td>
                                    <td>'.$service->service_name_th.'</td>
                                    <td>'.number_format($pricenow).'</td>
                                    <td>'.number_format($service->service_price).'</td>
                                    <td>'.number_format($_item->total).'</td>
                                    <td>'.$_item->code.'</td>
                                    <td>% ส่วนลด</td>
                                    <td>% BTB ลดให้ลูกค้า</td>
                                    <td>% ร้านค้าร่วมลด</td>
                                    <td>ร้านค้าร่วมลด</td>
                                    <td>'.$com->commision.' %</td>
                                    <td>'.$pricecom.'</td>
                                    <td>'.$method.'</td>
                                    <td>-</td>
                                    <td>'.$_item->coin.'</td>
                                    <td>'.$result_now.'</td>
                                    <td>'.$result_store.'</td>
                                </tr>';
                        }
                        echo             '</tbody>
                        </table>';

        }
            /////endif
            /////////////////////////
        }else if(!empty($request->dateto) && !empty($request->datefrom)){
            if($request->report == 1){
                $customer = \App\CustomerLogin::join('customer','customer_login.customer_id','=','customer.customer_id')->get(); ////แก้ไข login มี logtime
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>IP</th>
                                        <th>Firstname</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Search keyword</th>
                                        <th>Login Date & Time</th>
                                        <th>Login Duration</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        foreach($customer as $_item){
                            $cus_keyword = DB::table('customer_keyword')->where('customer_id',$_item->customer_id)->get();
                    
                echo                 '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->ip.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->birthday.'</td>
                                        <td>';
                                        foreach( $cus_keyword  as $key){
                                            echo $key->keyword.', ';
                                        }
                echo                        '</td>
                                        <td>'.$_item->created_at.'</td>
                                        <td>'.$_item->duration.'</td>
                                    </tr>';
                        }
                echo             '</thead>
                            </table>';
    
            }else if($request->report == 2){
                $store = \App\Store::join('service','store.id_store','=','service.id_store')->where('store.id_store',$request->id_store)->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>GP</th>
                                    <th>Credit card fee</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>วันที่สร้างบริการ/edit</th>
                                    <th>วันที่ร้านค้าเข้าระบบล่าสุด</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();
                        $login = \App\StoreLogin::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();

                        if(!empty($type1)){
                            $_type1 = $type1->type_th;
                        }else{
                            $_type1 = '-';
                        }

                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }

                        if(!empty($login)){
                            $_login = $login->created_at;
                        }else{
                            $_login = '-';
                        }
    
    
                        $pricenow = $_item->service_free-($_item->service_free*0.01);
                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$com->commision.' %</td>
                                    <td></td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$_type1.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.$pricenow.'</td>
                                    <td>-</td>
                                    <td>'.$_item->updated_at.'</td>
                                    <td>'.$_login.'</td>
                                </tr>';
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 3){


                if($request->id_store != 0){
                    $store = \App\Store::join('service','store.id_store','=','service.id_store')
                            ->join('customer_booking_item','service.id_service','=','customer_booking_item.id_service')
                            ->where('store.id_store',$request->id_store)
                            ->get();
                }else{
                    $store = \App\Store::join('service','store.id_store','=','service.id_store')
                            ->join('customer_booking_item','service.id_service','=','customer_booking_item.id_service')
                            ->get();
                }           
                                    
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>วันที่ทำรายการ</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ช่องทางการชำระเงิน</th>
                                    <th>pay date</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>ราคาที่ชำระจริง</th>
                                    <th>วันที่ชำระจริง</th>
                                    <th>code ส่วนลด</th>
                                    <th>ส่วนลด</th>
                                    <th>จำนวนเหรียญที่ใช้</th>
                                    <th>รายได้จากค่าบริการจริง</th>
                                    <th>total commision</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();

                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                        $booking = \App\Booking::where('booking_id',$store[1]->booking_id)     
                                    ->first();

                        $booking_date = date_format(date_create($booking->booking_date),'Y-m-d');
                        $pricenow = $_item->service_free-($_item->service_free*($com->paynow/100));

                    if($booking_date >= $request->datefrom && $booking_date <= $request->dateto){
                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$type1->type_th.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$booking->booking_date.'</td>
                                    <td>'.$booking->method.'</td>
                                    <td>-</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.number_format($pricenow).'</td>
                                    <td>-</td>
                                    <td></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>';
                        }
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 4){
                $review = \App\Customer::join('customer_booking','customer.customer_id','=','customer_booking.customer_id') 
                                        ->join('customer_booking_item','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                        ->join('customer_review','customer_review.customer_id','=','customer_booking.customer_id')
                                        ->where('created_at','=>',$request->datefrom)
                                        ->where('created_at','<',$request->dateto)
                                        ->get();
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>telephone</th>
                                    <th>บริการทที่ใช้</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ชื่อร้าน</th>
                                    <th>จำนวนเงินที่ลูกค้าจ่ายจริง</th>
                                    <th>ข้อความที่ลูกค้ารีวิว</th>
                                    <th>วันที่รีวิว</th>
                                    <th>คะแนนบรรยากาศ</th>
                                    <th>คะแนนความสะอาด</th>
                                    <th>คะแนนพนักงาน</th>
                                    <th>คะแนนความคุ้มค่า</th>
                                    <th>ข้อความที่ตอบกลับของร้านค้า</th>
                                    <th>วันที่ตอบกลับ</th>
                                </tr>
                            </thead>
                            <tbody>';
                        foreach($review as $_item){
                        $service = \App\Service::where('id_service',$_item->id_service)->first();
                        $store = \App\Store::where('id_store',$_item->id_store)->first();
    
                        $main = \App\Mainmenu::where('menu_id',$service->category_id)->first();
                        $type1 = \App\Type::where('type_id',$service->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$service->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$service->subcategory3_id)->first();
                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                
                            if(  $store->id_store == $request->id_store){
                                echo     '<tr>
                                            <td>'.$_item->customer_id.'</td>
                                            <td>'.$_item->name.'</td>
                                            <td>'.$_item->lastname.'</td>
                                            <td>'.$_item->lastname.'</td>
                                            <td>'.$type1->type_name.'</td>
                                            <td>'.$_item->boooking_date.'</td>
                                            <td>'.$store->store_name_th.'</td>
                                            <td>'.$_item->total.'</td>
                                            <td>'.$_item->text.'</td>
                                            <td>'.$_item->created_at.'</td>
                                            <td>'.$_item->score_relax.'</td>
                                            <td>'.$_item->score_clean.'</td>
                                            <td>'.$_item->score_emp.'</td>
                                            <td>'.$_item->score_value.'</td>
                                            <td>'.$_item->reply.'</td>
                                            <td>'.$_item->updated_at.'</td>
                                        </tr>';
                            }
                        
                        }
                        echo             '</tbody>
                        </table>';
    
            }else if($request->report == 5){
    
                $review = \App\Customer::get();
                            echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>telephone</th>
                                    <th>Dare of birth</th>
                                </tr>
                            </thead>
                            <tbody>';
                            foreach($review as $_item){
    
                            echo     '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->telephone.'</td>
                                        <td>'.$_item->birthday.'</td>
                                      </tr>';
                            }
                            echo             '</tbody>
                            </table>';
    
            }else if($request->report == 6){  /////รายงานคอมมิชชั่น
                        $bookingItem = \App\BookingItem::join('customer_booking','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                                        ->where('status_process',1)
                                                        ->where('customer_booking_item.created_at','>=',$request->datefrom)
                                                        ->where('customer_booking_item.created_at','<',$request->dateto)
                                                        ->get();

                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>รหัสร้านค้า</th>
                                <th>ชื่อร้านค้า</th>
                                <th>สาขา</th>
                                <th>อีเมล</th>
                                <th>โทรศัพท์</th>
                                <th>pay now</th>
                                <th>pay@store</th>
                                <th>วันที่ทำรายการในระบบ</th>
                                <th>วันที่เข้ารับบริการ</th>
                                <th>ชื่อบริการ</th>
                                <th>ราคาโปร pay now</th>
                                <th>ราคาโปร pay@store</th>
                                <th>ลูกค้าจ่ายจริง</th>
                                <th>รหัสส่วนลด</th>
                                <th>% ส่วนลด</th>
                                <th>% BTB ลดให้ลูกค้า</th>
                                <th>% ร้านค้าร่วมลด</th>
                                <th>ร้านค้าร่วมลด</th>
                                <th>% คอมมิชชั่น</th>
                                <th>ค่าคอมมิชชั่น</th>
                                <th>วิธีจ่าย</th>
                                <th>ค่าธุรกรรมบัตรเครดิต</th>
                                <th>การใช้เหรียญ</th>
                                <th>รายได้ของร้านค้า paynow</th>
                                <th>รายได้ของร้านค้า pay@store</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach($bookingItem as $_item){
                            $service = \App\Service::where('id_service',$_item->id_service)->first();
                            $store = \App\Store::where('id_store',$service->id_store)->first();
                            $com = \App\StoreComission::where('id_store',$_item->id_store)->first();

                        
                            /////check pay
                            if($_item->payment == 'now'){
                                    $pay_now = 'Y';
                                    $pay_store = '';
                                
                            }else if($_item->payment == 'store'){
                                $pay_store = 'Y';
                                $pay_now = '';
                            }

                            //////paymeny
                            if($_item->method  ==  'tranfer'){
                                $method = 'โอนเงินผ่านธนาคาร';
                            }else if($_item->method  ==  'credit'){
                                $method = 'เครดิต/วีซ่า';
                            }else if($_item->method  ==  'paypal'){
                                $method = 'paypal';
                            }else if($_item->method  ==  'interbanking'){
                                $method = 'interbanking';
                            }else{
                                $method = 'ชำระที่ร้าน';
                            }

                            $pricenow = $service->service_free-($service->service_free*0.01);
                            $pricecom = $_item->total*($com->commision/100);

                            
                            if($_item->payment == 'now'){
                                $result_now = number_format($_item->price - $pricecom);
                                $result_store = '';
                            }else if($_item->payment == 'store'){
                                $result_store = number_format($_item->price - $pricecom);
                                $result_now = '';
                            }

                        echo     '<tr>
                                    <td>'.$store->id_store.'</td>
                                    <td>'.$store->store_name_th.'</td>
                                    <td>'.substr($store->id_store,6,7).'</td>
                                    <td>'.$store->store_email.'</td>
                                    <td>'.$store->store_phone.'</td>
                                    <td>'.$pay_now.'</td>
                                    <td>'.$pay_store.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$_item->booking_date.'</td>
                                    <td>'.$service->service_name_th.'</td>
                                    <td>'.number_format($pricenow).'</td>
                                    <td>'.number_format($service->service_price).'</td>
                                    <td>'.number_format($_item->total).'</td>
                                    <td>'.$_item->code.'</td>
                                    <td>% ส่วนลด</td>
                                    <td>% BTB ลดให้ลูกค้า</td>
                                    <td>% ร้านค้าร่วมลด</td>
                                    <td>ร้านค้าร่วมลด</td>
                                    <td>'.$com->commision.' %</td>
                                    <td>'.$pricecom.'</td>
                                    <td>'.$method.'</td>
                                    <td>-</td>
                                    <td>'.$_item->coin.'</td>
                                    <td>'.$result_now.'</td>
                                    <td>'.$result_store.'</td>
                                </tr>';
                        }
                        echo             '</tbody>
                        </table>';

        }
            /////endif
/////////////////////////////
        }else{
            if($request->report == 1){
                $customer = \App\CustomerLogin::join('customer','customer_login.customer_id','=','customer.customer_id')->get(); ////แก้ไข login มี logtime
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Customer Id</th>
                                        <th>IP</th>
                                        <th>Firstname</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Search keyword</th>
                                        <th>Login Date & Time</th>
                                        <th>Login Duration</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        foreach($customer as $_item){
              
                            $cus_keyword = DB::table('customer_keyword')->where('customer_id',$_item->customer_id)->get();
                    
                echo                 '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->ip.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->birthday.'</td>
                                        <td>';
                                        foreach( $cus_keyword  as $key){
                                            echo $key->keyword.', ';
                                        }
                echo                        '</td>
                                        <td>'.$_item->created_at.'</td>
                                        <td>'.$_item->duration.'</td>
                                    </tr>';
                        }
                echo             '</thead>
                            </table>';
    
            }else if($request->report == 2){
                $store = \App\Store::join('service','store.id_store','=','service.id_store')->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>GP</th>
                                    <th>Credit card fee</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>วันที่สร้างบริการ/edit</th>
                                    <th>วันที่ร้านค้าเข้าระบบล่าสุด</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();
                        $login = \App\StoreLogin::where('id_store',$_item->id_store)->orderby('created_at','desc')->first();

                        if(!empty($type1)){
                            $_type1 = $type1->type_th;
                        }else{
                            $_type1 = '-';
                        }

                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }

                        if(!empty($login)){
                            $_login = $login->created_at;
                        }else{
                            $_login = '-';
                        }

                        $pricenow = $_item->service_free-($_item->service_free*0.01);
                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$com->commision.' %</td>
                                    <td></td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$_type1.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.$pricenow.'</td>
                                    <td>-</td>
                                    <td>'.$_item->updated_at.'</td>
                                    <td>'.$_login.'</td>
                                </tr>';
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 3){
    
                $store = \App\Store::join('service','store.id_store','=','service.id_store')
                                    ->join('customer_booking_item','service.id_service','=','customer_booking_item.id_service')->get();
                echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Store Id</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>ที่อยู่</th>
                                    <th>ชื่อบริการ</th>
                                    <th>บริการหลัก</th>
                                    <th>บริการย่อย 1</th>
                                    <th>บริการย่อย 2</th>
                                    <th>บริการย่อย 3</th>
                                    <th>วันที่ทำรายการ</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ช่องทางการชำระเงิน</th>
                                    <th>pay date</th>
                                    <th>ราคาปกติ</th>
                                    <th>ราคา pay at store</th>
                                    <th>ราคา pay now</th>
                                    <th>ราคา book now pay later</th>
                                    <th>ราคาที่ชำระจริง</th>
                                    <th>วันที่ชำระจริง</th>
                                    <th>code ส่วนลด</th>
                                    <th>ส่วนลด</th>
                                    <th>จำนวนเหรียญที่ใช้</th>
                                    <th>รายได้จากค่าบริการจริง</th>
                                    <th>total commision</th>
                                </tr>
                            </thead>
                            <tbody>';
                    foreach($store as $_item){
                        $com = \App\StoreComission::where('id_store',$_item->id_store)->first();
                        $main = \App\Mainmenu::where('menu_id',$_item->category_id)->first();
                        $type1 = \App\Type::where('type_id',$_item->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$_item->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$_item->subcategory3_id)->first();
                        
                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                        $booking = \App\Booking::where('booking_id',$_item->booking_id)->first();

                        if(!empty($booking->booking_date)){
                            $date = $booking->booking_date;
                            $method = $booking->method;
                        }else{
                            $date = '';
                            $method = '';
                        }

        
                        $pricenow = $_item->service_free-($_item->service_free*($com->paynow/100));

                echo             '<tr>
                                    <td>'.$_item->id_store.'</td>
                                    <td>'.$_item->store_name_th.'</td>
                                    <td>'.$_item->store_address.'</td>
                                    <td>'.$_item->service_name_th.'</td>
                                    <td>'.$main->menu_th.'</td>
                                    <td>'.$type1->type_th.'</td>
                                    <td>'.$_type2.'</td>
                                    <td>'.$_type3.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$date.'</td>
                                    <td>'. $method .'</td>
                                    <td>-</td>
                                    <td>'.$_item->service_price.'</td>
                                    <td>'.$_item->service_free.'</td>
                                    <td>'.number_format($pricenow).'</td>
                                    <td>-</td>
                                    <td></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>'.$this->Commission($_item->service_price,$_item->commision_store).'</td>
                                </tr>';
                    }
                echo             '</tbody>
                        </table>';
    
            }else if($request->report == 4){
                $review = \App\Customer::join('customer_booking','customer.customer_id','=','customer_booking.customer_id') 
                                        ->join('customer_booking_item','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                        ->join('customer_review','customer_review.customer_id','=','customer_booking.customer_id')->get();
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>telephone</th>
                                    <th>บริการทที่ใช้</th>
                                    <th>วันที่ไปใช้บริการ</th>
                                    <th>ชื่อร้าน</th>
                                    <th>จำนวนเงินที่ลูกค้าจ่ายจริง</th>
                                    <th>ข้อความที่ลูกค้ารีวิว</th>
                                    <th>วันที่รีวิว</th>
                                    <th>คะแนนบรรยากาศ</th>
                                    <th>คะแนนความสะอาด</th>
                                    <th>คะแนนพนักงาน</th>
                                    <th>คะแนนความคุ้มค่า</th>
                                    <th>ข้อความที่ตอบกลับของร้านค้า</th>
                                    <th>วันที่ตอบกลับ</th>
                                </tr>
                            </thead>
                            <tbody>';
                        foreach($review as $_item){
                        $service = \App\Service::where('id_service',$_item->id_service)->first();
                        $store = \App\Store::where('id_store',$_item->id_store)->first();
    
                        $main = \App\Mainmenu::where('menu_id',$service->category_id)->first();
                        $type1 = \App\Type::where('type_id',$service->subcategory1_id)->first();
                        $type2 = \App\SubType::where('subtype_id',$service->subcategory2_id)->first();
                        $type3 = \App\SubSubType::where('subsubtype_id',$service->subcategory3_id)->first();
                        if(!empty($type2)){
                            $_type2 = $type2->subtype_th;
                        }else{
                            $_type2 = '-';
                        }
    
                        if(!empty($type3)){
                            $_type3 = $type3->subsubtype_th;
                        }else{
                            $_type3 = '-';
                        }
    
                        
    
    
                        $pricenow = $_item->service_free-($_item->service_free*0.01);
                        echo     '<tr>
                                    <td>'.$_item->customer_id.'</td>
                                    <td>'.$_item->name.'</td>
                                    <td>'.$_item->lastname.'</td>
                                    <td>'.$_item->lastname.'</td>
                                    <td>'.$type1->type_name.'</td>
                                    <td>'.$_item->boooking_date.'</td>
                                    <td>'.$store->store_name_th.'</td>
                                    <td>'.$_item->total.'</td>
                                    <td>'.$_item->text.'</td>
                                    <td>'.$_item->created_at.'</td>
                                    <td>'.$_item->score_relax.'</td>
                                    <td>'.$_item->score_clean.'</td>
                                    <td>'.$_item->score_emp.'</td>
                                    <td>'.$_item->score_value.'</td>
                                    <td>'.$_item->reply.'</td>
                                    <td>'.$_item->updated_at.'</td>
                                </tr>';
                        }
                        echo             '</tbody>
                        </table>';
    
            }else if($request->report == 5){
    
                $review = \App\Customer::get();
                            echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>user Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>telephone</th>
                                    <th>Dare of birth</th>
                                </tr>
                            </thead>
                            <tbody>';
                            foreach($review as $_item){
    
                            echo     '<tr>
                                        <td>'.$_item->customer_id.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->telephone.'</td>
                                        <td>'.$_item->birthday.'</td>
                                      </tr>';
                            }
                            echo             '</tbody>
                            </table>';
    
            }else if($request->report == 6){  /////รายงานคอมมิชชั่น
                            $bookingItem = \App\BookingItem::join('customer_booking','customer_booking.booking_id','=','customer_booking_item.booking_id')
                                                            ->where('status_process',1)
                                                            ->get();
                            echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>รหัสร้านค้า</th>
                                    <th>ชื่อร้านค้า</th>
                                    <th>สาขา</th>
                                    <th>อีเมล</th>
                                    <th>โทรศัพท์</th>
                                    <th>pay now</th>
                                    <th>pay@store</th>
                                    <th>วันที่ทำรายการในระบบ</th>
                                    <th>วันที่เข้ารับบริการ</th>
                                    <th>ชื่อบริการ</th>
                                    <th>ราคาโปร pay now</th>
                                    <th>ราคาโปร pay@store</th>
                                    <th>ลูกค้าจ่ายจริง</th>
                                    <th>รหัสส่วนลด</th>
                                    <th>% ส่วนลด</th>
                                    <th>% BTB ลดให้ลูกค้า</th>
                                    <th>% ร้านค้าร่วมลด</th>
                                    <th>ร้านค้าร่วมลด</th>
                                    <th>% คอมมิชชั่น</th>
                                    <th>ค่าคอมมิชชั่น</th>
                                    <th>วิธีจ่าย</th>
                                    <th>ค่าธุรกรรมบัตรเครดิต</th>
                                    <th>การใช้เหรียญ</th>
                                    <th>รายได้ของร้านค้า paynow</th>
                                    <th>รายได้ของร้านค้า pay@store</th>
                                </tr>
                            </thead>
                            <tbody>';
                            foreach($bookingItem as $_item){
                                $service = \App\Service::where('id_service',$_item->id_service)->first();
                                $store = \App\Store::where('id_store',$service->id_store)->first();
                                $com = \App\StoreComission::where('id_store',$_item->id_store)->first();

                              
                                /////check pay
                                if($_item->payment == 'now'){
                                        $pay_now = 'Y';
                                        $pay_store = '';
                                     
                                }else if($_item->payment == 'store'){
                                    $pay_store = 'Y';
                                    $pay_now = '';
                                }

                                //////paymeny
                                if($_item->method  ==  'tranfer'){
                                    $method = 'โอนเงินผ่านธนาคาร';
                                }else if($_item->method  ==  'credit'){
                                    $method = 'เครดิต/วีซ่า';
                                }else if($_item->method  ==  'paypal'){
                                    $method = 'paypal';
                                }else if($_item->method  ==  'interbanking'){
                                    $method = 'interbanking';
                                }else{
                                    $method = 'ชำระที่ร้าน';
                                }

                                $pricenow = $service->service_free-($service->service_free*0.01);
                                $pricecom = $_item->total*($com->commision/100);

                                
                                if($_item->payment == 'now'){
                                    $result_now = number_format($_item->price - $pricecom);
                                    $result_store = '';
                                }else if($_item->payment == 'store'){
                                    $result_store = number_format($_item->price - $pricecom);
                                    $result_now = '';
                                }

                            echo     '<tr>
                                        <td>'.$store->id_store.'</td>
                                        <td>'.$store->store_name_th.'</td>
                                        <td>'.substr($store->id_store,6,7).'</td>
                                        <td>'.$store->store_email.'</td>
                                        <td>'.$store->store_phone.'</td>
                                        <td>'.$pay_now.'</td>
                                        <td>'.$pay_store.'</td>
                                        <td>'.$_item->created_at.'</td>
                                        <td>'.$_item->booking_date.'</td>
                                        <td>'.$service->service_name_th.'</td>
                                        <td>'.number_format($pricenow).'</td>
                                        <td>'.number_format($service->service_price).'</td>
                                        <td>'.number_format($_item->total).'</td>
                                        <td>'.$_item->code.'</td>
                                        <td>% ส่วนลด</td>
                                        <td>% BTB ลดให้ลูกค้า</td>
                                        <td>% ร้านค้าร่วมลด</td>
                                        <td>ร้านค้าร่วมลด</td>
                                        <td>'.$com->commision.' %</td>
                                        <td>'.$pricecom.'</td>
                                        <td>'.$method.'</td>
                                        <td>-</td>
                                        <td>'.$_item->coin.'</td>
                                        <td>'.$result_now.'</td>
                                        <td>'.$result_store.'</td>
                                    </tr>';
                            }
                            echo             '</tbody>
                            </table>';
    
            }
            /////endif
        }

    }


    /////////////////////////////////////calculate
    public function Price($price,$code){

        $sql = \App\Coupon::where('code_id',$code)->first();

        $vat = $price*0.07;
        
        if($sql != null ){
            if($sql->method == 'price'){
                $discount_code = $price - $sql->price;
            }else{
                $discount_code = $price - ($price*($sql->percent / 100));
            }
          
        }
        
    }


        /////////////////////////////////////calculate
        public function Commission($price,$com){

            $result = $price*($com/100);
            return $result;
            
            
        }

}
