<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomtypeController extends Controller
{
    
    public function index ()
    {
        $room_types=RoomType::all();

        return view('dashboard.room_type_management.index')->with('room_types',$room_types);
    }

    public function store(Request $request)
    {   
        $data =$request->validate(
            [
            'name'=>['required','min:1'],
            'cost'=>['required','min:1'],
          
            ]
        );

        $room_group = new RoomType;

        
        $room_group->name = $request->input('name');
        $room_group->cost = $request->input('cost');
    
      
        $room_group->save();

        return redirect('dash/room_type_management')->with('success','Room Group created');
    }

    public function update(Request $request, string $id)

    {
        $data =$request->validate(
            [
            'name'=>['required','min:1'],
            'cost'=>['required','min:1'],
          
            ]
        );

        $room_group =RoomType::find($id);
        $room_group->name = $request->input('name');
        $room_group->cost = $request->input('cost');
        $room_group->save();

        return redirect('dash/room_type_management')->with('success','Room Group Updated');
    }

    public function destroy(Request $request, string $id)
    {

        $room_group =RoomType::find($id);
        $room_group->delete();
        return redirect('/dash/room_type_management')->with('success','Room Group Deleted');
    }
}
