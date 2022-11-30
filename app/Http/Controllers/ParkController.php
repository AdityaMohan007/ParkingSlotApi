<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function bookingForm()
    {
        return view('bookingForm');
    }

    public function bookingDetails()
    {
        return view('bookingDetails');
    }

}
