

<div class="modal fade" id="DeleteExpense{{$income->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Expense</h5>
        
      </div>
      <div class="modal-body">
       
       Did you what to delete Expense  ??
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! html()->form('PUT', route('income_management.destroy', $income->id))->open() !!}
        @csrf
        {!! html()->hidden('_method', 'DELETE') !!}
        {!! html()->submit('Delete Expense')->class('btn btn-danger') !!}
      </div>
      {!! html()->form()->close() !!}
    </div>
  </div>
</div>






  


