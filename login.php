<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process login authentication here...
    // Assuming the login is successful
    $_SESSION['loggedin'] = true;

    // Set session expiration time to 2 hours
    $_SESSION['expire_time'] = time() + (2 * 60 * 60); // 2 hours

    // Redirect to the homepage
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<marquee behavior="scroll" direction="left">
            Welcome to our Online Invoice Management System. Quickly login to get started. Thank you for choosing us...
        </marquee>
    </div>

    <div class="login-container">
        <form action="/loginprocess.php" method="post" class="login-form">
        <div class="logo-container">
                <a href="/index.php" class="logo">Babryt</a>
            </div>
        <br>

            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>

                <p>Don't have an account?</p> 
                <a href="/sign_up.php" class="link"><p>Sign Up Now</p></a>
            </div>
        </form>
    </div>

    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.link {
    text-decoration: none;
    color: #24651b;
    font-weight: bold;
    transition: color 0.3s;
}

.link:hover {
    color: #0056b3;
}


.logo-container {
    text-align: center;
}

.logo {
    font-size: 25px;
    font-weight: 600;
    color: #24651b; 
    text-decoration:overline
}

.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.form-group button {
    width: 100%;
    padding: 10px;
    background-color: #24651b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-group button:hover {
    background-color: #0056b3;
}

    </style>
</body>
</html>
