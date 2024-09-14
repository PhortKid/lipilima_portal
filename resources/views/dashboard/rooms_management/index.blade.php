@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Rooms Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Room</button>
     

             @include('dashboard.rooms_management.add_room')
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped ">
   
<thead >
<tr>
<th>#</th>
<th>Room no</th>
<th>Status</th>
<th>Room Type</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
  
@php $counter = 1; @endphp
     @foreach($rooms as $room)
  <tr>
   <td>{{$counter++}}</td>
     <td>{{$room->room_number}}</td>
     @if($room->status=='available') 
     <td class="text-success">{{$room->status}}</td>
      @else
      <td class="text-warning">{{$room->status}}</td> 
      @endif
      <td>{{$room->room_type}}</td>
   
      
     

     <td><a href="" class="" data-toggle="modal" data-target="#EditRoom{{$room->id}}" data-whatever="@mdo"><i class="fa fa-edit text-primary"></i></a></td>
     <td><a href="#" class="danger" data-toggle="modal" data-target="#DeleteRoom{{$room->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a></td>
     @include('dashboard.rooms_management.edit_room')
     @include('dashboard.rooms_management.delete_room')
</tr>
@endforeach



</tbody>

</table>
</div>

</div>


@endsection