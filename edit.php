<?php
$userId = $_GET['id'];

include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);

if (!$user) {
    echo "Reservation not found!";
    exit();
}

if (isset($_POST['editBtn'])) {
    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $reservation_date = $_POST['reservation_date'];

    $userRepository->updateUser($id, $user_name, $reservation_date);

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
        <input type="hidden" name="id" value="<?=$user['id']?>"><br><br>
        <label for="user_name">User Name:</label>
        <input type="text" name="user_name" id="user_name" value="<?=$user['user_name']?>" required><br><br>
        <label for="reservation_date">Reservation Date:</label>
        <input type="date" name="reservation_date" id="reservation_date" value="<?=$user['reservation_date']?>" required><br><br>
        <input type="submit" name="editBtn" value="Save Changes"><br><br>
    </form>
</body>
</html