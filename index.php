
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Management System</title>
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
    <main>
        <section class="product-types">
            <h2>Types of Products</h2>
            <!-- Add images of product types -->
            <div class="product-images">
                <img src="./img/images.jpg" alt="Product 1">
                <img src="/img/wrist-watches.jpg" alt="Product 2">
                <!-- Add more product images as needed -->
            </div>
        </section>

        <div class="centered-button">
    <a href="/form.php" class="btn">Create New Invoice</a>
</div>
            <br><br>
<hr><hr>
<form action="/retrieve.php" method="GET" class="form1">
    <label for="tracking_id">Enter Tracking Number:</label>
    <input type="text" id="tracking_id" name="tracking_id" required>
    <input type="submit" value="Retrieve Order Details">
</form>
</div>
    </main>
    <footer>
        <p>&copy; 2024 Invoice Management System. All rights reserved.</p>
    </footer>
    

</body>
</html>

<style>
    .form1 {
        margin-bottom: 40px;
    }

    form {
        margin-bottom: 80px;
    }
</style>