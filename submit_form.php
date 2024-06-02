<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "invoice_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate a unique tracking ID
$tracking_id = uniqid();

$product_selection = $_POST['product_selection'];
$quantity = $_POST['quantity'];
$serial_number = $_POST['serial_number'];
$product_name = $_POST['product_name'];
$product_rate = $_POST['product_rate'];
$discount = $_POST['discount'];
$amount = $_POST['amount'];
$net_amount = $_POST['net_amount'];

// Store the form data in the database along with the tracking ID
$sql = "INSERT INTO product_requests (tracking_id, product_selection, quantity, serial_number, product_name, product_rate, discount, amount, net_amount)
VALUES ('$tracking_id', '$product_selection', '$quantity', '$serial_number', '$product_name', '$product_rate', '$discount', '$amount', '$net_amount')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="message-container"><div class="success-message">Your invoice has been successfully created. Tracking ID: ' . $tracking_id . '</div></div>';
} else {
    echo '<div class="message-container"><div class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</div></div>';
}

$conn->close();
?>

<div class="centered-button">
    <a href="/index.php" class="btn">Want to shop more?</a>
</div>

<style>
    .success-message {
    color: green;
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}

.error-message {
    color: red;
    font-weight: bold;
    margin-bottom: 10px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #24651b;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #0056b3;
}

.message-container {
    text-align: center;
}

.centered-button {
    text-align: center;
    margin-top: 20px;
}
</style>
