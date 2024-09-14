

<div class="modal fade" id="ViewBook{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Info</h5>
      
      </div>
      <div class="modal-body">
     
      {!! html()->form('PUT', route('booking_management.update', $book->id))->open() !!}
        
           <!-- Firstname -->
          <div class="form-group">
            <label for="Firstname" class="col-form-label">  Firstname:</label>
            <input type="text" class="form-control" id="Firstname" name="firstname" required value="{{$book->firstname}}">
          </div>

            <!-- Lastname -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Lastname:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->lastname}}">
          </div>


          <!-- Email -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Email:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->email}}">
          </div>

        <!-- Phone number -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Phone number:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->phone_number}}">
          </div>

          <!-- Booking Date -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Checkin Date:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->checkin_date}}">
          </div>

                  <!-- Booking Date -->
                  <div class="form-group">
            <label for="Lastname" class="col-form-label"> Checkout Date:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->checkout_date}}">
          </div>

         <!-- Reservation Type 
           <div class="form-group">
            <label for="Lastname" class="col-form-label">  Reservation Type:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->reservation_type}}">
          </div>-->

         <!-- Room Price -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Room Price:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="not set" disabled>
          </div>

           <!-- Number of Days -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Number of Days:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->number_of_days}}">
          </div>
          @csrf
          <!-- Number of Guest -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Number of Guest:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->number_of_guest}}">
          </div>
         <input type="hidden" name="kill" value="op">
          <!-- Created at-->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Created at:</label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$book->number_of_guest}}">
          </div>


      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm </button>
        {!! html()->form()->close() !!}
        
      </div>
    
    </div>
  </div>
</div>






  



