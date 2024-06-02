<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
 
    <script src="https://kit.fontawesome.com/54ea20056b.js" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

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

// Process sign-up form submission
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if username or email already exists
$check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    echo "<div class='message-container2'><p class='success-message2'>Account already exists. Please <a href='login.php' class='link'>login</a> or return to the <a href='index.php' class='link'>homepage</a>.</p>
  </div>";
exit();
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="message-container"><div class="success-message">Bravo <i class="fa-regular fa-face-kiss-beam"></i><i class="fa-regular fa-face-kiss-beam"></i>. Account created successfully.</div></div>';
} else {
    echo '<div class="message-container"><div class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</div></div>';
}

$conn->close();
?>

<div class="centered-button">
    <a href="/login.php" class="btn">Login Now</a>
</div>


<style>
    .success-message {
    color: green;
    font-weight: bold;
    margin-bottom: 10px;
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