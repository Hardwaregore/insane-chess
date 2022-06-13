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
    <?php 
        
        // checks if the user has an appeal
        $checkappeal = "SELECT appealed FROM appeals WHERE username = '$_SESSION[username]'";
        $resultofcheckappeal = mysqli_query($conn, $checkappeal);
        $checknull = mysqli_num_rows($resultofcheckappeal);

        if ($checknull > 0){
            $row = mysqli_fetch_assoc($resultofcheckappeal);
            $appealed = $row['appealed'];
            
        } else {
            $appealed = null;
        };

        // checks if the appeal has ben rejected
        $checkrejected = "SELECT rejected FROM appeals WHERE username = '$_SESSION[username]';";
        $resultofcheckrejected = mysqli_query($conn, $checkrejected);
        $checknull = mysqli_num_rows($resultofcheckrejected);

        if ($checknull > 0){
            $row = mysqli_fetch_assoc($resultofcheckrejected);
            $rejected = $row['rejected'];
        } else {
            $rejected = "null";
        }
        


        // get the rejection reason
        $getrejectreason = "SELECT reject_reason FROM appeals WHERE username = '$_SESSION[username]';";
        $resultofgetrejectreason = mysqli_query($conn, $getrejectreason);
        $checknull = mysqli_num_rows($resultofgetrejectreason);

        if ($checknull > 0){
            $row = mysqli_fetch_assoc($resultofgetrejectreason);
            $rejectreason = $row['reject_reason'];
        } else {
            $rejectreason = "null";
        }

        // checks if the appeal has been accepted
        $checkaccepted = "SELECT accepted FROM appeals WHERE username = '$_SESSION[username]';";
        $resultofcheckaccepted = mysqli_query($conn, $checkaccepted);
        $checknull = mysqli_num_rows($resultofcheckaccepted);

        if ($checknull > 0){
            $row = mysqli_fetch_assoc($resultofcheckaccepted);
            $accepted = $row['accepted'];
        } else {
            $accepted = "null";
        }

        echo "<br>";

        echo "<h3>Appeal status:</h3>";

        if ($appealed == 1 && $rejected == 1) {
            echo "<h3>Your last appeal was rejected by staff for '$rejectreason'.   NOTE: Spamming appeals may reault In your account being deleted. </h3>";
        } else if ($accepted == 0 && $rejected == 0) {
            echo "<h3>Your appeal has been sent to staff. You will be unbanned once staff has reviewed your appeal.</h3>";
        } else {
            echo "<h3>You have not submitted an appeal yet.</h3>";
        }
    ?>
</body>
</html>