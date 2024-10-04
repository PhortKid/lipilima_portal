<?php
// Database connection


// Create connection
$conn = new mysqli('127.0.0.1', 'lplmtwr', 'KtFiTdnsSktChKYd', 'lplmtwr');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Insert customer
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];

    $conn->query("INSERT INTO customers (name, address) VALUES ('$customer_name', '$customer_address')");
    $customer_id = $conn->insert_id;

    // Insert invoice
    $invoice_number = $_POST['invoice_number'];
    $issue_date = $_POST['issue_date'];
    $payment_info = $_POST['payment_info'];

    $conn->query("INSERT INTO invoice (invoice_number, customer_id, issue_date, payment_info) 
                  VALUES ('$invoice_number', '$customer_id', '$issue_date', '$payment_info')");
    $invoice_id = $conn->insert_id;

    // Insert invoice items
    foreach ($_POST['items'] as $item) {
        $description = $item['description'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        $conn->query("INSERT INTO invoice_items (invoice_id, description, quantity, price) 
                      VALUES ('$invoice_id', '$description', '$quantity', '$price')");
    }

    echo "Invoice created successfully!";
}

// Fetch invoices
$result = $conn->query("SELECT i.invoice_id, i.invoice_number, i.issue_date, c.name, c.address, i.payment_info, 
                        SUM(ii.subtotal) AS total
                        FROM invoice i 
                        JOIN customers c ON i.customer_id = c.customer_id
                        JOIN invoice_items ii ON i.invoice_id = ii.invoice_id
                        GROUP BY i.invoice_id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice System</title>
</head>
<body>

<h1>Create Invoice</h1>
<form method="post" action="">
    <label>Customer Name: </label><input type="text" name="customer_name" required><br>
    <label>Customer Address: </label><input type="text" name="customer_address" required><br>
    <label>Invoice Number: </label><input type="text" name="invoice_number" required><br>
    <label>Issue Date: </label><input type="date" name="issue_date" required><br>
    <label>Payment Info: </label><input type="text" name="payment_info" required><br>

    <h3>Items</h3>
    <div id="items">
        <div>
            <label>Description: </label><input type="text" name="items[0][description]" required>
            <label>Quantity: </label><input type="number" name="items[0][quantity]" required>
            <label>Price: </label><input type="number" name="items[0][price]" required>
        </div>
    </div>
    <button type="button" onclick="addItem()">Add Another Item</button><br><br>
    
    <input type="submit" value="Create Invoice">
</form>

<h1>Invoices</h1>
<table border="1">
    <tr>
        <th>Invoice Number</th>
        <th>Customer</th>
        <th>Issue Date</th>
        <th>Total Amount</th>
        <th>Payment Info</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['invoice_number']; ?></td>
        <td><?php echo $row['name'] . "<br>" . $row['address']; ?></td>
        <td><?php echo $row['issue_date']; ?></td>
        <td><?php echo $row['total']; ?></td>
        <td><?php echo $row['payment_info']; ?></td>
    </tr>
    <?php } ?>
</table>

<script>
function addItem() {
    var items = document.getElementById("items");
    var count = items.children.length;
    var newItem = document.createElement("div");
    newItem.innerHTML = `<label>Description: </label><input type="text" name="items[${count}][description]" required>
                         <label>Quantity: </label><input type="number" name="items[${count}][quantity]" required>
                         <label>Price: </label><input type="number" name="items[${count}][price]" required>`;
    items.appendChild(newItem);
}
</script>

</body>
</html>
