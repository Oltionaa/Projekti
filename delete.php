<?php

$userId = $_GET['id']; 

include_once 'userRepository.php';

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);

header("location:Reservations.php");
exit();
?>