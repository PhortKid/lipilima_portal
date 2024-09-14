<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyProfileController extends Controller
{
    
    

    public function index()
    {
      $id=Auth::user()->id;

        return view('dashboard.profile')->with('id',$id);
    }

    public function store(Request $request,$id)
    {


        $request->validate([
            'profile_image' => 'required|max:2048',
        ]);

        $user = User::findOrFail($id);
        
        if ($request->hasFile('profile_image')) {
            // Get the file from the request
            $file = $request->file('profile_image');
            
            // Generate a unique file name
            $fileNameToStore = time() . '.' . $file->getClientOriginalExtension();
            
            // Store the file
            $path = $file->storeAs('public/profile_image', $fileNameToStore);
            
            // Update the user's profile_image attribute
            $user->profile_image = $fileNameToStore;
        } else {
            // If no file is uploaded, use a default image
            $user->profile_image = "no_image.png";
        }
    
        // Save the updated user
        $user->save();
    
        // Redirect with success message
        return redirect('dash/profile')->with('success', 'Profile updated successfully!');

       
           

    }

    public function update_email(Request $request,$id)
    {   
        $request->validate([
            'email' => 'required|email',
        ]);

        $user=User::find($id);
        $user->email=$request->input('email');
        $user->save();
        return redirect('dash/profile')->with('success','Email updated successfully!');
    }

    public function password(Request $request,$id)
    {



        $request->validate([
            'new_password' => 'required|min:8|different:current_password',
            'password_confirmation' => 'required_with:new_password|same:new_password|min:8'
        ]);
    


        $user=User::find($id);
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        $id=Auth::user()->id;
       
        return redirect('dash/profile')->with('success', 'Password updated successfully!')->with('id',$id);
     
    }
}
