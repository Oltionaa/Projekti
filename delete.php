<?php

$userId = $_GET['id']; 

<<<<<<< HEAD
include_once 'userRepository.php';
=======

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);

<<<<<<< HEAD
header("location:Reservations.php");
exit();
?>
=======

header("location:Reservations.php");

?>
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
