<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\Room;
use App\Models\RoomType;


class ReservationManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room_types=RoomType::all();
        $rooms=Room::all();
        $guests=Guest::all();
        $reservations=Reservation::all();


        return view('dashboard.reservation_management.index')->with('reservations',$reservations)->with('guests',$guests)->with('rooms',$rooms)->with('room_types',$room_types);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'guest_id'=>['required'],
            'room_id'=>['required'],
            'number_of_guests'=>['required'],
            'total_price'=>['required'],
            'period_to_stay'=>['required'],
            'room_price'=>['required'],
            'check_in_date'=>['required'],
            'check_out_date'=>['required'],
            
          
            ]
        );

           /*

            $reservation->guest_id=$request->input('guest_id');
            $reservation->room_id=$request->input('room_id');
            $reservation->number_of_guests=$request->input('number_of_guests');
            $reservation->total_price=$request->input('total_price');
            $reservation->period_to_stay=$request->input('period_to_stay');
            $reservation->room_price=$request->input('room_price');              
            $reservation->check_in_date=$request->input('check_in_date');              
            $reservation->check_out_date=$request->input('check_out_date');

            */

            return redirect('dash/reservation_management')->with('success','Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect('/dash/reservation_management')->with('success','Reservation info Deleted');
    }

   
}
