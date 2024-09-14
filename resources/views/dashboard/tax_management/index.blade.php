@extends('dashboard_layout.app')

@section('content')





<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Tax</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add Tax</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

  <table class="table table-bordered border-primary ">
  <thead>
    <th>#</th>
    <th>TaxName</th>
    <th>Rate</th>
    <th>Description</th>
    <th>Date</th>
    <th>Action</th>

  </thead>
  <tbody>
  @php $counter = 1; @endphp
    @foreach($taxs as $tax)
    <tr>
      <td>{{$counter++}}</td>
    <td>{{$tax->tax_name}}</td>
    <td>{{$tax->rate}}</td>
    <td>{{$tax->description}}</td>
    <td>{{$tax->created_at}}</td>
    <td>
    <a href="" class="" data-toggle="modal" data-target="#ViewTax{{$tax->id}}" data-whatever="@mdo"><i class="fa fa-eye text-primary"></i></a> &nbsp | &nbsp
    <a href="#" class="danger" data-toggle="modal" data-target="#DeleteTax{{$tax->id}}" data-whatever="@mdo"><i class="fa fa-trash text-danger"></i></a>
     @include('dashboard.tax_management.tax_view')
     @include('dashboard.tax_management.delete_tax')

    </td>

    </tr>
    @endforeach
  </tbody>
</table>




  </div>
  <!-- end of tab 1 -->


















  <!-- Start tAB 2 -->
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">



  <form action="{{route('tax_management.store')}}" method="POST">
        @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tax Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="tax_name" >
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tax Rate:</label>
            <input type="text" class="form-control" id="recipient-name" name="tax_rate" >
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tax Description:</label>
            <textarea name="tax_description" id="" class="form-control" ></textarea>
          </div>

          <div class="form-group pt-2">
            <input type="submit" class="btn btn-primary form-control " value="Add Tax"> 
            </div>
         
      </form>







  </div>
  <!-- End Tab 2 -->
</div>

@endsection