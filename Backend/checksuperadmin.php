<?php 
$checksuperadmin = "SELECT adnin FROM users WHERE username = '$_SESSION[username]'";
$resultofchecksuperadmin = mysqli_query($conn, $checksuperadmin);
$row = mysqli_fetch_assoc($resultofchecksuperadmin);
$superadmin = $row['admin'];

if ($superadmin != 2){
    header("location: permission-denied.php");
};

?>