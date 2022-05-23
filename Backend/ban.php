<?php
    require_once "connect.php";
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $sql = "UPDATE users SET banned = 1 WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "User banned!";
                    
                } else {
                    echo "Error banning user!";
                }
            }
        ?>