

<div class="modal fade" id="ViewTax{{$tax->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Tax</h5>
      
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
        @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tax Name:</label>
            <input type="text" class="form-control" id="recipient-name" disabled value="{{$tax->tax_name}}">
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tax Rate:</label>
            <input type="text" class="form-control" id="recipient-name" disabled value="{{$tax->rate}}">
          </div>

 

  <div class="accordion pt-2" id="accordionExample" >
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Description
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      {{$tax->description}}
      </div>
    </div>
  </div>
  
  
  </div>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
      </form>
    </div>
  </div>
</div>






  



