

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Room Group</h5>
      
      </div>
      <div class="modal-body">
        <form action="{{route('room_type_management.store')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cost:</label>
            <input type="text" class="form-control" id="recipient-name" name="cost">
          </div>

 
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Room Group</button>
      </div>
      </form>
    </div>
  </div>
</div>






  



