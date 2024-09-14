@extends('dashboard_layout.app')

@section('content')

<form action="{{ route('process.store') }}" method="POST">
          @csrf
          


          <!-- Choose Room  -->
          <div class="form-group">
            <label for="room_no" class="col-form-label">Choose Room:<i class="text-danger">*</i></label>
            <select name="room_no" class="form-control">
              <option>-- Select --</option>
              @foreach($choosen_price_rooms as $choosen_price_room)
                <option value="{{ $choosen_price_room->id }}">{{ $choosen_price_room->room_number }} - {{ $choosen_price_room->room_type}}</option>
              @endforeach
            </select>
          </div>


          <!-- check in date -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Check in Date:</label>
            <input type="date" class="form-control" id="date" name="check_in_date">
          </div>

                    <!-- check in date -->
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Check Out Date:</label>
            <input type="date" class="form-control" id="date" name="check_out_date">
          </div>


          <input type="hidden" name="total_price" value="{{$total_price}}">
          <input type="hidden" name="number_of_guest" value="{{$number_of_guest}}">
          <input type="hidden" name="period_to_stay" value="{{$period_to_stay}}">
          <input type="hidden" name="guest_id" value="<?php print_r($guest_id)  ?>">
          <input type="hidden" name="room_price" value="{{$room_price}}">
          
          
          <div class="form-group pt-3">
            <input type="submit" class="form-control btn btn-primary"  name="submit">
          </div>

</form>

@endsection