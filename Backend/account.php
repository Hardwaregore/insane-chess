<?php
// Initialize the session

require_once "connect.php";


session_start();;

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
};

$checkbanned = "SELECT banned FROM users WHERE username = '$_SESSION[username]'";
$resultofcheckbanned = mysqli_query($conn, $checkbanned);
$row = mysqli_fetch_assoc($resultofcheckbanned);
$banned = $row['banned'];

if ($banned == 1){
    header("location: ../urbanned.php");
}


$checksuperadmin = "SELECT admin FROM users WHERE username = '$_SESSION[username]';";
$resultofchecksuperadmin = mysqli_query($conn, $checksuperadmin);
$row = mysqli_fetch_assoc($resultofchecksuperadmin);
$superadmin = $row['admin'];

if ($superadmin == 2){
    header("location: superadmin.php");
};


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h4 class="my-5">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h4>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </p>
</body>
</html>