@extends('dashboard_layout.app')

@section('content')





<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Income</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" 
    data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add Income</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

  <table class="table table-bordered border-primary ">
  <thead>
    <th>#</th>
    <th>Category</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Created At</th>
    <th>Action</th>

  </thead>
  <tbody>
  @php $counter = 1; @endphp
    @foreach($incomes as $income)
    <tr>
      <td>{{$counter++}}</td>
      <td>{{ $income->incomecategory->name }}</td>
      <td>{{$income->amount}}</td>
      <td>{{$income->date}}</td>
      <td>{{$income->created_at}}</td>
    <td>
    <a href="#" class="danger" data-toggle="modal" data-target="#ViewExpense{{$income->id}}" data-whatever="@mdo"><i class="fa fa-eye text-primary"></i></a> &nbsp | &nbsp
    <a href="#" class="danger" data-toggle="modal" data-target="#DeleteExpense{{$income->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a>
     @include('dashboard.income_management.view')
     @include('dashboard.income_management.delete')

    </td>

    </tr>
    @endforeach
  </tbody>
</table>




  </div>
  <!-- end of tab 1 -->


















  <!-- Start tAB 2 -->
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">



  <form action="{{route('income_management.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Categories:</label>
           <select name="category" class="form-control" id="">
            @foreach($income_categories as $income_category)
            <option value="{{$income_category->id}}">{{$income_category->name}}</option>
            @endforeach
           </select>
           </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" class="form-control" id="recipient-name" name="amount" >
          </div>

    

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date:</label>
            <input type="date" class="form-control" id="recipient-name" name="date" >
          </div>

       


           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description:</label>
            <textarea name="description" id="" class="form-control"></textarea>
          </div>

          <div class="form-group pt-2">
            <input type="submit" class="btn btn-primary form-control " value="Add Income"> 
            </div>
         
      </form>







  </div>
  <!-- End Tab 2 -->
</div>

@endsection