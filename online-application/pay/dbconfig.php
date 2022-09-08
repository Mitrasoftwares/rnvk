<?php
$dbhost = "localhost";
$dbuser = "rnvk_rnvk";
$dbpass = "rnvk@123456";
$dbname = "rnvk_rnvk";
// mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
// mysql_select_db($dbname) or die('database selection problem');


$connect = new mysqli("localhost","$dbuser","$dbpass","$dbname");

// Check connection
if ($connect -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connect -> connect_error;

}
?>