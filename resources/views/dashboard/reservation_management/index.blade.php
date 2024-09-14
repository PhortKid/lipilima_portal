@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Reservation Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Reservation</button>
             @include('dashboard.reservation_management.add')
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped ">
   
<thead >
<tr>
<th>#</th>
<th>Guest</th>
<th>Room no </th>
<th>Total Price </th>
<th>Stay Time</th>
<th>Room Price</th>
<th>number of guests</th>
<th>check in date </th>
<th>check out date</th>
<th>View</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
  
@php $counter = 1; @endphp
     @foreach($reservations as $reservation)
  <tr>
     <td> {{ $counter++ }}</td>
     <td>{{$reservation->number_of_guests}}</td>
     <td>{{$reservation->room_id}}</td>
     <td>{{$reservation->total_price}}/=</td>
     <td>{{$reservation->period_to_stay}}</td>
     <td>{{$reservation->room_price}}/=</td>
     <td>{{$reservation->number_of_guests}}</td>
     <td>{{$reservation->check_in_date}}</td>
     <td>{{$reservation->check_out_date}}</td>
     <td><a href="#" class="primary" data-toggle="modal" data-target="#ViewReservation{{$reservation->id}}" data-whatever="@mdo"><i class="fa fa-eye text-eye"></i></a></td>
     @include('dashboard.reservation_management.view')
     <td><a href="#" class="danger" data-toggle="modal" data-target="#DeleteReservation{{$reservation->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a></td>
     
     @include('dashboard.reservation_management.delete')
</tr>
@endforeach



</tbody>
<!--
<tfoot>
<tr>
<th>Guest</th>
<th>Room no </th>
<th>Total Price </th>
<th>Stay Time</th>
<th>Room Price</th>
<th>number of guests</th>
<th>check in date </th>
<th>check out date</th>
<th>View</th>
<th>Delete</th>
</tr>
</tfoot>
-->
</table>
</div>

</div>


@endsection