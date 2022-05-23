<?php 
    require_once "connect.php";
?>
<!-- html -->
<html>
    <head>
        <title>Ban a user</title>
    </head>

    <body>
        <h1>Ban a user</h1>
        <form action="ban.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <input type="text" name="reason" id="reason">
            <input type="submit" value="Ban">
        </form>
       
    </body>
</html>