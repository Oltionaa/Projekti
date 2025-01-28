<?php

include_once 'userRepository.php';
include_once 'userrrpt2.php';

if (isset($_POST['registerBtn'])) {
   
    if (empty($_POST['user_id']) || empty($_POST['user_name']) || empty($_POST['package_name']) || empty($_POST['price']) || empty($_POST['reservation_date'])) {
        echo "Fill all fields!";
    } else {
        
        $user_id = $_POST['user_id'];  
        $user_name = $_POST['user_name'];  
        $package_name = $_POST['package_name']; 
        $price = $_POST['price'];  
        $reservation_date = $_POST['reservation_date'];  

     
        $id = rand(1000, 9999);  
       
        $user = new User($id, $user_id, $user_name, $package_name, $price, $reservation_date);

  
        $userRepository = new UserRepository();
        
        
        $userRepository->insertUser($user);
    }
}
?>