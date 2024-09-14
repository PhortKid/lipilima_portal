

<div class="modal fade" id="ViewReservation{{$reservation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog   modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Reservation</h5>
      
      </div>
      <div class="modal-body">

      <div class="table-wrapper border-primary" id="printable-area" >
 
  <div class="table-container border-primary">
    <!-- Row for Guest Names -->
    <div class="row border-primary">
      <div class="col name border-primary ">Guest Names</div>
      <div class="col value">#</div>
    </div>
    <!-- Row for Room No -->
    <div class="row border-primary">
      <div class="col name border-primary">Room No</div>
      <div class="col value">{{$reservation->room_id}}</div>
    </div>
    <!-- Row for Number Of Guests -->
    <div class="row border-primary">
      <div class="col name border-primary">Number Of Guests</div>
      <div class="col value">{{$reservation->number_of_guests}}</div>
    </div>
    <!-- Row for Period To Stay -->
    <div class="row border-primary">
      <div class="col name border-primary">Period To Stay</div>
      <div class="col value">{{$reservation->period_to_stay}}</div>
    </div>
    <!-- Row for Room Price -->
    <div class="row border-primary">
      <div class="col name border-primary">Room Price</div>
      <div class="col value">{{$reservation->room_price}}</div>
    </div>
    <!-- Row for Check-in Date -->
    <div class="row border-primary">
      <div class="col name border-primary">Check-in Date</div>
      <div class="col value">{{$reservation->check_in_date}}</div>
    </div>
    <!-- Row for Check-out Date -->
    <div class="row border-primary">
      <div class="col name border-primary">Check-out Date</div>
      <div class="col value">{{$reservation->check_out_date}}</div>
    </div>
    <!-- Row for Date Created -->
    <div class="row border-primary">
      <div class="col name border-primary">Date Created</div>
      <div class="col value">{{$reservation->created_at}}</div>
    </div>
    <!-- Row for Total Amount -->
    <div class="row border-primary">
      <div class="col name border-primary">Total Amount</div>
      <div class="col value">{{$reservation->total_price}}/= Tsh</div>
    </div>
  </div>
  
</div>

        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button onclick="printContent()" class="btn btn-secondary">Print Reservations <i class="fa fa-print"></i></button>
        

        <button id="export-excel" class="btn btn-primary">Export to Excel <i class="fa fa-file-excel" ></i></button>
        <button id="export-csv" class="btn btn-primary">Export to CSV <i class="fa fa-file-alt" ></i></button>
      </div>
      
    </div>
  </div>
</div>






  



