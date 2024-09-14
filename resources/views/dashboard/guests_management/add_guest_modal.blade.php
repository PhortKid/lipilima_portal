

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Guest</h5>
      
      </div>
      <div class="modal-body">
        <form action="{{route('guest_management.store')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="Firstname" class="col-form-label">  Firstname:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="Firstname" name="firstname" required>
          </div>
          <!-- Middlename -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Middlename:</label>
            <input type="text" class="form-control" id="recipient-name" name="middlename">
          </div>
             <!-- Lastname -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Lastname:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required>
          </div>

              <!-- Booking Type -->
          <div class="form-group">
            <label for="booking_type" class="col-form-label"> Booking Type<i class="text-danger">*</i></label>
            <select name="booking_type" class="form-control"  id="" >
            <option>-- Select --</option>
              <option value="online">Online</option>
              <option value="manual">Manual</option>
            </select>
          </div>

             <!-- Country -->
          <div class="form-group">
            <label for="country" class="col-form-label">Country:<i class="text-danger">*</i></label>
            <select name="country" class="form-control"  id="">
            <option>-- Select --</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Kenya">Kenya</option>
              <option value="Uganda">Uganda</option>
              <option value="UK">UK</option>
            </select>
          </div>

              <!-- Address -->
          <div class="form-group">
            <label for="address" class="col-form-label"> Address:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="address" name="address">
          </div>

             <!-- Email -->
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

             <!-- Phone number -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone number:</label>
            <input type="text" class="form-control" id="recipient-name" name="phone_number">
          </div>

                <!-- id_or_passport_number -->
          <div class="form-group">
            <label for="id_or_passport_number" class="col-form-label"> ID or Passport No :<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="id_or_passport_number" name="id_or_passport_number">
          </div>

              <!-- next_of_kin_name -->
          <div class="form-group">
            <label for="next_of_kin_name" class="col-form-label">Next of kin:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="field " name="next_of_kin_name">
          </div>

             <!-- next_of_kin_phone_number -->
          <div class="form-group">
            <label for="next_of_kin_phone_number" class="col-form-label"> Next of kin Phonenumber :<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="next_of_kin_phone_number" name="next_of_kin_phone_number">
          </div>
        
        

          <!-- gender -->
          <div class="form-group">
            <label for="gender" class="col-form-label"> Gender:<i class="text-danger">*</i></label>
            <select name="gender" class="form-control"  id="" >
            <option>-- Select --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>



 

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Guest </button>
      </div>
      </form>
    </div>
  </div>
</div>






  



