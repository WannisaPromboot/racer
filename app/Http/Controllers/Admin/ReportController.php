<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Frontend\GetdataController;
use DB;
use App\Customer;
use App\Order;

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
                $customer = Customer::where('created_at',$request->dateselect)->get();
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
                                        
                echo             '</tbody>
                            </table>';
    
            }elseif($request->report == 2){
                // dd($request->all());
                $i =1;
                $sql = Order::where('created_at',$request->dateselect)->get();
                // dd($sql);
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
                            $pro = OrderItem::where('id_order',$_item->id_order)->first();
                echo       '<tr>
                                <td>'.$i.'</td>
                                <td>'.$cus->name.'   '.$cus->lastname.'</td>
                                <td>'.$pro->product_name_th.'</td>
                                <td>'.$_item->created_at.'</td>
                                <td>'.$_item->total.'</td>
                            </tr>';
                            $i =$i+1;
                        }
                                        
                echo             '</tbody>
                            </table>';

            }elseif($request->report == 11){
                $i =1;
                $sql = Customer::whereMonth('birthday', $request->monthselect)->get();
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
                echo       '<tr>
                                <td>'.$i.'</td>
                                <td>'.$_item->name.'</td>
                                <td>'.$_item->lastname.'</td>
                                <td>'.$_item->email.'</td>
                                <td>'.$_item->birthday.'</td>
                            </tr>';
                            $i =$i+1;
                        }
                                        
                echo             '</tbody>
                            </table>';

            }elseif($request->report == 17){
                $i =1;
                $sql = DB::Table('guest')->get();
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
                                        
                echo             '</tbody>
                            </table>';
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
