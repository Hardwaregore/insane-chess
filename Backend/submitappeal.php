<?php
require_once "connect.php";
session_start();
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $reason = $_POST['reason'];


            $sql = "INSERT INTO appeals (username, reason) VALUES ('$username', '$reason');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Appeal Submitted!";
                
            } else {
                echo "Error submitting appeal!";
            }
        }
    ?>