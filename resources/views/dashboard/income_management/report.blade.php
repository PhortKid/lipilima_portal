@extends('dashboard_layout.app')

@section('content')

<div class="card">
<div class="card-header">
<h3 class="card-title">User Management</h3>
<div class="row">
   <div class="col-10"></div>
        <div class="col-2">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add User</button>
     

            
            </div>
</div>

</div>

<div class="card-body table-responsive">
<table id="example1" class="table table-bordered table-striped table-hover " >
   
<thead >
<tr>
 <th>#</th>
 <th>Category</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Created At</th>
</tr>
</thead>
<tbody>
  
@php $counter = 1; @endphp
     @foreach($incomes as $income)
  <tr>
  <td>{{$counter}}</td>
      <td>{{$income->id}}</td>
      <td>{{$income->amount}}</td>
      <td>{{$income->date}}</td>
      <td>{{$income->created_at}}</td>
</tr>
@endforeach



</tbody>

</table>
</div>

</div>


@endsection