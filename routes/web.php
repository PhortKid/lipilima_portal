<?php

//mail 
use App\Mail\WelcomeLipilima;
use App\Mail\ExporeLipilima;
use Illuminate\Support\Facades\Mail;




use App\Models\Booking;
use App\Http\Controllers;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RoomManagementController;
use App\Http\Controllers\ReservationManagement;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\TaxManagementController;
use App\Http\Controllers\ExpenseCategory;
use App\Http\Controllers\ExpenseManagementController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\BudgetAllocation;
use App\Http\Controllers\MarkedController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;

use App\Http\Controllers\ExpenseReportController;

use App\Http\Controllers\InvoiceController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
   // return view('dashboard');
    return redirect('/dash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dash/profile', [MyProfileController::class,'index'])->name('myprofile.index');
    Route::put('/dash/profile/{id}', [MyProfileController::class,'store'])->name('myprofile.store');
    Route::put('/dash/profile/email/{id}', [MyProfileController::class,'update_email'])->name('myprofile.update_email');
    Route::put('/dash/profile/password/{id}', [MyProfileController::class,'password'])->name('myprofile.password');



    Route::get('/dash', [DashboardController::class,'index'])->name('dash');


    Route::resource('/dash/guest_management',GuestController::class);
    Route::resource('/dash/users_management',UserManagementController::class);
    Route::resource('/dash/rooms_management',RoomManagementController::class);
    Route::resource('/dash/reservation_management',ReservationManagement::class);

    Route::resource('/dash/booking_management',BookingController::class);

    Route::resource('/dash/room_type_management',RoomtypeController::class);

    Route::resource('/dash/process',ProcessController::class);

    Route::resource('/dash/tax_management',TaxManagementController::class);

    Route::resource('/dash/category_expence',ExpenseCategory::class);
    Route::resource('/dash/expense_management',ExpenseManagementController::class);
    Route::resource('/dash/budget_planning',BudgetController::class);
    Route::resource('/dash/budget_allocation',BudgetAllocation::class);



     Route::resource('/dash/marked_booking_request', MarkedController::class);
     
     Route::resource('/dash/income_management', IncomeController::class);


     Route::resource('/dash/income_category', IncomeCategoryController::class);
     


});







Route::get('/dash/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/dash/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/dash/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
  


Route::get('/dash/income/report', [IncomeController::class, 'report'])->name('income.report');
Route::get('/dash/income/report/month', [IncomeController::class, 'reportByMonth'])->name('income.report.byMonth');





Route::get('/dash/expense_report', [ExpenseReportController::class, 'index'])->name('expense_report.index');



Route::get('/send-email/{toAddress}', function ($toAddress) {
    //$toAddress = 'customer.lipilima@gmail.com';

    Mail::to($toAddress)->send(new ExporeLipilima());

    return 'Email sent!';
});



require __DIR__.'/auth.php';
