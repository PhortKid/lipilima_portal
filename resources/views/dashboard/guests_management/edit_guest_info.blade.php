

<div class="modal fade" id="EditGuest{{$guest->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Guest</h5>
      
      </div>
      <div class="modal-body">
      {!! html()->form('PUT', route('guest_management.update', $guest->id))->open() !!}
     

          @csrf
          {!! html()->hidden('_method', 'PUT') !!}
          
      

          <div class="form-group">
            <label for="Firstname" class="col-form-label">  Firstname:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="Firstname" name="firstname" required value="{{$guest->firstname}}">
          </div>
          <!-- Middlename -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Middlename:</label>
            <input type="text" class="form-control" id="recipient-name" name="middlename" value="{{$guest->middlename}}">
          </div>
             <!-- Lastname -->
          <div class="form-group">
            <label for="Lastname" class="col-form-label">  Lastname:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="Lastname" name="lastname" required value="{{$guest->lastname}}">
          </div>

              <!-- Booking Type -->
          <div class="form-group">
            <label for="booking_type" class="col-form-label"> Booking Type<i class="text-danger">*</i></label>
            <select name="booking_type" class="form-control"  id="" >
            <option selected(true)>{{$guest->booking_type}}</option>
              <option value="online">Online</option>
              <option value="manual">Manual</option>
            </select>
          </div>

             <!-- Country -->
          <div class="form-group">
            <label for="country" class="col-form-label">Country:<i class="text-danger">*</i></label>
            <select name="country" class="form-control"  id="">
            <option selected(true)>{{$guest->country}}</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Kenya">Kenya</option>
              <option value="Uganda">Uganda</option>
              <option value="UK">UK</option>
            </select>
          </div>

              <!-- Address -->
          <div class="form-group">
            <label for="address" class="col-form-label"> Address:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="address" name="address" value="{{$guest->address}}">
          </div>

             <!-- Email -->
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$guest->email}}">
          </div>

             <!-- Phone number -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone number:</label>
            <input type="text" class="form-control" id="recipient-name" name="phone_number" value="{{$guest->phone_number}}">
          </div>

       
              <!-- next_of_kin_name -->
          <div class="form-group">
            <label for="next_of_kin_name" class="col-form-label">Next of kin:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="field " name="next_of_kin_name" value="{{$guest->next_of_kin_name}}">
          </div>

             <!-- next_of_kin_phone_number -->
          <div class="form-group">
            <label for="next_of_kin_phone_number" class="col-form-label"> Next of kin Phonenumber :<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="next_of_kin_phone_number" name="next_of_kin_phone_number" value="{{$guest->next_of_kin_phone_number}}">
          </div>
        
        

                <!-- tribe -->
                <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tribe:</label>
            <input type="text" class="form-control" id="recipient-name" name="tribe" value="{{$guest->tribe}}">
          </div>



        <!-- id type  Passport, NIDA, Driving licenses -->
          <div class="form-group">
            <label for="id_type" class="col-form-label"> ID Type<i class="text-danger">*</i></label>
            <select name="id_type" class="form-control"  id="" >
        
            <option selected(true)>{{$guest->id_type}}</option>
            <option value="passport">Passport</option>
              <option value="nida">NIDA</option>
              <option value="driving">Driving lincenses</option>
            </select>
          </div>

      


          <!-- id_or_passport_number -->
          <div class="form-group">
            <label for="id_or_passport_number" class="col-form-label"> ID Number:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="id_or_passport_number" name="id_number" value="{{$guest->id_number}}">
          </div>

         <!--  ID_Issuing_Authority  -->
           <div class="form-group">
            <label for="id_issuing_authority" class="col-form-label">ID Issuing Authority:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="field " name="id_issuing_authority" value="{{$guest->id_issuing_authority}}">
          </div>


           <!--  id_expiration_date  -->
            <div class="form-group">
            <label for="id_expiration_date" class="col-form-label">ID Expiration Date:<i class="text-danger">*</i></label>
            <input type="date" class="form-control" id="field " name="id_expiration_date" value="{{$guest->id_expiration_date}}">
          </div>

             <!--  arriving_from  -->
             <div class="form-group">
            <label for="arriving_from" class="col-form-label">Arriving from:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="field " name="arriving_from" value="{{$guest->arriving_from}}">
          </div>

         <!-- occupation  -->
          <div class="form-group">
            <label for="occupation" class="col-form-label">Occupation:<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="field " name="occupation" value="{{$guest->occupation}}"> 
          </div>


            <!--  Purpose_of_Visit  -->
            <div class="form-group">
            <label for="purpose_of_visit" class="col-form-label">Purpose of Visit:<i class="text-danger">*</i></label>
            <textarea name="purpose_of_visit" class="form-control" id="field " >{{$guest->purpose_of_visit}}</textarea>
          </div>

      





          <!-- gender -->
          <div class="form-group">
            <label for="gender" class="col-form-label"> Gender:<i class="text-danger">*</i></label>
            <select name="gender" class="form-control"  id="" >
            <option selected(true)>{{$guest->gender}}</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>



 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Guest</button>
        
      </div>
      {!! html()->form()->close() !!}
    </div>
  </div>
</div>






  



