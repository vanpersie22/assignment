<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Request Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        
<div class="navbar">
    <a href="/index.php" class="logo">Babryt</a>
    <div class="navbar-left">
    <a href="/index.php">Home</a>
    <a href="/form.php">Create New Invoice</a>
    <a href="sign_up.php">Sign Up</a>
    <a href="/login.php" class="btn2">Login</a>
</div>
            </header>

    <section class="">
        <form action="submit_form.php" method="post">
            <label for="product_selection">Product Selection:</label>
            <select id="product_selection" name="product_selection">
                <option value="product1">Product 1</option>
                <option value="product2">Product 2</option>
                <!-- Add more options as needed -->
            </select>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
            <br>
            <label for="serial_number">Serial Number:</label>
            <input type="text" id="serial_number" name="serial_number">
            <br>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name">
            <br>
            <label for="product_rate">Product Rate:</label>
            <input type="number" id="product_rate" name="product_rate" step="0.01">
            <br>
            <label for="discount">Discount ($):</label>
            <input type="number" id="discount" name="discount" step="0.01">
            <br>
            <label for="amount">Amount ($):</label>
            <input type="number" id="amount" name="amount" step="0.01">
            <br>
            <label for="net_amount">Net Amount ($):</label>
            <input type="number" id="net_amount" name="net_amount" step="0.01">
            <br>
            
            <input type="submit" value="Submit">
        </form>
        
</section>
    <br><br>
    <br><br><br>
    <footer>
        <p>&copy; Invoice Management System. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
