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
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // check if the user is banned
    if ($row['banned'] == 1) {
        // echos the ban reason, and banned by in a table

        
        echo "The user $username is banned!<br>";
        echo "Ban reason: " . $row['ban_reason'] . "<br>";
        echo "Banned by: " . $row['banned_by'] . "<br>";
        echo "Unban user or cancel: <a href='unban.php?username=$username'>Unban</a> / <a href='unban_user.php'>Cancel</a>";
    } else {
        // redirect to unban user page in 1 second
        echo "User is not banned!";
        header("Refresh: 1; url=unban_user.php");
        exit;
    }


?>