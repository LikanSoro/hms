<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class bookingController extends Controller
{
    public function storeBooking(Request $request){
        $booking = booking::create($request->all());
        return $booking;
    }

    public function getBooking(){
        $bookings = booking::all();
        //if you want to get contacts on where condition use below code
        //$contacts = Contact::Where('tenant_id', "1")->get();
        return view('listBooking', compact('booking'));
        }
}
