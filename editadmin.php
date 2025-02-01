<?php

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID përdoruesi është e pavlefshme.";
    exit();
}

$userId = $_GET['id']; 

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

$UserRepository = new UserRepository();


$user = $UserRepository->getUserById($userId); 

if ($user && is_array($user)) {
  
} else {
    echo "Përdoruesi nuk u gjet!";
    exit();
}

if (isset($_POST['editBtn'])) {
    $id = $_POST['id']; 
    $package_name = trim($_POST['package_name']);
    $price = floatval($_POST['price']);
    $reservation_date = $_POST['reservation_date'];

    $UserRepository->updateUseri($id, $package_name, $price, $reservation_date);

    header("location: Dashboardadmin.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="editadmin.css">
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <label for="package_name">Oferta:</label>
        <input type="text" name="package_name" value="<?= $user['package_name'] ?>" required> <br><br>

        <label for="price">Cmimi:</label>
        <input type="number" step="0.01" name="price" value="<?= $user['price'] ?>" required> <br><br>

        <label for="reservation_date">Data:</label>
        <input type="date" name="reservation_date" required> <br><br>

        <input type="submit" name="editBtn" value="Save Changes"> <br><br>
    </form>
</body>
</html>