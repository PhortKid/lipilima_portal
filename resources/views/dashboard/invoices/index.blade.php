@extends('dashboard_layout.app')

@section('content')
<div class="container">
    <h2>Invoices</h2>
    <a href="{{ route('invoices.create') }}" class="btn btn-primary mb-3">Create New Invoice</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Invoice Number</th>
                <th>Customer</th>
                <th>Issue Date</th>
                <th>Total Amount</th>
                <th>Payment Info</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ $invoice->customer->firstname }} - {{ $invoice->customer->address }}</td>
                    <td>{{ $invoice->issue_date }}</td>
                    <td>{{ $invoice->total_amount }}</td>
                    <td>{{ $invoice->payment_info }}</td>
                    <td>
                        <!-- Eye icon to trigger modal -->
                        <a href="#" class="text-primary" data-toggle="modal" data-target="#ViewInvoiceModal" 
                           data-invoice-id="{{ $invoice->id }}"
                           data-invoice-number="{{ $invoice->invoice_number }}"
                           data-customer="{{ $invoice->customer->firstname }} {{ $invoice->customer->lastname }}"
                           data-issue-date="{{ $invoice->issue_date }}"
                           data-payment-info="{{ $invoice->payment_info }}"
                           data-total-amount="{{ $invoice->total_amount }}"
                           data-items="{{ json_encode($invoice->invoiceItems) }}">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="ViewInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="ViewInvoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewInvoiceModalLabel">Invoice Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Tabela ya Kuonyesha Matokeo -->
            <div class="prinatbeleeee" id="printable-area"> 

            <div class="modal-body">
                <h5 id="modal-invoice-number"></h5>
                <p><strong>Customer:</strong> <span id="modal-customer"></span></p>
                <p><strong>Issue Date:</strong> <span id="modal-issue-date"></span></p>
                <p><strong>Payment Info:</strong> <span id="modal-payment-info"></span></p>
                <h5>Invoice Items</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody id="modal-invoice-items">
                        <!-- Items will be populated here by JavaScript -->
                    </tbody>
                </table>
                <h5 class="text-right">Total Amount: <span id="modal-total-amount"></span></h5>
            </div>
                    </div><!-- printable area -->


            <div class="modal-footer">
            <button class="btn btn-success" onclick="printContent()">Print Report</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div> <tr>
        <!--
                    <td>${item.description}</td>
                    <td>${item.quantity}</td>
                    <td>${item.price}</td>
                    <td>${item.subtotal}ll</td>
                </tr> -->
            `
</div>

@endsection

