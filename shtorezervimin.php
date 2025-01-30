<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Rezervim</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
  <h3>Shto një Rezervim</h3>
  <form action="shtotabelat.php" method="post">
      <label for="user_name">User name:</label>
      <input type="text" name="user_name" id="user_name" required><br><br>

      <label for="package_name">Package name:</label>
      <input type="text" name="package_name" id="package_name" required><br><br>

      <label for="price">Price:</label>
      <input type="text" name="price" id="price" required><br><br>

      <label for="reservation_date">Reservation date:</label>
      <input type="text" name="reservation_date" id="reservation_date" placeholder="YYYY-MM-DD" required><br><br>

      <button type="submit">Shto Rezervimin</button>
  </form>
</body>
</html>
