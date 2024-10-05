@extends('dashboard_layout.app')

@section('content')

<h2>Expense Report</h2>

<form action="{{ route('expense_report.index') }}" method="GET" class="mb-4">
    <div class="form-row align-items-end">
        <div class="col-auto">
            <label for="month">Select Month:</label>
            <select name="month" id="month" class="form-control">
                <option value="">--Select Month--</option>
                @for($m = 1; $m <= 12; $m++)
                    <option value="{{ $m }}" {{ request('month') == $m ? 'selected' : '' }}>{{ DateTime::createFromFormat('!m', $m)->format('F') }}</option>
                @endfor
            </select>
        </div>
        <div class="col-auto">
            <label for="year">Select Year:</label>
            <select name="year" id="year" class="form-control">
                @for($y = date('Y'); $y >= 2000; $y--)
                    <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>{{ $y }}</option>
                @endfor
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search by Month</button>
        </div>
    </div>
</form>

<!-- Existing form for start and end date -->
<form action="{{ route('expense_report.index') }}" method="GET" class="mb-4">
    <div class="form-row align-items-end">
        <div class="col-auto">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
        </div>
        <div class="col-auto">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search by Date</button>
        </div>
    </div>
</form>

</form>

<div class="prinatbeleeee" id="printable-area"> 
 

@if($expenses->isNotEmpty())
    <h4>Expense Report</h4>
    @if(request('month'))
        <h5>Month: {{ DateTime::createFromFormat('!m', request('month'))->format('F') }} {{ request('year') }}</h5>
    @elseif(request('start_date') && request('end_date'))
        <h5>Report from {{ request('start_date') }} to {{ request('end_date') }}</h5>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1; @endphp
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $expense->expensetype->name }}</td>
                    <td>{{ number_format($expense->amount, 2) }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Total Amount: {{ number_format($totalAmount, 2) }}</h5>
@endif
</div>


<!-- Button ya kuprint ripoti -->
<button class="btn btn-success" onclick="printContent()">Print Report</button>


@endsection
