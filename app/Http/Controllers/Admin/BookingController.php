<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function detailbooking($id){
        $data  = array(
            'booking'   => \App\Booking::where('booking_id',$id)->first(),
        );

        return view('Admin.detail.detail-booking',$data);
    }
}
