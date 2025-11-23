<?php

 	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


$servername = "127.0.0.1";
$username = "ulama2350245";
$password = "@l03e1t3";
$dbname = "ulama2350245";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>