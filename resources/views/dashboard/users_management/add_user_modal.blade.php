

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register User</h5>
      
      </div>
      <div class="modal-body">
        <form action="{{route('users_management.store')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Firstname:</label>
            <input type="text" class="form-control" id="recipient-name" name="firstname">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Middlename:</label>
            <input type="text" class="form-control" id="recipient-name" name="middlename">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lastname:</label>
            <input type="text" class="form-control" id="recipient-name" name="lastname">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone number:</label>
            <input type="text" class="form-control" id="recipient-name" name="phone_number">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>

          <div class="form-group">
            <label for="gender" class="col-form-label">Gender</label>
            <select name="gender" class="form-control"  id="" >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>


          <div class="form-group">
            <label for="role" class="col-form-label">Role</label>
            <select name="role" class="form-control"  id="">
              <option value="Admin">Admin</option>
              <option value="Accountant">Accountant</option>
              <option value="Manager">Manager</option>
              <option value="Staff">Staff</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" class="form-control" id="recipient-name" name="password">
          </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register User</button>
      </div>
      </form>
    </div>
  </div>
</div>






  



