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
            if($request->report == 1){
                $i =1;
                // dd((date_create($request->datestart)));
                $stat = '';
                $customer = OrderItem::whereBetween(DB::raw('DATE(created_at)'), [$request->datestart, $request->dateend])
                                    ->select(DB::raw('COUNT(product_id) as count'),'product_id','created_at')
                                    ->groupBy('product_id')->get();
                // dd($customer);
                if(count($customer)>0){
                    echo    '<table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน(ชิ้น)</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                foreach($customer as $_item){
                                    $pro = Product::where('id_product',$_item->product_id)->first();
                        echo       '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$pro->product_name_th.'</td>
                                        <td>'.$_item->count.'</td>
                                    </tr>';
                                    $i =$i+1;
                                }
                                            
                    echo     '</tbody>
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
                                            <th>ชื่อ-นามสกุลลูกค้า</th>
                                            <th>อีเมลลูกค้า</th>
                                            <th>เบอร์โทรศัพท์ลูกค้า</th>
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
                                            <td>'.$cus->email.'</td>
                                            <td>'.$cus->phone.'</td>
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

}
