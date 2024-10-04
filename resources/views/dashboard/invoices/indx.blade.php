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
                    <td><a href="#" class="danger" data-toggle="modal" data-target="#ViewInvoice{{$invoice->id}}" data-whatever="@mdo"><i class="fa fa-eye text-primary"></i></a></td>
                    
                    @include('dashboard.invoices.view')
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
