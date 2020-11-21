<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('Admin.home.home',);
    }

    public function BookingAll(){
        return view('Admin.home.booking-all');
    }
}
