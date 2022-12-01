<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function bookingForm()
    {
        return view('bookingForm');
    }
    public function bookingFormPost(Request $request)
    {
        $cust = new Customer();
        $cust->name = $request->customer_name;
        $cust->driving_license = $request->driving_license;
        $cust->vehicle_number = $request->vehicle_number;
        $cust->save();

        $book = new Booking();
        $book->date = $request->date;
        $book->start_time = $request->start_time;
        $book->hours = $request->hours;
        $TIME = $request->start_time + $request->hours;
        // This condition is given so the max military count 24 is not exceeded
        if ($TIME > 24)
        {
            $diff = $TIME - 24;
            $book->end_time = $diff;
        }
        else
        {
           $book->end_time = $request->start_time + $request->hours;
        }

        $book->slot_no = null;
        $book->appointment_no = null;

        // // fee is Rs.10 for 3 hours, Rs.5 for additional hours
        // $fee = 10;
        // $book->parking_fee =
        $book->customer_id = $cust->id;
        $book->save();
        // dd($book);
        return redirect(route('bookingDetails'));
    }

    public function bookingDetails()
    {
        $details = Booking::all()->sortByDesc('id')->take(1);
        // $details = Booking::all()->sortBy('id', 'DESC');


        return view('bookingDetails', compact('details'));
    }

}
