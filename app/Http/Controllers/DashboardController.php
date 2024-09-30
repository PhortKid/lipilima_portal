<?php

namespace App\Http\Controllers;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Models\Booking;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Income;

use App\Models\Expense;

class DashboardController extends Controller
{
    public function index( )
    {
        toastr()->success('Welcome To Dashboard.');
        $sb2admin=1;

        //$bookingCountnew = Booking::where('is_marked', 'no')->count(); 
        //$bookingCount= Booking::count(); 
       // $guestCount=Guest::count();
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


           //all reservation
           $all_reservationIn1 = Reservation::whereMonth('created_at', 1) 
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
           $all_reservationIn2 = Reservation::whereMonth('created_at', 2) 
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
           $all_reservationIn3 = Reservation::whereMonth('created_at', 3) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn4 = Reservation::whereMonth('created_at', 4) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn5 = Reservation::whereMonth('created_at', 5) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn6 = Reservation::whereMonth('created_at', 6) 
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
           $all_reservationIn7= Reservation::whereMonth('created_at', 7) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn8 = Reservation::whereMonth('created_at', 8) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn9 = Reservation::whereMonth('created_at', 9) 
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();
           $all_reservationIn10 = Reservation::whereMonth('created_at', 10) 
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
           $all_reservationIn11 = Reservation::whereMonth('created_at', 11)
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
           $all_reservationIn12 = Reservation::whereMonth('created_at', 12)
           ->whereYear('created_at', Carbon::now()->year) 
           ->count();


           //booking 
           $all_bookingIn1 = Booking::whereMonth('created_at', 1) 
           ->whereYear('created_at', Carbon::now()->year)
           ->count();
            $all_bookingIn2 = Booking::whereMonth('created_at', 2) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->count();
            $all_bookingIn3 = Booking::whereMonth('created_at', 3) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn4 = Booking::whereMonth('created_at', 4) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn5 = Booking::whereMonth('created_at', 5) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn6 = Booking::whereMonth('created_at', 6) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->count();
            $all_bookingIn7 = Booking::whereMonth('created_at', 7) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn8 = Booking::whereMonth('created_at', 8) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn9 = Booking::whereMonth('created_at', 9) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();
            $all_bookingIn10 = Booking::whereMonth('created_at', 10) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->count();
            $all_bookingIn11 = Booking::whereMonth('created_at', 11)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->count();
            $all_bookingIn12 = Booking::whereMonth('created_at', 12)
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->count();


      
      //income chart

          
                $all_incomeIn1 = Income::whereMonth('created_at', 1) 
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount'); // Replace 'amount' with your actual column name
            $all_incomeIn2 = Income::whereMonth('created_at', 2) 
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
            $all_incomeIn3 = Income::whereMonth('created_at', 3) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn4 = Income::whereMonth('created_at', 4) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn5 = Income::whereMonth('created_at', 5) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn6 = Income::whereMonth('created_at', 6) 
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
            $all_incomeIn7 = Income::whereMonth('created_at', 7) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn8 = Income::whereMonth('created_at', 8) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn9 = Income::whereMonth('created_at', 9) 
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');
            $all_incomeIn10 = Income::whereMonth('created_at', 10) 
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
            $all_incomeIn11 = Income::whereMonth('created_at', 11)
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
            $all_incomeIn12 = Income::whereMonth('created_at', 12)
                ->whereYear('created_at', Carbon::now()->year) 
                ->sum('amount');

           //expense

                    $all_expenseIn1 = Expense::whereMonth('created_at', 1) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('amount'); // Replace 'amount' with your actual column name
            $all_expenseIn2 = Expense::whereMonth('created_at', 2) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('amount');
            $all_expenseIn3 = Expense::whereMonth('created_at', 3) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn4 = Expense::whereMonth('created_at', 4) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn5 = Expense::whereMonth('created_at', 5) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn6 = Expense::whereMonth('created_at', 6) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('amount');
            $all_expenseIn7 = Expense::whereMonth('created_at', 7) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn8 = Expense::whereMonth('created_at', 8) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn9 = Expense::whereMonth('created_at', 9) 
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');
            $all_expenseIn10 = Expense::whereMonth('created_at', 10) 
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('amount');
            $all_expenseIn11 = Expense::whereMonth('created_at', 11)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('amount');
            $all_expenseIn12 = Expense::whereMonth('created_at', 12)
                    ->whereYear('created_at', Carbon::now()->year) 
                    ->sum('amount');

                         //net profit
            $all_net_profit_In1 = $all_incomeIn1 - $all_expenseIn1;
            $all_net_profit_In2 = $all_incomeIn2 - $all_expenseIn2;
            $all_net_profit_In3 = $all_incomeIn3 - $all_expenseIn3;
            $all_net_profit_In4 = $all_incomeIn4 - $all_expenseIn4;
            $all_net_profit_In5 = $all_incomeIn5 - $all_expenseIn5;
            $all_net_profit_In6 = $all_incomeIn6 - $all_expenseIn6;
            $all_net_profit_In7 = $all_incomeIn7 - $all_expenseIn7;
            $all_net_profit_In8 = $all_incomeIn8 - $all_expenseIn8;
            $all_net_profit_In9 = $all_incomeIn9 - $all_expenseIn9;
            $all_net_profit_In10 = $all_incomeIn10 - $all_expenseIn10;
            $all_net_profit_In11 = $all_incomeIn11 - $all_expenseIn11;
            $all_net_profit_In12 = $all_incomeIn12 - $all_expenseIn12;




    // toady income  & expense
    $today = Carbon::today(); 
    $today_income = Income::whereDate('date', $today)->sum('amount');
    $today_expense = Expense::whereDate('date', $today)->sum('amount');
    $today_booking = Booking::whereDate('created_at', $today)->count();
    $today_guest = Guest::whereDate('created_at', $today)->count();
    $today_reservation = Reservation::whereDate('created_at', $today)->count();

     //month income & expense
    $startOfMonth = Carbon::now()->startOfMonth(); 
    $endOfMonth = Carbon::now()->endOfMonth(); 

    $month_income = Income::whereBetween('date', [$startOfMonth, $endOfMonth])->sum('amount'); 
    $month_expense = Expense::whereBetween('date', [$startOfMonth, $endOfMonth])->sum('amount'); 
    $month_booking = Booking::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count(); 
    $month_guest = Guest::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count(); 
    $month_reservation = Reservation::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count(); 

    // year income & expense
    $startOfYear = Carbon::now()->startOfYear(); 
    $endOfYear = Carbon::now()->endOfYear(); 

    $year_income = Income::whereBetween('date', [$startOfYear, $endOfYear])->sum('amount');
    $year_expense = Expense::whereBetween('date', [$startOfYear, $endOfYear])->sum('amount');
    $year_guest = Guest::whereBetween('created_at', [$startOfYear, $endOfYear])->count();
    $year_booking = Booking::whereBetween('created_at', [$startOfYear, $endOfYear])->count();
    $year_reservation = Reservation::whereBetween('created_at', [$startOfYear, $endOfYear])->count();

    $all_income=Income::all()->sum('amount');
    $all_expense=Expense::all()->sum('amount');
    $all_booking=Booking::all()->count();
    $all_guest=Guest::all()->count();
    $all_reservation=Reservation::all()->count();

    $today_net_profit=$today_income-$today_expense;
    $month_net_profit=$month_income-$month_expense;
    $year_net_profit=$year_income-$year_expense;
    $all_time_net_profit=$all_income-$all_expense;

    //return $all_expenseIn1;
    
       return view('dashboard.index', [
            'sb2admin' => $sb2admin,
            //'bookingCount' => $bookingCount,
           // 'bookingCountnew' => $bookingCountnew,
           // 'guestCount' => $guestCount,
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

            'all_reservationIn1'=>$all_reservationIn1,
            'all_reservationIn2'=>$all_reservationIn2,
            'all_reservationIn3'=>$all_reservationIn3,
            'all_reservationIn4'=>$all_reservationIn4,
            'all_reservationIn5'=>$all_reservationIn5,
            'all_reservationIn6'=>$all_reservationIn6,
            'all_reservationIn7'=>$all_reservationIn7,
            'all_reservationIn8'=>$all_reservationIn8,
            'all_reservationIn9'=>$all_reservationIn9,
            'all_reservationIn10'=>$all_reservationIn10,
            'all_reservationIn11'=>$all_reservationIn11,
            'all_reservationIn12'=>$all_reservationIn12,

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
            'all_guestIn12'=>$all_guestIn12,

            //income chart
            'all_incomeIn1'=>$all_incomeIn1,
            'all_incomeIn2'=>$all_incomeIn2,
            'all_incomeIn3'=>$all_incomeIn3,
            'all_incomeIn4'=>$all_incomeIn4,
            'all_incomeIn5'=>$all_incomeIn5,
            'all_incomeIn6'=>$all_incomeIn6,
            'all_incomeIn7'=>$all_incomeIn7,
            'all_incomeIn8'=>$all_incomeIn8,
            'all_incomeIn9'=>$all_incomeIn9,
            'all_incomeIn10'=>$all_incomeIn10,
            'all_incomeIn11'=>$all_incomeIn11,
            'all_incomeIn12'=>$all_incomeIn12,

            //booking 
            'all_bookingIn1' => $all_bookingIn1,
            'all_bookingIn2' => $all_bookingIn2,
            'all_bookingIn3' => $all_bookingIn3,
            'all_bookingIn4' => $all_bookingIn4,
            'all_bookingIn5' => $all_bookingIn5,
            'all_bookingIn6' => $all_bookingIn6,
            'all_bookingIn7' => $all_bookingIn7,
            'all_bookingIn8' => $all_bookingIn8,
            'all_bookingIn9' => $all_bookingIn9,
            'all_bookingIn10' => $all_bookingIn10,
            'all_bookingIn11' => $all_bookingIn11,
            'all_bookingIn12' => $all_bookingIn12,



            //expense chart
            'all_expenseIn1'=>$all_expenseIn1,
            'all_expenseIn2'=>$all_expenseIn2,
            'all_expenseIn3'=>$all_expenseIn3,
            'all_expenseIn4'=>$all_expenseIn4,
            'all_expenseIn5'=>$all_expenseIn5,
            'all_expenseIn6'=>$all_expenseIn6,
            'all_expenseIn7'=>$all_expenseIn7,
            'all_expenseIn8'=>$all_expenseIn8,
            'all_expenseIn9'=>$all_expenseIn9,
            'all_expenseIn10'=>$all_expenseIn10,
            'all_expenseIn11'=>$all_expenseIn11,
            'all_expenseIn12'=>$all_expenseIn12,

            'all_net_profit_In1' => $all_net_profit_In1,
            'all_net_profit_In2' => $all_net_profit_In2,
            'all_net_profit_In3' => $all_net_profit_In3,
            'all_net_profit_In4' => $all_net_profit_In4,
            'all_net_profit_In5' => $all_net_profit_In5,
            'all_net_profit_In6' => $all_net_profit_In6,
            'all_net_profit_In7' => $all_net_profit_In7,
            'all_net_profit_In8' => $all_net_profit_In8,
            'all_net_profit_In9' => $all_net_profit_In9,
            'all_net_profit_In10' => $all_net_profit_In10,
            'all_net_profit_In11' => $all_net_profit_In11,
            'all_net_profit_In12' => $all_net_profit_In12,


       




           //income

            'today_income'=> $today_income,
            'month_income'=>$month_income,
            'year_income'=>$year_income,
            'all_income'=>$all_income,

            'today_expense'=> $today_expense,
            'month_expense'=>$month_expense,
            'year_expense'=>$year_expense,
            'all_expense'=>$all_expense,

            //net profit

            'today_net_profit'=>$today_net_profit,
            'month_net_profit'=>$month_net_profit,
            'year_net_profit'=>$year_net_profit,
            'all_time_net_profit'=>$all_time_net_profit,

            'today_guest'=> $today_guest,
            'month_guest'=>$month_guest,
            'year_guest'=>$year_guest,
            'all_guest'=>$all_guest,

            'today_booking'=> $today_booking,
            'month_booking'=>$month_booking,
            'year_booking'=>$year_booking,
            'all_booking'=>$all_booking,

            'today_reservation'=> $today_reservation,
            'month_reservation'=>$month_reservation,
            'year_reservation'=>$year_reservation,
            'all_reservation'=>$all_reservation,




        ]);

    
       //return 1;
    }
}
