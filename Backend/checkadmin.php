<?php 
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// checks if the user is an admin by checking the sql database
$checkadminagain = "SELECT admin FROM users WHERE username = '".$_SESSION["username"]."'";
$resultofcheckadminagain = mysqli_query($conn, $checkadminagain);
$row = mysqli_fetch_assoc($resultofcheckadminagain);
$admin = $row['admin'];

if ($admin == 0){
    header("location: permission-denied.php");
}
?>