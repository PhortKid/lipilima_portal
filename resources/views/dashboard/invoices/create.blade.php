@extends('dashboard_layout.app')

@section('content')
<div class="container">
    <h2>Create Invoice</h2>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Invoice Number</label>
            <input type="text" name="invoice_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Customer</label>
            <select name="customer_id" class="form-control" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->firstname }} {{ $customer->lastname }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Issue Date</label>
            <input type="date" name="issue_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Payment Info</label>
            <input type="text" name="payment_info" class="form-control" required>
        </div>

        <h4>Invoice Items</h4>
        <div id="items">
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="items[0][description]" class="form-control" required>
                <label>Quantity</label>
                <input type="number" name="items[0][quantity]" class="form-control" required>
                <label>Price</label>
                <input type="number" name="items[0][price]" class="form-control" required>
            </div>
        </div>

        <button type="button" class="btn btn-secondary" onclick="addItem()">Add Another Item</button>
        <br><br>
        <button type="submit" class="btn btn-primary">Create Invoice</button>
    </form>
</div>

<script>
function addItem() {
    var itemsDiv = document.getElementById("items");
    var itemCount = itemsDiv.children.length;
    var newItemDiv = document.createElement("div");
    newItemDiv.classList.add('form-group');
    newItemDiv.innerHTML = `
        <label>Description</label>
        <input type="text" name="items[${itemCount}][description]" class="form-control" required>
        <label>Quantity</label>
        <input type="number" name="items[${itemCount}][quantity]" class="form-control" required>
        <label>Price</label>
        <input type="number" name="items[${itemCount}][price]" class="form-control" required>
    `;
    itemsDiv.appendChild(newItemDiv);
}
</script>
@endsection
