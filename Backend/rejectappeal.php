<?php
    require_once "connect.php";
    require_once "checkadmin.php";

    // get username from the url
    if (isset($_GET['username'])) {
        // make a global variable for the username
        $username = $_GET['username'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reject Appeal</title>
</head>
<body>
    <form action="reject.php?username=<?php echo "$username"; ?>" method="POST">
        <label for="username">Reason:</label>
        <input type="text" name="reason" placeholder="Explain reject reason:">
        <button type="submit" value="Reject">Reject</button>
    </form>
</body>
</html>