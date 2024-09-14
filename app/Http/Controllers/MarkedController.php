<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class MarkedController extends Controller
{
        public function index()
        {
            $bookings=Booking::where('is_marked', 'yes')->orderBy('created_at', 'desc')->get();
            return view('dashboard.marked_booking.index')->with('bookings',$bookings);
        }
}
