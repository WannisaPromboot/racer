<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Frontend\GetdataController;
use DB;
use App\Customer;
use App\Order;
use App\OrderItem;
use PDF;

class ReportController extends Controller
{
    public function ReportContent(){
        // $sql = '';
        // if($id==5){
        //     $sql = Customer::orderBy('created_at','DESC')->get();
        // }elseif($id==11){
        //     $sql = Customer::orderBy('birthday','DESC')->get();

        // }
        // $data = array(
        //     'data'   => $sql,
        // );
        return view('Admin.report.report-content');
    }

    public function GetReport(Request $request){
            if($request->report == 5){
                $i =1;
                $customer = Customer::where('created_at','like','%'.$request->dateselect.'%')->get();
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
               
    
            }elseif($request->report == 2){
                // dd($request->all());
                $i =1;
                $sql = Order::where('created_at','like','%'.$request->dateselect.'%')->get();
                // dd($sql);
                if(count($sql)>0){
                        echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อ-นามสกุล ลูกค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>วันที่ซื้อ</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    foreach($sql as $_item){
                                        $cus = Customer::where('customer_id',$_item->customer_id)->first();
                                        $pro = OrderItem::leftJoin('product','product_order_item.product_id','=','product.id_product')->where('id_order',$_item->id_order)->first();
                            echo       '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$cus->name.'   '.$cus->lastname.'</td>
                                            <td>'.$pro->product_name_th.'</td>
                                            <td>'.$_item->created_at.'</td>
                                            <td>'.$_item->total.'</td>
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
                                    </tr>';
                                    $i =$i+1;
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

        //return view('Admin.report.device_chart');
    }

}
