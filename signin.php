<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo "Të gjitha fushat duhet të plotësohen!";
            exit;
        }

        if ($password !== $confirmPassword) {
            echo "Fjalëkalimi dhe konfirmimi nuk përputhen!";
            exit;
        }

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        echo 'Emri: ' . $name . '<br>';
        echo 'Email-i: ' . $email . '<br>';
        echo 'Fjalëkalimi: ' . $password . '<br>';

        header("Location: login.html"); 
        exit();
    } 
}
?>

