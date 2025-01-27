<?php

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';
include_once 'C:\xampp\htdocs\Projekti-1\userrrpt2.php';

if (isset($_POST['registerBtn'])) {
    // Check if all required fields are filled
    if (empty($_POST['user_id']) || empty($_POST['user_name']) || empty($_POST['package_name']) || empty($_POST['price']) || empty($_POST['reservation_date'])) {
        echo "Fill all fields!";
    } else {
        // Retrieve the form values
        $user_id = $_POST['user_id'];  // The user ID (user enters this)
        $user_name = $_POST['user_name'];  // The user name
        $package_name = $_POST['package_name'];  // The package name
        $price = $_POST['price'];  // The price of the package
        $reservation_date = $_POST['reservation_date'];  // The reservation date

        // Generate a random ID for the user (a separate ID from the user_id)
        $id = rand(1000, 9999);  // Randomly generated ID

        // Create a new User object with the provided values
        $user = new User($id, $user_id, $user_name, $package_name, $price, $reservation_date);

        // Create an instance of UserRepository to handle user insertion
        $userRepository = new UserRepository();
        
        // Insert the user into the database
        $userRepository->insertUser($user);
    }
}
?>
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
