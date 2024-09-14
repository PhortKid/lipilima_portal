@extends('dashboard_layout.app')

@section('content')

<div class="row">

@include('dashboard.worker_card')
@include('dashboard.booking_guest_card')

                    <h1>Guest Analytics</h1>
       <div class="row">
       <div class="col-6">
         <canvas id="guestBar"></canvas>    
         </div>
         <div class="col-6">
         <canvas id="myguestLine"></canvas>    
         </div>
       </div>             
  
       <h1>Booking Analytics</h1>
       <div class="row">
     
         <div class="col-6">
         <canvas id="bookBar"></canvas>    
         </div>
         <div class="col-6">
         <canvas id="myguestLine"></canvas>    
         </div>
       </div>      
       

  



                
@endsection             