<?php
session_start();
include 'database.php';  


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $dbConnection = new Database();
    $conn = $dbConnection->getConnection();

  
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bindParam(1, $username, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;

        header('Location: saverezervimi.php');
        exit;
    } else {
        echo "<script>alert('Përdoruesi ose fjalëkalimi është gabim!');</script>";
    }
}
?>

