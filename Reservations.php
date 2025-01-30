<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['admin_id'])) {
    die("Ju duhet të bëheni log in në mënyrë që t’i shihni rezervimet e juaja.");
}

$user_id = $_SESSION['user_id'] ?? null;
$admin_id = $_SESSION['admin_id'] ?? null;

include_once 'userRepository.php';  
$userRepository = new UserRepository();

if ($user_id) {
    $reservations = $userRepository->getUserReservations($user_id);
} elseif ($admin_id) {
    $reservations = $userRepository->getAllReservations(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboardadmin.css">
</head>
<body>
  <div class="dashboard">
  
    <aside class="sidebar">
      <div class="sidebar-header">
        <h3>My Status</h3>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li><a href="#">Reservations</a></li>
          <li> <a href='home.php'>Home</a></li>
          <li> <a href='logout.php'>Logout</a></li>
         
        </ul>
      </nav>
    </aside>

   
    <main class="main-content">
      <header class="header">
        <h1>Profile</h1>
        <p> .</p>
      </header>


      <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Shto Rezervimin</title>
</head>
<body>

 
<table border="1">
     
     <tr>
         <th>ID</th>
         <th>user_id</th>
         <th>user_name</th>
         <th>package_name</th>
         <th>price</th>
         <th>reservation_date</th>
         <th>Edit</th> 
         <th>Delete</th> 
     </tr>

     <?php 

     include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

     $userRepository = new UserRepository();

     $reservations = $userRepository->getUserReservations($user_id);  

    
     foreach($reservations as $reservation){
      echo "
      <tr>
          <td>{$reservation['id']}</td>
          <td>{$reservation['user_id']}</td>
          <td>{$reservation['user_name']}</td>
          <td>{$reservation['package_name']}</td>
          <td>{$reservation['price']}</td>
          <td>{$reservation['reservation_date']}</td>
          <td><a href='edit.php?id={$reservation['id']}'>Edit</a></td>
          <td><a href='delete.php?id={$reservation['id']}'>Delete</a></td>
      </tr>
      ";
}

     ?>
 </table>
   
</body>
</html>
