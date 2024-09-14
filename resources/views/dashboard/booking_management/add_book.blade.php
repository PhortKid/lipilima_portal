

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
            <label for="status" class="col-form-label">Guest</label>
            <select name="status" class="form-control"  id="" chosen-select>
              <option value="available">Available</option>
              <option value="not_available">Not Available</option>
            </select>
          </div>


        <div class="form-group">
            <label for="status" class="col-form-label">Room</label>
            <select name="status" class="form-control"  id="" chosen-select>
              <option value="available">Available</option>
              <option value="not_available">Not Available</option>
            </select>
          </div>


 

          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control"  id="">
              <option value="available">Available</option>
              <option value="not_available">Not Available</option>
            </select>
          </div>



 

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Book </button>
      </div>
      </form>
    </div>
  </div>
</div>






  



