<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeLipilima;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();

        return view('dashboard.users_management.index')->with('users',$users);
    }

    public function add(Request $request)
    {
        

        return $request;


        //view('dashboard.users_management.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 5;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'firstname'=>['required','min:2'],
            'middlename'=>['nullable','min:2'],
            'lastname'=>['required','min:2'],
            'phone_number'=>['required','min:9','max:13'],
            'email'=>['required','email'],
            'role'=>['required','min:2'],
            

          
            ]
        );

        
        $password= str()->random(6);
        //$password= fake()->randomNumber(6);

        $user=new User;
        $user->firstname=$request->input('firstname');
        $user->middlename=$request->input('middlename');
        $user->lastname=$request->input('lastname');
        $user->phone_number=$request->input('phone_number');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        $user->password=Hash::make($password);
        $user->save();

        Mail::to($user->email)->send(new WelcomeLipilima($user, $password));

        return redirect('dash/users_management')->with('success','User Created');

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
       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =$request->validate(
            [
            'firstname'=>['required','min:2'],
            'middlename'=>['nullable','min:2'],
            'lastname'=>['required','min:2'],
            'phone_number'=>['required','min:9','max:13'],
            'email'=>['required','email'],
            'role'=>['required','min:2'],
            //'password'=>['required','min:2'],

          
            ]
        );

        $user=User::find($id);
        $user->firstname=$request->input('firstname');
        $user->middlename=$request->input('middlename');
        $user->lastname=$request->input('lastname');
        $user->phone_number=$request->input('phone_number');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        //$user->password=Hash::make($request->password);
        $user->save();

        return redirect('dash/users_management')->with('success','User Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('dash/users_management')->with('success','User Deleted');


    }

    
  
}
