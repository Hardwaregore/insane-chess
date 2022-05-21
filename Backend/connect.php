<?php
$hostname = "localhost";
$username = "phpconnect";
$password = "PHPpasswd1234";
$database = "insanechess";


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>