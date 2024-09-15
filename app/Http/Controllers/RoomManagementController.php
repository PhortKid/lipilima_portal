<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use DB;

class RoomManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        $rooms=Room::all();
        $room_types=RoomType::all();

        return view('dashboard.rooms_management.index')->with('rooms',$rooms)->with('room_types',$room_types);
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
            'room_no'=>['required','min:1'],
            'status'=>['required','min:1'],
            'room_type'=>['required','min:1'],
            'description'=>['nullable','min:1'],
          
            ]
        );

        $room=new Room;
        $room->room_number=$request->input('room_no');
        $room->room_type=$request->input('room_type');

        if($request->input('room_type')=='standard'){
            $room->cost=$room_cost=60000;
        }else if($request->input('room_type')=='deluxe'){
            $room->cost=$room_cost=80000;
        }else if($request->input('room_type')=='executive'){
            $room->cost=$room_cost=1200000;
        }
        $room->status=$request->input('status');
        $room->description=$request->input('description');
        $room->save();

        return redirect('dash/rooms_management')->with('success','Room Created');

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
        $data =$request->validate(
            [
            'room_no'=>['required','min:1'],
            'status'=>['required','min:1'],
            'room_type'=>['required','min:1'],
            'description'=>['nullable','min:1'],
          
            ]
        );

        $room=Room::find($id);
        $room->room_number=$request->input('room_no');
        $room->room_type=$request->input('room_type');
          if($request->input('room_type')=='standard'){
            $room->cost=$room_cost=60000;
        }else if($request->input('room_type')=='deluxe'){
            $room->cost=$room_cost=80000;
        }else if($request->input('room_type')=='executive'){
            $room->cost=$room_cost=1200000;
        }
        $room->status=$request->input('status');
        $room->description=$request->input('description');
        $room->save();

        return redirect('dash/rooms_management')->with('success','Room Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room=Room::find($id);
        $room->delete();

        return redirect('dash/rooms_management')->with('success','Room Deleted');
    }

    public function report()
    {
        $room=Room::all();
        $room->delete();

        return redirect('dash/rooms_management')->with('success','Room Deleted');
    }
}
