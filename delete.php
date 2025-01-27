<?php

$userId = $_GET['id']; 

<<<<<<< HEAD
<<<<<<< HEAD
include_once 'userRepository.php';
=======

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);

<<<<<<< HEAD
<<<<<<< HEAD
header("location:Reservations.php");
exit();
?>
=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f

header("location:Reservations.php");

?>
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
