<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\Room;
use App\Models\RoomType;


class ProcessController extends Controller
{


    public function index(Request $request)
    {

 
        $data =$request->validate(
            [
            'guest'=>['required','min:1'],
            'room_price'=>['required','min:1'],
            'custom_period'=>['required','min:1'],

            ]
        );

      


  
   
        //count guest in one room
        $number_of_guest = count($request->input('guest', []));
        //check room price chosen
        $room_price=$request->input('room_price');

        $custom_price=$request->input('custom_period');
        $stay_price=$custom_price*$room_price;

                    if($number_of_guest>1){
                        $final_price=$number_of_guest -1;
                        $final_price=$final_price * 25000 ;
                        $total_price=$final_price +$stay_price;
                    
                    }else{
                        $total_price=$room_price *$custom_price;

                    }

        $choosen_price_rooms = Room::where('room_type', $room_price)->where('status', 'available')->get();
        $period_to_stay=$request->input('custom_period');
        $guest_id=$request->input('guest',[]);
 


       
        
      
    
    //return print_r($guest_name) ;
     //  return $request;
        //return print_r($total_price.$choosen_price_rooms.$number_of_guest.$period_to_stay.$guest_id);
        return view('dashboard.process.index')->with('total_price',$total_price)->with('choosen_price_rooms',$choosen_price_rooms)->with('number_of_guest',$number_of_guest)->with('period_to_stay',$period_to_stay)->with('guest_id',$guest_id)->with('room_price',$room_price);

    }


    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'guest_id'=>['required'],
            'room_no'=>['required'],
            'number_of_guest'=>['required'],
            'total_price'=>['required'],
            'period_to_stay'=>['required'],
            'room_price'=>['required'],
            'check_in_date'=>['required'],
            'check_out_date'=>['required'],
            
          
            ]
        );

          
            $reservation=new Reservation;
            $reservation->guest_id=$request->input('guest_id');
            $reservation->room_id=$request->input('room_no');
            $reservation->number_of_guests=$request->input('number_of_guest');
            $reservation->total_price=$request->input('total_price');
            $reservation->period_to_stay=$request->input('period_to_stay');
            $reservation->room_price=$request->input('room_price');              
            $reservation->check_in_date=$request->input('check_in_date');              
            $reservation->check_out_date=$request->input('check_out_date');
            $reservation->save();

            $room = Room::find($reservation->room_id);

            // Check if the room exists
            if ($room) {
                $room->status = 'occupied';
                $room->save(); // Note the parentheses here
            } else {
                // Handle the case where the room is not found
                return redirect('dash/reservation_management')->with('error', 'Room not found');
            }

            return redirect('dash/reservation_management')->with('success','Reservation Info Created');
    }


   
}
