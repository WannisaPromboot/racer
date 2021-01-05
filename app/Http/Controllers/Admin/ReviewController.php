<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Review;
use Session;

class ReviewController extends Controller
{
    public function ReviewContent(Request $request){
        $data = array(
            'products'   =>  Product::orderby('id_category')->get() 
        );
        return view('Admin.review.review-content',$data);
    }

    public function ReviewDetail(Request $request,$id){
        $data = array(
            'all'    =>  Review::where('product_id',$id)->get()
        );

        return view('Admin.review.review-detail',$data);
    }

    public function comment(Request $request){

       // dd($request->all());
            $newReview = New Review;
            $newReview->customer_id  = Session::get('customer_id');
            $newReview->product_id  = $request->product_id;
            $newReview->score  = $request->rate;
            $newReview->text  = $request->text;
            $newReview->save();

            return redirect()->back()->with('success','ส่งข้อมูลแสดงความคิดเห็นเรียบร้อย');
    }

    public function changedisplay(Request $request){
        $review = \App\Review::where('id',$request->id)->first();
        $review->display = $request->check;
        $review->save();
    }
}
