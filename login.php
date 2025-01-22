<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);


    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($user->login($name, $password)) {
        header("Location: welcome.php"); // Drejto në dashboard pas login-it
        exit;
    } else {
        echo "Invalid login credentials!"; // Mesazh nëse emri ose fjalëkalimi janë gabim
    }
}
?>