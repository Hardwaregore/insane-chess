<?php
    require_once "connect.php";
    session_start();
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $reason = "null";
                $banned_by = "null";

                $sql = "UPDATE users SET banned = 0, ban_reason = '$reason', banned_by = '$banned_by' WHERE username = '$username';";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "User Unbanned!";
                    
                } else {
                    echo "Error Unbanning user!";
                }
            }
        ?>