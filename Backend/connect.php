<?php
$hostname = "localhost";
$username = "connect";
$password = "SQLpasswd1234";
$database = "insanechess";


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>