<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
</head>
<body>

 
    <table border="1">
     
        <tr>
        <th>ID</th>
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

        $users = $userRepository->getAllUsers(); 


        foreach($users as $user){
            echo 
            "
           <tr>
      <td>{$user['id']}</td>
      <td>{$user['user_name']}</td>
      <td>{$user['package_name']}</td>
      <td>{$user['price']}</td>
      <td>{$user['reservation_date']}</td>
      <td><a href='editadmin.php?id={$user['id']}'>Edit</a></td>
      <td><a href='deleteadmin.php?id={$user['id']}'>Delete</a></td>
    </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
