<?php
include_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $db = new Database();
    $connection = $db->getConnection();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $role = $_POST['role'];

    if ($password !== $confirmPassword) {
        die("Password dhe Confirm Password nuk përputhen!");
    }

    $checkEmailQuery = "SELECT id FROM userss WHERE email = :email";
    $stmt = $connection->prepare($checkEmailQuery);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        die("Ky email është i regjistruar tashmë!");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO userss (name, email, password, role) VALUES (:name, :email, :password, :role)";
    $stmt = $connection->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':role', $role);

    try {
        $stmt->execute();
        header("Location: login.php"); 
        exit; 
    } catch (PDOException $e) {
        echo "Gabim: " . $e->getMessage();
    }
}
?>