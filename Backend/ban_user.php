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
        <form action="ban.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="reason">Reason:</label>
            <input type="text" name="reason" id="reason">
            <label for="duration">Ban Duration:</label>
            <select name="ban_length">
                <option value="day">1 Day</option>
                <option value="week">1 Week</option>
                <option value="1month">1 Month</option>
                <option value="3months">3 Months</option>
                <option value="perm">Perm Ban</option>
            </select>
            <input type="submit" value="Ban">
        </form>
       
    </body>
</html>