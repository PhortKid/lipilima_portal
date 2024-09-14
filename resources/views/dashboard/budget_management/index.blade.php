@extends('dashboard_layout.app')

@section('content')





<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Budgets</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add Budgets</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

  <table class="table table-bordered border-primary ">
  <thead>
    <th>#</th>
    <th>Category</th>
    <th>Amount</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Action</th>

  </thead>
  <tbody>
  @php $counter = 1; @endphp
    @foreach($budgets as $budget)
    <tr>
      <td>{{$counter++}}</td>
    <td>{{$budget->category_id	}}</td>
    <td>{{$budget->budget_amount}}</td>
    <td>{{$budget->start_date}}</td>
    <td>{{$budget->end_date}}</td>
    <td>
    <a href="#" class="danger" data-toggle="modal" data-target="#ViewBudget{{$budget->id}}" data-whatever="@mdo"><i class="fa fa-eye text-primary"></i></a> &nbsp | &nbsp
    <a href="#" class="danger" data-toggle="modal" data-target="#DeleteBudget{{$budget->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a>
     @include('dashboard.budget_management.view')
     @include('dashboard.budget_management.delete')

    </td>

    </tr>
    @endforeach
  </tbody>
</table>




  </div>
  <!-- end of tab 1 -->


















  <!-- Start tAB 2 -->
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">



  <form action="{{route('budget_planning.store')}}" method="POST">
        @csrf



        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Categories:</label>
           <select name="category" class="form-control" id="">
            @foreach($expense_categories as $expense_category)
            <option value="{{$expense_category->id}}">{{$expense_category->name}}</option>
            @endforeach
           </select>
           </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Budget Amount:</label>
            <input type="number" class="form-control" id="recipient-name" name="budget_amount" >
          </div>

       

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Start Date:</label>
            <input type="date" class="form-control" id="recipient-name" name="start_date" >
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">End Date:</label>
            <input type="date" class="form-control" id="recipient-name" name="end_date" >
          </div>

          <div class="form-group pt-2">
            <input type="submit" class="btn btn-primary form-control " value="Add Budget"> 
            </div>
         
      </form>


  </div>
  <!-- End Tab 2 -->
</div>

@endsection