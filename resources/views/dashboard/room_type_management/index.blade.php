@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">Room Group  Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Room Group</button>
             @include('dashboard.room_type_management.add_room_type_management')
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped ">
   
<thead >
<tr>
 <th>#</th>
<th>Room Group</th>
<th>Cost</th>
<th>Created at</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
  
@php $counter = 1; @endphp
     @foreach($room_types as $room_type)
  <tr>
     <td>{{$counter++}}</td>
     <td>{{$room_type->name}}</td>
     <td>{{$room_type->cost}}</td>
     <td>{{$room_type->created_at}}</td>
     <td><a href="" class="" data-toggle="modal" data-target="#EditRoomType{{$room_type->id}}" data-whatever="@mdo"><i class="fa fa-edit text-primary"></i></a></td>
     <td><a href="#" class="danger" data-toggle="modal" data-target="#DeleteRoomType{{$room_type->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a></td>
     @include('dashboard.room_type_management.edit_room_type')
     @include('dashboard.room_type_management.delete_room_type')
</tr>
@endforeach



</tbody>

</table>
</div>

</div>


@endsection