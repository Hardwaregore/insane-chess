<?php
    require_once "connect.php";
    session_start();
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $reason = $_POST['reason'];
                $banned_by = $_SESSION["username"];
                $ban_duration = $_POST['ban_length'];

                $sql = "UPDATE users SET banned = 1, ban_reason = '$reason', banned_by = '$banned_by', ban_duration = '$ban_duration' WHERE username = '$username';";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "User banned!";
                    
                } else {
                    echo "Error banning user! Please contact the WebServer Host!";
                }
            }
        ?>
