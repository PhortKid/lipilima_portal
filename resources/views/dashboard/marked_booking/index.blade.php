@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Book Management</h3>



</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped ">
   
<thead >
<tr>
<th>#</th>
<th>Fullname</th>
<th>Email</th>
<th>Phone number</th>
<th>Checkin Date</th>
<th>Checkout Date</th>
<th>view</th>
</tr>
</thead>
<tbody>
@php $counter = 1; @endphp
  @foreach($bookings as $book)
  <tr>
    <td>{{$counter++}}</td>
  <td>{{$book->firstname}} {{$book->lastname}}</td>
  <td>{{$book->email}}</td>
  <td>{{$book->phone_number}}</td>
  <td>{{$book->checkin_date}}</td>
  <td>{{$book->checkout_date}}</td>

  <td><a href="#" class="danger" data-toggle="modal" data-target="#ViewBook{{$book->id}}" data-whatever="@mdo"><i class="fa fa-eye text-success"></i></a></td>
  @include('dashboard.booking_management.view_book')
  </tr>
 @endforeach


</tbody>

</table>
</div>

</div>


@endsection