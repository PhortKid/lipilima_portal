@extends('dashboard_layout.app')

@section('content')
<div class="row ml-5 ">
    <div class="card col-12 col-sm-9 ">
<h5 class="card-header">Profile</h5>
<div class="card-body">


    <div class="mb-3 row  ">
        
      
<div class="profile-section h-25 ">
        <img src="/storage/profile_image/{{auth()->user()->profile_image}}" alt="{{auth()->user()->firstname}} image" class="img-fluid rounded-circle mb-2 h-25 shadow " width="128" height="128">
    </div>
  <?php
    //{!! html()->form('PUT', route('myprofile.update', $id), ['enctype' => 'multipart/form-data'])->open() !!}

    ?>
    <form action="{{route('myprofile.store', $id)}}" method="post" enctype="multipart/form-data">
    

@csrf
{!! html()->hidden('_method', 'PUT') !!}
   
   
<div class="mb-3 row">
       <label for="">Fullname</label>
        <div class="col-sm-6">
            <input type="text"  class="form-control" disabled value="{{auth()->user()->firstname}} {{auth()->user()->lastname}}">
        </div>
    </div>

 

<!-- Your other form fields -->

<div class="form-group">
    {!! html()->label('Image')->for('image') !!}
    {!! html()->file('profile_image')->accept('image/*')->class('form-control') !!}
</div>






    
  
   



   <br>

    <div class="">
      
      
        {!! html()->submit('CHANGE PROFILE')->class('btn btn-primary') !!}

    </div>
 <?php 
    //{!! html()->form()->close() !!}

    ?>
    </form>
</div>
    
</div>
</div>
</div>


<div class="row mt-5 ml-5">
    <div class="card col-12 col-sm-9">
<h5 class="card-header">CHANGE EMAIIL</h5>
<div class="card-body">
{!! html()->form('PUT', route('myprofile.update_email', $id))->open() !!}
   
    <div class="mb-3 row">

    <div class="mb-3 row">

    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email"  class='form-control' id='inputText' name="email" value="{{ Auth::user()->email }}">
        </div>
    </div>

    @csrf
    {!! html()->hidden('_method', 'PUT') !!}
   
    </div>
    {!! html()->submit('UPDATE  EMAIL')->class('btn btn-primary') !!}
    <BR>
    </div>
    {!! html()->form()->close() !!}
</div>
</div>  
   

<!-- Change password div -->
        <div class="row mt-5 ml-5">
            <div class="card col-12 col-sm-9">
        <h5 class="card-header">CHANGE PASSWORD</h5>
        <div class="card-body">  
    
        {!! html()->form('PUT', route('myprofile.password', $id))->open() !!}
      

    <div class="mb-3 row">
    <label for="inputText" class="col-sm-2 col-form-label">New Password</label>

        <div class="col-sm-10">
            
            <input type="password"  class='form-control' id='inputText' name="new_password">
        </div>
    </div>

    <div class="mb-3 row">
    <label for="inputText" class="col-sm-2 col-form-label">Retype password</label>
  
        <div class="col-sm-10">
           
            <input type="password"  class='form-control' id='inputText' name="password_confirmation">
        </div>
    </div>
    @csrf
    {!! html()->hidden('_method', 'PUT') !!}

    <div class="">
    {!! html()->submit('UPDATE  PASSWORD')->class('btn btn-primary') !!}

    </div>
    {!! html()->form()->close() !!}
    
</div>
</div>
</div>


@endsection      