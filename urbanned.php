<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insane chess</title>
    <?php
    require_once "Backend/connect.php";
    session_start();
     ?>
</head>
<body>
    <h2>Your account <?php echo"$_SESSION[username]"; ?> is perminantly banned from Insane Chess by <?php 
        $getbanby = "SELECT banned_by FROM users WHERE username = '$_SESSION[username]'";
        $resultofgetbanby = mysqli_query($conn, $getbanby);
        $row = mysqli_fetch_assoc($resultofgetbanby);
        echo $row['banned_by'];
    ?> for "<?php 
        $getbanreason = "SELECT ban_reason FROM users WHERE username = '$_SESSION[username]'";
        $resultofgetbanreason = mysqli_query($conn, $getbanreason);
        $row = mysqli_fetch_assoc($resultofgetbanreason);
        echo $row['ban_reason'];
    ?>"!</h2>
    <h3>You may submit a ban appeal <a href="Backend/appeal.php">here</a> to be unbanned.</h3>
</body>
</html>