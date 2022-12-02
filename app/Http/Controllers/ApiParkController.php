<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Slot;
use Illuminate\Http\Request;

class ApiParkController extends Controller
{
    public function bookingForm()
    {
        return Booking::all();
        // return view('bookingForm');
    }
    public function bookingFormPost(Request $request)
    {
        $book = new Booking();
        $book->customer_name = $request->customer_name;
        $book->driving_license = $request->driving_license;
        $book->vehicle_number = $request->vehicle_number;
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
        $book->slot_id = $request->slot_number;
        // After filling the slot, it is deleted from the slot table so it's not filled again
        // $slot = Slot::find($request->slot_number);
        // $slot->delete();

        // To get random strings to generate appointment number
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i=0; $i<3; $i++)
        {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $book->appointment_no = $book->slot->name.$randomString;

        $hours = $request->hours;
        if ($hours == 1) {
            $parkingFee = 5;
        }
        if ($hours == 2) {
            $parkingFee = 8;
        }
        if ($hours == 3) {
            $parkingFee = 10;
        }
        // Any additional hour after 3 hours is supposed to be incremented by Rs.5 along with Rs.10
        if ($hours > 3) {
            $diff = $hours - 3;
            $parkingFee = 10 + ($diff * 5);
        }
        $book->parking_fee = $parkingFee;
        $book->save();

        return Booking::all()->sortByDesc('id')->take(1);
        // return ["Result" => "Parking Slot Booked"];
    }

    public function bookingDetails()
    {
        $details = Booking::all()->sortByDesc('id')->take(1);
        // $details = Booking::all()->sortBy('id', 'DESC');


        return view('bookingDetails', compact('details'));
    }
}
