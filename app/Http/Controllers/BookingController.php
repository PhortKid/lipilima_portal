<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings=Booking::where('is_marked', 'no')->orderBy('created_at', 'desc')->get();
        return view('dashboard.booking_management.index')->with('bookings',$bookings);
    }


    public function update(Request $request, string $id)
    {


        $book=Booking::find($id);
        $book->is_marked="yes";
        $book->save();

        return redirect('dash/booking_management')->with('success','Marked');
    }




}
