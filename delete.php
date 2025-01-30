<?php

$userId = $_GET['id']; 

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);

header("location:Reservations.php");
exit();
?>