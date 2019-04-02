<?php
$servername = "rds-mysql.c1gq3pfkcajq.us-east-1.rds.amazonaws.com";//endpoint
$username = "arvind";//db user name
$password = "mxz32k11hf";//db password
$dbname = "phpapp"; // database user
$firstname = $_POST["fname"];
$email = $_POST["email"];
$message = $_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed1: " . $conn->connect_error);
} else {
echo "New record created successfully";
}
$conn->close();
?>
