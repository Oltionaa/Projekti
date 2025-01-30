<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h3>Shto nje user</h3>
    <form action="shto_tabelat.php" method="post">
        <label for="Emri">Emri:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <label for="Password">Password:</label>
        <input type="text" name="Password" id="Password" required><br><br>

        <label for="role">Role:</label>
        <input type="text" name="role" id="role" required><br><br>

        <button type="submit">Shto Userin</button>





      
    </form>
</body>
</html>

