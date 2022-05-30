<?php 
    require_once "connect.php";
    require_once "checkadmin.php";
?>

<html>
    <head>
        <title>Ban a user</title>
    </head>

    <body>
        <h1>Ban a user</h1>
        <form action="unban.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Unban">
        </form>
       
    </body>
</html>