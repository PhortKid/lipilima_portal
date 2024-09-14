@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Guest Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add guest</button>
     

             @include('dashboard.guests_management.add_guest_modal')
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped ">
   
<thead >
<tr>
     <th>#</th>
<th>FullName</th>
<th>Booking Type</th>
<th>Country</th>
<th>Gender</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@php $counter = 1; @endphp

     @foreach($guests as $guest)
  <tr>
     <td>{{$counter++}}</td>
     <td>{{$guest->firstname}} {{$guest->middelname}} {{$guest->lastname}}</td>
     <td>{{$guest->booking_type}}</td>
     <td>{{$guest->country}}</td>
     <td>{{$guest->gender}}</td>
    

     <td><a href="" class="" data-toggle="modal" data-target="#EditGuest{{$guest->id}}" data-whatever="@mdo"> <i class="fa fa-edit"></i></a></td>
     <td><a href="#" class="danger" data-toggle="modal" data-target="#DeleteGuest{{$guest->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a></a></td>
     @include('dashboard.guests_management.edit_guest_info')
     @include('dashboard.guests_management.delete_guest_info')
</tr>
@endforeach



</tbody>

</table>
</div>

</div>


@endsection