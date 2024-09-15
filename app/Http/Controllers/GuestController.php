<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guests=Guest::all();

        return view('dashboard.guests_management.index')->with('guests',$guests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'firstname'=>['required','min:2'],
            'middlename'=>['required','min:2','nullable'],
            'lastname'=>['required','min:2'],
            'booking_type'=>['required','min:2'],
            'country'=>['required','min:1'],
            'address'=>['required','min:2'],
            'email'=>['required','email','nullable'],
            'phone_number'=>['min:9','max:13','nullable'],
            'next_of_kin_name'=>['min:2','nullable'], 
            'ext_of_kin_phone_number'=>['min:2','nullable'],
            'gender'=>['required','min:1'],
            'purpose_of_visit'=>['required','min:2'],
            'id_type'=>['required','min:2'],
            'id_number'=>['required','min:2'],
            'id_issuing_authority'=>['required','min:2'],
            'id_expiration_date'=>['required','min:2'],
            'arriving_from'=>['required','min:2'],
            'occupation'=>['required','min:2'],
            'tribe'=>['required','min:2'],
           
          
            ]
        );

        $guest=new Guest;
        $guest->firstname=$request->input('firstname');
        $guest->middlename=$request->input('middlename');
        $guest->lastname=$request->input('lastname');
        $guest->booking_type=$request->input('booking_type');
        $guest->country=$request->input('country');
        $guest->address=$request->input('address');
        $guest->email=$request->input('email');
        $guest->phone_number=$request->input('phone_number');
       
        $guest->next_of_kin_name=$request->input('next_of_kin_name');
        $guest->next_of_kin_phone_number=$request->input('next_of_kin_phone_number');
        $guest->gender=$request->input('gender');

        $guest->purpose_of_visit=$request->input('purpose_of_visit');
        $guest->id_type=$request->input('id_type');
        $guest->id_number=$request->input('id_number');
        $guest->id_issuing_authority=$request->input('id_issuing_authority');
        $guest->id_expiration_date=$request->input('id_expiration_date');
        $guest->arriving_from=$request->input('arriving_from');
        $guest->occupation=$request->input('occupation');
        $guest->tribe=$request->input('tribe');
        $guest->save();




        return redirect('dash/guest_management')->with('success','Guest Created');

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
            'firstname'=>['required','min:2'],
            'middlename'=>['required','min:2','nullable'],
            'lastname'=>['required','min:2'],
            'booking_type'=>['required','min:2'],
            'country'=>['required','min:1'],
            'address'=>['required','min:2'],
            'email'=>['required','email','nullable'],
            'phone_number'=>['min:9','max:13','nullable'],
            'next_of_kin_name'=>['min:2','nullable'], 
            'ext_of_kin_phone_number'=>['min:2','nullable'],
            'gender'=>['required','min:1'],
            'purpose_of_visit'=>['required','min:2'],
            'id_type'=>['required','min:2'],
            'id_number'=>['required','min:2'],
            'id_issuing_authority'=>['required','min:2'],
            'id_expiration_date'=>['required','min:2'],
            'arriving_from'=>['required','min:2'],
            'occupation'=>['required','min:2'],
            'tribe'=>['required','min:2'],
           
          
            ]
        );

        $guest=Guest::find($id);
        $guest->firstname=$request->input('firstname');
        $guest->middlename=$request->input('middlename');
        $guest->lastname=$request->input('lastname');
        $guest->booking_type=$request->input('booking_type');
        $guest->country=$request->input('country');
        $guest->address=$request->input('address');
        $guest->email=$request->input('email');
        $guest->phone_number=$request->input('phone_number');
       
        $guest->next_of_kin_name=$request->input('next_of_kin_name');
        $guest->next_of_kin_phone_number=$request->input('next_of_kin_phone_number');
        $guest->gender=$request->input('gender');

        $guest->purpose_of_visit=$request->input('purpose_of_visit');
        $guest->id_type=$request->input('id_type');
        $guest->id_number=$request->input('id_number');
        $guest->id_issuing_authority=$request->input('id_issuing_authority');
        $guest->id_expiration_date=$request->input('id_expiration_date');
        $guest->arriving_from=$request->input('arriving_from');
        $guest->occupation=$request->input('occupation');
        $guest->tribe=$request->input('tribe');
        $guest->save();

        return redirect('dash/guest_management')->with('success','Guest Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        

        $guest=Guest::find($id);
        $guest->delete();

        return redirect('dash/guest_management')->with('success','Guest Deleted');
    }
}
