@extends('dashboard_layout.app')

@section('content')

<h2 class="text-center">Income Report</h2>

<!-- Form ya kuchagua tarehe za kuanzia na mwisho -->
<form action="{{ route('income.report') }}" method="GET">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="start_date" class="form-label">Start Date:</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label for="end_date" class="form-label">End Date:</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>
        <div class="col-md-4 pt-4">
            <button type="submit" class="btn btn-primary">Filter by Date</button>
        </div>
    </div>
</form>

<!-- Form ya kuchagua Mwezi -->
<form action="{{ route('income.report.byMonth') }}" method="GET" class="mt-3">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="month" class="form-label">Select Month:</label>
            <select name="month" class="form-control" required>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </div>
        <div class="col-md-4 pt-4">
            <button type="submit" class="btn btn-primary">Filter by Month</button>
        </div>
    </div>
</form>

<!-- Tabela ya Kuonyesha Matokeo -->
<div class="prinatbeleeee" id="printable-area"> 
   <h3> Income Reports</h3>
@if(isset($incomes) && count($incomes) > 0)

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1; $totalAmount = 0; @endphp
            @foreach($incomes as $income)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $income->incomecategory->name }}</td>
                <td>{{ number_format($income->amount, 2) }}</td>
                <td>{{ $income->date }}</td>
            </tr>
            @php $totalAmount += $income->amount; @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total</th>
                <th>{{ number_format($totalAmount, 2) }}</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
@else
    <p>No records found.</p>
@endif
</div>


<!-- Button ya kuchapisha ripoti -->
<button class="btn btn-success" onclick="printContent()">Print Report</button>

@endsection
