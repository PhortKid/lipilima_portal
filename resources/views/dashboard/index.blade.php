@extends('dashboard_layout.app')

@section('content')

<div class="row">

@include('dashboard.worker_card')
@include('dashboard.booking_card')
@include('dashboard.guest_card')

@include('dashboard.reservation_card')
@include('dashboard.income_card')
@include('dashboard.expense_card')
@include('dashboard.net_profit_card')


                    
<div class=" ">
    <h1 class="mb-4">Guest Analytics</h1>
    <div class="row">
        <div class="col-12 col-md-6 mb-4"> <!-- Full width on small screens, half on medium and larger -->
            <canvas id="guestBar"></canvas>
        </div>
        <div class="col-12 col-md-6 mb-4"> <!-- Same as above -->
            <canvas id="myguestLine"></canvas>
        </div>
    </div>
</div>
  <!--
       <h1>Booking Analytics</h1>
     
     

       <div>
         <canvas id="bookBar"></canvas>    
       </div>      
-->
 <div class=" ">
   
    <div class="row">
    
        <div class="col-12 col-md-6 mb-4"> 
        <h1>Booking Analytics</h1>
            <canvas id="bookBar"></canvas>
        </div>
        <div class="col-12 col-md-6 mb-4"> 
        <h1 class="mb-4">Reservation Analytics</h1>
            <canvas id="reservationBar"></canvas>
        </div>
    </div>
</div>
       

  



                
@endsection             