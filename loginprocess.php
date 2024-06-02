<?php
// Perform login authentication here...

// Assuming the login is successful
// Redirect to the homepage after 10 seconds
header("refresh:10;url=index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>
<body>
    <h1>Login Successful</h1>
   
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

// Process login form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, login successful
        echo ' <p>You will be redirected to the homepage in 10 seconds. If not, <a href="index.php">click here</a>.</p>';
    } else {
        // Password is incorrect
        echo "Incorrect password";
    }
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
