@extends('dashboard_layout.app')

@section('content')





<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Budget Allocation</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

  <table class="table table-bordered border-primary ">
  <thead>
    <th>#</th>
    <th>Budget</th>
    <th>Expense</th>
    <th>Amount Allocated</th>
    <th>Created at</th>
    <th>Action</th>

  </thead>
  <tbody>
  @php $counter = 1; @endphp
    @foreach($budget_allocations as $budget_allocation)
    <tr>
      <td>{{$counter++}}</td>
    <td>{{$budget_allocation->budget_id}}</td>
    <td>{{$budget_allocation->expense_id}}</td>
    <td>{{$budget_allocation->amount_allocated}}</td>
    <td>{{$budget_allocation->created_at}}</td>
  
    <td>
    <a href="#" class="danger" data-toggle="modal" data-target="#ViewBudgetAllocation{{$budget_allocation->id}}" data-whatever="@mdo"><i class="fa fa-eye text-primary"></i></a> &nbsp | &nbsp
    <a href="#" class="danger" data-toggle="modal" data-target="#DeleteBudgetAllocation{{$budget_allocation->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a>
     @include('dashboard.budget_allocation.view')
     @include('dashboard.budget_allocation.delete')

    </td>

    </tr>
    @endforeach
  </tbody>
</table>




  </div>
  <!-- end of tab 1 -->


















  <!-- Start tAB 2 -->
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">



  <form action="{{route('budget_allocation.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Budget:</label>
           <select name="budget" class="form-control" id="">
            @foreach($budgets as $budget)
            <option value="{{$budget->id}}">{{$budget->id}}</option>
            @endforeach
           </select>
           </div>


        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Expense:</label>
           <select name="expense" class="form-control" id="">
            @foreach($expenses as $expense)
            <option value="{{$expense->id}}">{{$expense->id}}</option>
            @endforeach
           </select>
           </div>






          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Amount Allocated:</label>
            <input type="number" class="form-control" id="recipient-name" name="amount_allocated" >
          </div>

       

      
  

          <div class="form-group pt-2">
            <input type="submit" class="btn btn-primary form-control " value="Add Budget Allocation"> 
            </div>
         
      </form>







  </div>
  <!-- End Tab 2 -->
</div>

@endsection