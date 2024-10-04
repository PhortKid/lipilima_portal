@extends('dashboard_layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card col-12 col-sm-9">
            <h5 class="card-header text-center">Profile</h5>
            <div class="card-body">

                <div class="mb-3 text-center">
                    <div class="profile-section">
                        <img src="/storage/profile_image/{{auth()->user()->profile_image}}" alt="{{auth()->user()->firstname}} image" class="img-fluid rounded-circle mb-2 shadow" width="128" height="128">
                    </div>
                </div>

                <form action="{{route('myprofile.store', $id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {!! html()->hidden('_method', 'PUT') !!}

                    <div class="mb-3 row">
                        <label for="" class="col-sm-4 col-form-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" disabled value="{{auth()->user()->firstname}} {{auth()->user()->lastname}}">
                        </div>
                    </div>

                    <div class="form-group">
                        {!! html()->label('Image')->for('image') !!}
                        {!! html()->file('profile_image')->accept('image/*')->class('form-control') !!}
                    </div>

                    <div class="text-center">
                        {!! html()->submit('CHANGE PROFILE')->class('btn btn-primary') !!}
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="card col-12 col-sm-9">
            <h5 class="card-header text-center">CHANGE EMAIL</h5>
            <div class="card-body">
                {!! html()->form('PUT', route('myprofile.update_email', $id))->open() !!}

                <div class="mb-3 row">
                    <label for="inputText" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class='form-control' id='inputText' name="email" value="{{ Auth::user()->email }}">
                    </div>
                </div>

                @csrf
                {!! html()->hidden('_method', 'PUT') !!}
                
                <div class="text-center">
                    {!! html()->submit('UPDATE EMAIL')->class('btn btn-primary') !!}
                </div>
                <br>
                {!! html()->form()->close() !!}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="card col-12 col-sm-9">
            <h5 class="card-header text-center">CHANGE PASSWORD</h5>
            <div class="card-body">  
                {!! html()->form('PUT', route('myprofile.password', $id))->open() !!}
                
                <div class="mb-3 row">
                    <label for="inputText" class="col-sm-4 col-form-label">New Password</label>
                    <div class="col-sm-8">
                        <input type="password" class='form-control' id='inputText' name="new_password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputText" class="col-sm-4 col-form-label">Retype Password</label>
                    <div class="col-sm-8">
                        <input type="password" class='form-control' id='inputText' name="password_confirmation">
                    </div>
                </div>

                @csrf
                {!! html()->hidden('_method', 'PUT') !!}

                <div class="text-center">
                    {!! html()->submit('UPDATE PASSWORD')->class('btn btn-primary') !!}
                </div>
                {!! html()->form()->close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
