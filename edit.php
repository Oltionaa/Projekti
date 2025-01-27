<?php
$userId = $_GET['id'];

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
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
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f

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
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
