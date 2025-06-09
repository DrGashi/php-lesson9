<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <fieldset>
            <legend>Log in</legend>
            <form action="index.php" method="get">
                <input type="text" name="username" id="username" placeholder="Username"><br>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>
                <input type="submit" value="Submit">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $username = $_GET["username"];
    $password = $_GET["password"];
    echo $username;
    echo "<br>";
    echo $password;
?>