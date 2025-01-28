<?php

$userId = $_GET['id']; 

include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);

<<<<<<< HEAD:deleteadmin.php

header("location:dashboardadmin.php");

?>
=======
header("location:Reservations.php");
exit();
?>
>>>>>>> 7ccec6771eae3e3a8075d643baa2c26946b14f3b:delete.php
