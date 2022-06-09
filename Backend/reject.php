<?php 
    require_once "connect.php";
    require_once "checkadmin.php";

    // gets the username from the url
    if (isset($_GET['username'])) {
        // make a global variable for the username
        $username = $_GET['username'];
    }
    // gets the reason from the form
    if (isset($_POST['reason'])) {
        $reason = $_POST['reason'];
    }

    // make the sql query
    $sql = "UPDATE appeals SET rejected = 1, reject_reason = '$reason' WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);


    // if the query was successful say success
    if ($result) {
        echo "Appeal rejected!";
        // redirect to the unban page
        header("Refresh: 1; url=unban_user.php");
    } else {
        echo "Error rejecting appeal!";
        // redirect to the unban page
        header("Refresh: 1; url=unban_user.php");
    }


?>