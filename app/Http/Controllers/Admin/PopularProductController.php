<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Popular;
use Session;

class PopularProductController extends Controller
{
    public function popularContent(){

        $data = array(
            'category'  => Category::orderby('sort','asc')->get(),
        );
        return view('Admin.popular.popular-content',$data);
    }

    public function Editpopular($id){
        
        $data = array(
            'item'          => Category::where('id_category',$id)->first(),
            'products'      => Product::where('id_category',$id)->get(),
            'id'            => $id
        );
        return view('Admin.popular.popular-edit',$data);
    }

    public function selectproduct(Request $request){
        $product = Popular::where('id_product',$request->product)->where('id_category',$request->category)->first();
        $all = Popular::where('id_category',$request->category)->get();

        if(count($all) < 10){
            if(empty($product)){
                $NewProduct  = New Popular;
                $NewProduct->id_product  =  $request->product;
                $NewProduct->id_category  =  $request->category;
                $NewProduct->save();    
            }
            $status = 1;
        }else{
            $status = 0;
        }

         return  $status;
        
    }

    public function removeproduct(Request $request){
       // dd($request->all());
        $product = Popular::find($request->value);
        $product->delete();
     
    }

    public function viewpopular(Request $request){
        $all = Popular::where('id_category',$request->id)->get();

        $html = '';
        $i = 1 ;

        $html .= '<table class="table">
                    <tr>
                        <th>#</th>
                        <th>ชื่อสินค้า</th>
                        <th>รูปภาพ</th>
                    </tr>';
                    foreach ($all as $item){
                         $_product = \App\Product::where('id_product',$item->id_product)->first();
                        $html .=    '<tr>
                            <td>'.$i.'</td>
                            <td>'.$_product->product_name_th.'</td>
                            <td>
                                <img src="'.url('storage/app/'.$_product->product_img.'').'" width="50px">
                            </td>
                        
                    </tr>';
                    $i++; 
                    }                    
        $html .=     '</table>';

        return $html;

    }

    public function changedisplaypopular(Request $request){
            $update = \App\Category::where('id_category',$request->id)->first();
            $update->status = $request->check;
            $update->save();
    }

}
