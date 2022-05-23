<?php

require_once "connect.php";
session_start();

// checks if the user is banned by checking the sql database
$checkbanned = "SELECT banned FROM users WHERE username = '$_SESSION[username]'";
$resultofcheckbanned = mysqli_query($conn, $checkbanned);
$row = mysqli_fetch_assoc($resultofcheckbanned);
$banned = $row['banned'];

if ($banned == 1){
    header("location: ../urbanned.php");
}else {
    header("location: ../index.php");
};


?>