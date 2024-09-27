<?php

namespace App\Http\Controllers;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

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




        //guest data bar 
        
        $guestIn1 = Guest::whereMonth('created_at', 1) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn2 = Guest::whereMonth('created_at', 2) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male')
        ->count();
        $guestIn3 = Guest::whereMonth('created_at', 3) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn4 = Guest::whereMonth('created_at', 4) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn5 = Guest::whereMonth('created_at', 5) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn6 = Guest::whereMonth('created_at', 6) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male')
        ->count();
        $guestIn7= Guest::whereMonth('created_at', 7) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn8 = Guest::whereMonth('created_at', 8) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn9 = Guest::whereMonth('created_at', 9) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();
        $guestIn10 = Guest::whereMonth('created_at', 10) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male')
        ->count();
        $guestIn11 = Guest::whereMonth('created_at', 11)
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male')
        ->count();
        $guestIn12 = Guest::whereMonth('created_at', 12)
        ->whereYear('created_at', Carbon::now()->year)->where('gender','male') 
        ->count();



        //female guest 
        $female_guestIn1 = Guest::whereMonth('created_at', 1) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn2 = Guest::whereMonth('created_at', 2) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female')
        ->count();
        $female_guestIn3 = Guest::whereMonth('created_at', 3) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn4 = Guest::whereMonth('created_at', 4) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn5 = Guest::whereMonth('created_at', 5) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn6 = Guest::whereMonth('created_at', 6) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female')
        ->count();
        $female_guestIn7= Guest::whereMonth('created_at', 7) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn8 = Guest::whereMonth('created_at', 8) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn9 = Guest::whereMonth('created_at', 9) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();
        $female_guestIn10 = Guest::whereMonth('created_at', 10) 
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female')
        ->count();
        $female_guestIn11 = Guest::whereMonth('created_at', 11)
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female')
        ->count();
        $female_guestIn12 = Guest::whereMonth('created_at', 12)
        ->whereYear('created_at', Carbon::now()->year)->where('gender','female') 
        ->count();

        //all guest 
        $all_guestIn1 = Guest::whereMonth('created_at', 1) 
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
        $all_guestIn2 = Guest::whereMonth('created_at', 2) 
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
        $all_guestIn3 = Guest::whereMonth('created_at', 3) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn4 = Guest::whereMonth('created_at', 4) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn5 = Guest::whereMonth('created_at', 5) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn6 = Guest::whereMonth('created_at', 6) 
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
        $all_guestIn7= Guest::whereMonth('created_at', 7) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn8 = Guest::whereMonth('created_at', 8) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn9 = Guest::whereMonth('created_at', 9) 
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();
        $all_guestIn10 = Guest::whereMonth('created_at', 10) 
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
        $all_guestIn11 = Guest::whereMonth('created_at', 11)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
        $all_guestIn12 = Guest::whereMonth('created_at', 12)
        ->whereYear('created_at', Carbon::now()->year) 
        ->count();

  // return $guestInJanuary;

    
    
        return view('dashboard.index', [
            'sb2admin' => $sb2admin,
            'bookingCount' => $bookingCount,
            'bookingCountnew' => $bookingCountnew,
            'guestCount' => $guestCount,
            'userCount' => $userCount,
            'staffCount' => $staffCount,
            'accountantCount' => $accountantCount,
            'managerCount' => $managerCount,
            'adminCount' => $adminCount,
            //'guestInJanuary'=>$guestInJanuary,

            //guest male
            'guestIn1'=>$guestIn1,
            'guestIn2'=>$guestIn2,
            'guestIn3'=>$guestIn3,
            'guestIn4'=>$guestIn4,
            'guestIn5'=>$guestIn5,
            'guestIn6'=>$guestIn6,
            'guestIn7'=>$guestIn7,
            'guestIn8'=>$guestIn8,
            'guestIn9'=>$guestIn9,
            'guestIn10'=>$guestIn10,
            'guestIn11'=>$guestIn11,
            'guestIn12'=>$guestIn12,

            //female guest
            'female_guestIn1'=>$female_guestIn1,
            'female_guestIn2'=>$female_guestIn2,
            'female_guestIn3'=>$female_guestIn3,
            'female_guestIn4'=>$female_guestIn4,
            'female_guestIn5'=>$female_guestIn5,
            'female_guestIn6'=>$female_guestIn6,
            'female_guestIn7'=>$female_guestIn7,
            'female_guestIn8'=>$female_guestIn8,
            'female_guestIn9'=>$female_guestIn9,
            'female_guestIn10'=>$female_guestIn10,
            'female_guestIn11'=>$female_guestIn11,
            'female_guestIn12'=>$female_guestIn12,

            //all guest
            'all_guestIn1'=>$all_guestIn1,
            'all_guestIn2'=>$all_guestIn2,
            'all_guestIn3'=>$all_guestIn3,
            'all_guestIn4'=>$all_guestIn4,
            'all_guestIn5'=>$all_guestIn5,
            'all_guestIn6'=>$all_guestIn6,
            'all_guestIn7'=>$all_guestIn7,
            'all_guestIn8'=>$all_guestIn8,
            'all_guestIn9'=>$all_guestIn9,
            'all_guestIn10'=>$all_guestIn10,
            'all_guestIn11'=>$all_guestIn11,
            'all_guestIn12'=>$all_guestIn12



            


        ]);

    
       //return 1;
    }
}
