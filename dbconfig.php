

<?php
$dbhost = "localhost";
$dbuser = "rnvk_rnvk";
$dbpass = "rnvk@123456";
$dbname = "rnvk_rnvk";

// Create connection
$connect = new mysqli("localhost","$dbuser","$dbpass","$dbname");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>