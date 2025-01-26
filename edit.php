<?php
$userId = $_GET['id'];

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

$userRepository = new UserRepository();


$user = $userRepository->getUserById($userId);


if (!$user) {
    echo "Reservation not found!";
    exit(); 
}


if (isset($_POST['editBtn'])) {
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $package_name = $_POST['package_name'];
    $price = $_POST['price'];
    $reservation_date = $_POST['reservation_date'];

    $userRepository->updateUser($id, $user_id, $user_name,$package_name,$price,$reservation_date);


    header("location:Reservations.php");
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
    <h3>Edit User</h3>
    <form action="edit.css" method="post">
   
        <input type="hidden" name="id" value="<?=$user['id']?>"> <br> <br>
        <input type="hidden" name="user_id" value="<?=$user['user_id']?>"> <br> <br>

        <input type="user_name" name="user_name" value="<?=$user['user_name']?>"> <br> <br>

        <input type="package_name" name="package_name" value="<?=$user['package_name']?>"> <br> <br>
        <input type="reservation_date" name="reservation_date" value="<?=$user['reservation_date']?>"> <br> <br>
   

        <input type="submit" name="editBtn" value="Save Changes"> <br> <br>
    </form>
</body>
</html>
