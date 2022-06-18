<?php 
    require_once "connect.php";
    require_once "checkadmin.php";
    
    // checks if the form was submitted blank
    if (isset($_POST['username'])) {
        // Get the username from the form
        $username = $_POST['username'];
        // Get the reason from the form
    } else {
        // print error message
        echo "No username given!";
        // redirect to unban user page in 1 second
        header("Refresh: 1; url=unban_user.php");
        exit;
    }


    // make the sql query
    $sql = "SELECT * FROM users WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    $row1 = mysqli_fetch_assoc($result);



    // checks if the query returned a result or a warning
    if (mysqli_num_rows($result) == 0) {
        // print error message
        echo "User not found!";
        // redirect to unban user page in 1 second
        header("Refresh: 1; url=unban_user.php");
        exit;
    }

    // checks if the user is permanently banned
    $checkperm = "SELECT ban_duration FROM users WHERE username = '$username'";
    $resultofcheckperm = mysqli_query($conn, $checkperm);
    $row = mysqli_fetch_assoc($resultofcheckperm);
    $ban_duration = $row['ban_duration'];
    
    if ($ban_duration == 'perm') {
        // print error message
        echo "You may not unban this user!<br>";
        // redirect to unban user page in 1 second
        header("Refresh: 3; url=unban_user.php");
        exit;
    }



    // check if the user is banned
    if (isset($row1['banned']) && $row1['banned'] == 1) {
        echo "The user $username is banned!<br>";
        echo "Ban reason: " . $row1['ban_reason'] . "<br>";
        echo "Banned by: " . $row1['banned_by'] . "<br>";
        echo "Unban user or cancel: <a href='unban.php?username=$username'>Unban</a> / <a href='unban_user.php'>Cancel</a>";
    } else {
        echo "The user $username is not banned!<br>";
        echo "$username";
        header("Refresh: 3; url=unban_user.php");
    }


?>