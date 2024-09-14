

<div class="modal fade" id="EditRoomType{{$room_type->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Room</h5>
      
      </div>
      <div class="modal-body">
      {!! html()->form('PUT', route('room_type_management.update', $room_type->id))->open() !!}
       
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="name" value="{{$room_type->name}}">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cost:</label>
            <input type="text" class="form-control" id="recipient-name" name="cost" value="{{$room_type->cost}}">
          </div>

         
          @csrf
          {!! html()->hidden('_method', 'PUT') !!}
          

       


        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Room Group</button>
        
      </div>
      {!! html()->form()->close() !!}
    </div>
  </div>
</div>






  



