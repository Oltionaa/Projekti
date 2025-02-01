<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

$userId = $_GET['id']; 

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);



header("location:dashboardadmin.php");

?>