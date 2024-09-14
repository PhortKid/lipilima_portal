<?php

namespace App\Http\Controllers;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index( )
    {
        toastr()->success('Welcome To Dashboard.');
        $sb2admin=1;

        $bookingCountnew = Booking::where('is_marked', 'no')->count(); 
        $bookingCount= Booking::count(); 
        $guestCount=Guest::count();
        $userCount=User::count();
        $staffCount=User::where('role', 'Staff')->count(); 
        $accountantCount=User::where('role', 'Accountant')->count(); 
        $managerCount=User::where('role', 'Manager')->count(); 
        $adminCount=User::where('role', 'Admin')->count(); 
        
        return view('dashboard.index', [
            'sb2admin' => $sb2admin,
            'bookingCount' => $bookingCount,
            'bookingCountnew' => $bookingCountnew,
            'guestCount' => $guestCount,
            'userCount' => $userCount,
            'staffCount' => $staffCount,
            'accountantCount' => $accountantCount,
            'managerCount' => $managerCount,
            'adminCount' => $adminCount
        ]);

    
       //return 1;
    }
}
