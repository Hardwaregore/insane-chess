<?php 
    require_once "connect.php";
    require_once "checkadmin.php";
?>

<html>
    <head>
        <title>Ban a user</title>
        <style>
            table, th, td {
                border:1px solid black;
                
            }
            tr:nth-child(even) {
                background-color: #D6EEEE;
            }
        </style>
    </head>

    <body>
        <!-- Puts all ban appeals in a table -->
        <!-- Admins can accept or reject the appeal by clinking on each row of the table -->
        <h1>Unban a user</h1>
        <table style="width:100%">
            <tr>
                <th>Username</th>
                <th>Appeal contents</th>
                <th>Accept / Reject Appeal</th>
            </tr>
            <?php
                $sql = "SELECT * FROM appeals";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['reason']."</td>";
                    echo "<td><a href='Backend/acceptappeal.php?id=".$row['id']."'>Accept</a> / <a href='Backend/rejectappeal.php?id=".$row['id']."'>Reject</a></td>";
                    echo "</tr>";
                }
            ?>

        </table>

    </body>
</html>