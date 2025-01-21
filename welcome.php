<?php
session_start();

$Name = '';
$Password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Clean input values
    $username = trim($_POST['Name']);
    $password = trim($_POST['Password']);

    // Check credentials
    if ($username === $Name && $password === $Password) {
        $_SESSION['Name'] = $Name;
        header('Location: dashboard.php'); // Redirect to the dashboard
        exit();
    } else {
        echo "Perdoruesi ose fjalkalimi eshte i gabuar!";
    }
} else {
    header('Location: login.html'); // Redirect to the login page if no POST data
    exit();
}
