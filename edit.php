<?php
session_start();

include_once 'userRepository.php';

if (!isset($_SESSION['name'])) {
    die("Ju duhet të bëheni log in në mënyrë që t’i shihni rezervimet.");
}

$user_name = $_SESSION['name'];  

$userRepository = new UserRepository();

$user = $userRepository->getUserByName($user_name);

if (!$user) {
    echo "Rezervimi nuk u gjet!";
    exit();
}

if (isset($_POST['editBtn'])) {
    $new_user_name = $_POST['user_name']; 
    $reservation_date = $_POST['reservation_date']; 

    
    $userRepository->updateUser($user_name, $new_user_name, $reservation_date); 

    
    $_SESSION['name'] = $new_user_name; 

   
    header("location: Reservations.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h3>Edit Reservation</h3>
    <form action="" method="post">
        <input type="hidden" name="user_name" value="<?=$user['user_name']?>"><br><br>
        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name" value="<?=$user['user_name']?>" required><br><br>
        <label for="reservation_date">Reservation Date:</label>
        <input type="date" name="reservation_date" id="reservation_date" value="<?=$user['reservation_date']?>" required><br><br>
        <input type="submit" name="editBtn" value="Save Changes"><br><br>
    </form>
</body>
</html>