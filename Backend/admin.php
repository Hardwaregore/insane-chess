<?php
// Initialize the session

require_once "connect.php";
require_once "checkadmin.php";




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
    <h4 class="my-5">Viewing admin pannel as: <?php echo htmlspecialchars($_SESSION["username"]); ?></h4>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-warning">Destroy Session</a>
    </p>

    <div>
        <br>
            <a href = "ban_user.php" class = "btn btn-danger">Ban User</a>
            <a href = "unban_user.php" class = "btn btn-danger">Unban User</a>
            <a href = "promote_user.php" class = "btn btn-danger">Promote User</a>
            <a href = "demote_user.php" class = "btn btn-danger">Demote User</a>
        </br>
    </div>
</body>
</html>