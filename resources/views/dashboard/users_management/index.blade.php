@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">User Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add User</button>
     

             @include('dashboard.users_management.add_user_modal')
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped table-hover " >
   
<thead >
<tr>
 <th>#</th>
<th>Fullname</th>
<th>Phone number </th>
<th>Gender</th>
<th>Email</th>
<th>Role</th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
  
@php $counter = 1; @endphp
     @foreach($users as $user)
  <tr>
     <td>{{$counter++}}</td>
     <td>{{$user->firstname}} {{$user->middlename}}  {{$user->lastname}}</td>
     <td>{{$user->phone_number}}</td>
     <td>{{$user->gender}}</td>
     <td>{{$user->email}}</td>
     <td>{{$user->role}}</td>
     <td>{{$user->status}}</td>
    
     <td><a href="" class="" data-toggle="modal" data-target="#EditUser{{$user->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></a></td>
     <td><a href="#" class="danger" data-toggle="modal" data-target="#DeleteUser{{$user->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a></td>
     @include('dashboard.users_management.edit_user_modal')
     @include('dashboard.users_management.delete_user_modal')
</tr>
@endforeach



</tbody>

</table>
</div>

</div>


@endsection