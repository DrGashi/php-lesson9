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
            <legend>Add User</legend>
            <form action="add.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Name"><br>
                <input type="text" name="surname" id="surname" placeholder="Surname"><br>
                <input type="email" name="email" id="email" placeholder="Email"><br><br>
                <button type="submit" name="submit">Add</button>
            </form>
        </fieldset>
    </body>
</html>