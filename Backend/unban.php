<?php
    require_once "connect.php";
    require_once "checkadmin.php";


    // checks if there is a username in the url
    if (isset($_GET['username'])) {

    // Get the username from the URL
    $username = $_GET['username'];
    // Unban the user
    $sql = "UPDATE users SET banned = 0, ban_reason = 'null', banned_by = 'null' WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    // Delete the appeal
    $sql = "DELETE FROM appeals WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // print unban success message
    if ($result) {
        echo "User unbanned!";
        
    } else {
        echo "Error unbanning user!";
    }

    // Redirect to the unban page
    header("Location: unban_user.php");
} else {
    //
}

           
        ?>