<?php
$servername = "dev.cyebsjs4wlst.us-west-2.rds.amazonaws.com";//endpoint
$username = "";//db user name
$password = "";//db password
$dbname = ""; // database user
$firstname = $_POST["fname"];
$email = $_POST["email"];
$message = $_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO contact VALUES ('$firstname','$email','$message')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
