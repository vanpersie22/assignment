<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #24651b;
        }

        p {
            margin: 10px 0;
        }

        strong {
            font-weight: bold;
        }

        .centered-button {
    text-align: center;
    margin-top: 20px;
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
    </style>
</head>
<body>

<div class="container">
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

    // Check if tracking ID is provided in the URL
    if(isset($_GET['tracking_id'])) {
        $tracking_id = $_GET['tracking_id'];

        // Query to fetch form details based on the tracking ID
        $sql = "SELECT * FROM product_requests WHERE tracking_id = '$tracking_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h2>Here are your Invoice details...</h2>";
                echo "<p><strong>Product Selection:</strong> " . $row["product_selection"] . "</p>";
                echo "<p><strong>Quantity:</strong> " . $row["quantity"] . "</p>";
                echo "<p><strong>Serial Number:</strong> " . $row["serial_number"] . "</p>";
                echo "<p><strong>Product Name:</strong> " . $row["product_name"] . "</p>";
                echo "<p><strong>Product Rate:</strong> $" . $row["product_rate"] . "</p>";
                echo "<p><strong>Discount ($):</strong> $" . $row["discount"] . "</p>";
                echo "<p><strong>Amount ($):</strong> $" . $row["amount"] . "</p>";
                echo "<p><strong>Net Amount ($):</strong> $" . $row["net_amount"] . "</p>";
            }
        } else {
            echo "<p>No results found for the provided tracking ID.</p>";
        }
    } else {
        echo "<p>Tracking ID not provided.</p>";
    }

    $conn->close();
    ?>

<div class="centered-button">
    <a href="/form.php" class="btn">Create New Order</a>
</div>
</div>

</body>
</html>
