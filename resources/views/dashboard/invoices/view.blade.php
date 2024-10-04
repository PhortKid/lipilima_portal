<!-- Modal for viewing an invoice -->
<div class="modal fade" id="ViewInvoice{{ $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Invoice #{{ $invoice->invoice_number }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Customer: {{ $invoice->customer->firstname }} {{ $invoice->customer->lastname }}</h5>
                <p>Address: {{ $invoice->customer->address }}</p>
                <p>Issue Date: {{ $invoice->issue_date }}</p>
                <p>Payment Info: {{ $invoice->payment_info }}</p>
                
                <h4>Invoice Items</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->invoiceItems as $item)
                            <tr>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->subtotal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5 class="text-right">Total Amount: {{ $invoice->total_amount }}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
