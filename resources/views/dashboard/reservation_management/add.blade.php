<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Reservation</h5>
      </div>
      <div class="modal-body">
        <form action="{{ route('process.index') }}" method="GET">
          @csrf
          
          <!-- Guest -->
          <div class="form-group">
            <label for="guest" class="col-form-label">Guest:<i class="text-danger">*</i></label>
            <select name="guest[]" class="form-control chosen-select" max="2" data-placeholder="Choose a guest (max 2)..." id="tags" multiple>
              @foreach($guests as $guest)
                <option value="{{ $guest->id }}">{{ $guest->firstname }}</option>
              @endforeach
            </select>
          </div>

          <!-- Room Price -->
          <div class="form-group">
            <label for="room_no" class="col-form-label">Room Price:<i class="text-danger">*</i></label>
            <select name="room_price" class="form-control">
              <option>-- Select --</option>
              @foreach($room_types as $room_type)
                <option value="{{ $room_type->cost }}">{{ $room_type->name }} - {{ $room_type->cost }}</option>
              @endforeach
            </select>
          </div>

          <!-- Reservation Period -->
          <div class="form-group">
            <label for="reservation_period" class="col-form-label">Reservation Period:<i class="text-danger">*</i></label>
            <select name="reservation_period" class="form-control" id="reservation-type">
              <option value="">-- Select --</option>
              <option value="long">For 30 days</option>
              <option value="custom">Custom Days</option>
            </select>
            <input type="hidden" name="custom_period" id="custom-period" value="">
          </div>

          <!-- Custom Period Input -->
          <div class="form-group" id="custom-period-container" style="display: none;">
            <label for="custom_period" class="col-form-label">Custom Period (days):</label>
            <div class="input-group">
              <button type="button" class="btn btn-outline-secondary" id="decrement">-</button>
              <input type="number" name="custom_period" id="custom-period-input" class="form-control" value="1" min="1">
              <button type="button" class="btn btn-outline-secondary" id="increment">+</button>
            </div>
          </div>

          <!-- Booking Type 
          <div class="form-group">
            <label for="booking_type" class="col-form-label">Booking Type:<i class="text-danger">*</i></label>
            <select name="booking_type" class="form-control">
              <option value="">-- Select --</option>
              <option value="online">Online</option>
              <option value="manual">Manual</option>
            </select>
          </div>-->

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Reservation</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


