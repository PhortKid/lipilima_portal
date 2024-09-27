@extends('dashboard_layout.app')

@section('content')





<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Categories</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add Category</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

  <table class="table table-bordered border-primary ">
  <thead>
    <th>#</th>
    <th>Name</th>
    <th>Created</th>
    <th>Action</th>

  </thead>
  <tbody>
  @php $counter = 1; @endphp
    @foreach($income_categories as $income_category)
    <tr>
      <td>{{$counter++}}</td>
    <td>{{$income_category->name}}</td>
    <td>{{$income_category->created_at}}</td>
    <td>
    <a href="#" class="danger" data-toggle="modal" data-target="#DeleteIncCategories{{$income_category->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a>
     @include('dashboard.income_category.delete')

    </td>

    </tr>
    @endforeach
  </tbody>
</table>




  </div>
  <!-- end of tab 1 -->


















  <!-- Start tAB 2 -->
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">



  <form action="{{route('income_category.store')}}" method="POST">
        @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="category_name" >
          </div>

          <div class="form-group pt-2">
            <input type="submit" class="btn btn-primary form-control " value="Add income Category"> 
            </div>
         
      </form>







  </div>
  <!-- End Tab 2 -->
</div>

@endsection