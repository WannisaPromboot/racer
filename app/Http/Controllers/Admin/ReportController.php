<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Frontend\GetdataController;
use DB;
use App\Customer;
use App\Order;
use App\Product;
use App\OrderItem;
use PDF;

class ReportController extends Controller
{
    public function ReportContent(){
      
        return view('Admin.report.report-content');
    }

    public function GetReport(Request $request){
        
            if($request->report == 1){
                $i =1;
                $stat = '';
                $customer = OrderItem::whereBetween(DB::raw('DATE(created_at)'), [$request->datestart, $request->dateend])
                                    ->select(DB::raw('COUNT(product_id) as count'),'product_id','created_at')
                                    ->groupBy('product_id')->get();
                if(count($customer)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน(ชิ้น)</th>
                                            <th>ราคารวม(บาท)</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                foreach($customer as $_item){
                                    $pro = Product::where('id_product',$_item->product_id)->first();
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$pro->product_name_th.'</td>
                                        <td>'.$_item->count.'</td>
                                        <td>'.number_format($_item->count*$pro->product_normal_price).'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo     '</tbody>
                        </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 2){
                // dd($request->all());
                $i =1;
                $sql = Order::where(DB::raw('DATE(created_at)'), $request->dateselect)->get();
                // dd($sql);
                if(count($sql)>0){
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>รายการสินค้า</th>
                                            <th>ชื่อ-นามสกุลลูกค้า</th>
                                            <th>อีเมลลูกค้า</th>
                                            <th>เบอร์โทรศัพท์ลูกค้า</th>
                                            <th>วันที่ซื้อ</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    foreach($sql as $_item){
                                        $cus = Customer::where('customer_id',$_item->customer_id)->first();
                                        $ori = OrderItem::where('id_order',$_item->id_order)->get();
                            echo       '<tr>
                                            <td>'.$i.'</td>
                                            <td style="float:left">';
                                                foreach($ori as $item){
                                                    $pro = Product::where('id_product',$item->product_id)->first();
                                                    echo '<br>'.$pro->product_name_th;
                                                }
                                            echo '</td> ';
                                    echo    '<td>'.$cus->name.'   '.$cus->lastname.'</td>
                                            <td>'.$cus->email.'</td>
                                            <td>'.$cus->phone.'</td>
                                            <td>'.$_item->created_at.'</td>
                                        </tr>';
                                        $i =$i+1;
                                    }
                                                    
                        echo     '</tbody>
                                </table>';
                }else{
                    return 1;
                }

            }elseif($request->report == 3){
                $i =1;
                $sql = \App\ProductView::orderby('view','desc')->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>สินค้า</th>
                                        <th>หมวดหมู่</th>
                                        <th>ผุ้ชม</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                                    $product = \App\Product::where('id_product',$_item->id_product)->first();
                                    $cate = \App\Category::where('id_category',$product->id_category)->first();
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$product->product_name_th.'</td>
                                        <td>'.$cate->category_name_th.'</td>
                                        <td>'.number_format($_item->view).'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }else if($request->report == 4){
                $i =1;
                $sql = \App\Order::select(DB::raw('SUM(total) as sum'),'customer_id')
                                    ->where('status_process',1)
                                    ->orderby('sum','desc')
                                    ->groupby('customer_id')
                                    ->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ชื่อ - สกุล</th>
                                        <th>ยอดสั่งซื้อ</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){

                                    $cus = Customer::where('customer_id',$_item->customer_id)->first();
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$cus->name.'   '.$cus->lastname.'</td>
                                        <td>'.number_format($_item->sum).'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 5){
                $i =1;
                $customer = Customer::where(DB::raw('DATE(created_at)'), $request->dateselect)->get();
                if(count($customer)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>อีเมล</th>
                                            <th>วันที่สมัคร</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>';
                                foreach($customer as $_item){
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->created_at.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo     '</tbody>
                        </table>';
                }else{
                    return 1;
                }
                   
            }else if($request->report == 6){
                $sql = \App\Product::where('product_display',0)->orderby('id_category')->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>สินค้า</th>
                                        <th>คำสั่งซื้อล่าสุด</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                                    $order  = \App\OrderItem::where('product_id',$_item->id_product)->Orderby('created_at','desc')->first();
                                    if(!empty($order)){
                                        $date = date_format(date_create($order->created_at),'Y-m-d');
                                        $effectiveDate = date('Y-m-d', strtotime("-".$request->dateselect." months", strtotime(date('Y-m-d'))));        
                                            if( $date <=  $effectiveDate ){
                                            echo        '<tr>
                                                            <td>'.$_item->product_name_th.'</td>
                                                            <td>'.$date.'</td>
                                                        </tr>';
                                            }
                                    }else{
                                            echo        '<tr>
                                                            <td>'.$_item->product_name_th.'</td>
                                                            <td>ไม่มีการสั่งซื้อ</td>
                                                        </tr>';
                                            
                                    }
                                   
                        
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }

            }elseif($request->report == 7){
                $i =1;
                $sql = \App\CustomerPage::select(DB::raw('count(id) as count'),'page')
                                    ->orderby('count','desc')
                                    ->groupby('page')
                                    ->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>หน้า</th>
                                        <th>จำนวน</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){

                                    $cus = Customer::where('customer_id',$_item->customer_id)->first();
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->page.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }else if($request->report == 9){
                $i =1;
                $sql = \App\CustomerDevice::all();
                if(count($sql)>0){
                    echo    '<table class="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>อุปกรณ์</th>
                                        <th>บราวเซอร์</th>
                                        <th>จำนวน</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->device.'</td>
                                        <td>'.$_item->browser.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 11){
                
                $i =1;
                $sql = Customer::whereMonth('birthday', $request->monthselect)->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>วันเกิด</th>
                                        <th>เบอร์โทรศัพท์ลูกค้า</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->name.'</td>
                                        <td>'.$_item->lastname.'</td>
                                        <td>'.$_item->email.'</td>
                                        <td>'.$_item->birthday.'</td>
                                        <td>'.$_item->phone.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 12){
                $effectiveDate = date('Y-m-d', strtotime("-".'1'." months", strtotime($request->dateselect)));    
                $sql = Order::whereBetween(DB::raw('DATE(updated_at)'), [$effectiveDate,date('Y-m-d')])->where('status_payment',0)->get();
                // dd($sql );    
                $i =1;
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>หมายเลขคำสั่งซื้อ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>วันที่ซื้อสินค้า</th> 
                                        </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                                    $cus = Customer::where('customer_id',$_item->customer_id)->first();
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->id_order.'</td>
                                        <td>'.$cus->name.'</td>
                                        <td>'.$cus->lastname.'</td>
                                        <td>'.$cus->email.'</td>
                                        <td>'.$_item->created_at.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }

            }elseif($request->report == 13){
                $effectiveDate = date('Y-m-d', strtotime("-".$request->dateselect." months", strtotime(date('Y-m-d'))));        
                $date = date_format(date_create($order->created_at),'Y-m-d');

                $sql = Customer::whereNotBetween(DB::raw('DATE(lastlogin)'), [$effectiveDate,date('Y-m-d')])->get();
                $i =1;
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>วันที่เข้าระบบล่าสุด</th> 
                                        </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                                    if( $sql->lastlogin <= $effectiveDate ){
                                        echo    '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$_item->name.'</td>
                                            <td>'.$_item->lastname.'</td>
                                            <td>'.$_item->email.'</td>
                                            <td>'.$_item->lastlogin.'</td>
                                        </tr>';
                                        $i =$i+1;
                                    }
                            }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }

                
            }elseif($request->report == 14){
                $i =1;
                $sql = \App\CustomerLogin::Orderby('count','Desc')->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>จำนวนครั้ง</th> 
                                        </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                                    $customer = \App\Customer::where('customer_id',$_item->customer_id)->first();
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$customer->name.'</td>
                                        <td>'.$customer->lastname.'</td>
                                        <td>'.$customer->email.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 15){
                $i =1;
                $sql = Order::select(DB::raw('count(*) as paycount, method'))
                                ->groupBy('method')
                                ->orderBy('paycount','DESC')
                                ->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>ประเภทการชำระเงิน</th>
                                        <th>จำนวน</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo        '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->method.'</td>
                                        <td>'.$_item->paycount.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo    '</tbody>
                    </table>';
                }else{
                    return 1;
                }
            }elseif($request->report == 17){
                $i =1;
                $sql = DB::Table('guest')->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>IP</th>
                                        <th>วันที่เข้าเว็บไซต์</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->guest_ip.'</td>
                                    
                                        <td>'.$_item->created_at.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                                
                    echo    '</tbody>
                        </table>';
                }else{
                    return 1;
                }
                
            }elseif($request->report == 18){
                $i =1;
                $sql = Order::leftJoin('customer','product_order.customer_id','=','customer.customer_id')
                            ->select(DB::raw('COUNT(product_order.customer_id) as count'),'age')->groupBy('age')->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>อายุ</th>
                                        <th>จำนวนรวมที่ซื้อสินค้า</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->age.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                                
                    echo    '</tbody>
                        </table>';
                }else{
                    return 1;
                }
                
            }elseif($request->report == 20){
                $i =1;
                $sql = Customer::select(DB::raw('COUNT(age) as count'),'age')->groupBy('age')->where('age','!=',NULL)->get();
                $sql1 = Customer::where('age','=',NULL)->get();
                if(count($sql)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>อายุ</th>
                                        <th>จำนวนรวม</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($sql as $_item){
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$_item->age.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                if(count($sql1)>0){
                                    echo    '<tr>
                                                <td>'.$i.'</td>
                                                <td>ไม่ระบุ</td>
                                                <td>'.count($sql1).'</td>
                                            </tr>';
                                }
                                                
                    echo    '</tbody>
                        </table>';
                }else{
                    return 1;
                }
                
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

    public function exportPDF(){
        $data = [];
        $pdf = PDF::loadView('Admin.report.device_chart', $data);
        return $pdf->download('customer_device.pdf');

    }

}
