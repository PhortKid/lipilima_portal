

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
      
      </div>
      <div class="modal-body">
        <form action="{{route('rooms_management.store')}}" method="POST">
        @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Room No:</label>
            <input type="text" class="form-control" id="recipient-name" name="room_no" >
          </div>

            <!-- rOOM tYPE -->
          <div class="form-group">
            <label for="room_type" class="col-form-label">Room type</label>
            <select name="room_type" class="form-control "  id="" >
              @foreach($room_types as $room_type)
              <option value="{{$room_type->name}}">{{$room_type->name}}-{{$room_type->cost}}</option>
              @endforeach
            </select>
          </div>

 

          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control "  id="" >
              <option value="available">Available</option>
              <option value="occupied">Occupied</option>
              <option value="maintainance">Maintainance</option>
            </select>
          </div>



 

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Room </button>
      </div>
      </form>
    </div>
  </div>
</div>






  



