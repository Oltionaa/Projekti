<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $role = $_POST['role'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO userss (name, email,Password, role) VALUES ( ?, ?, ?,?)");
    if (!$stmt) {
        die("Gabim në deklaratën SQL: " . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);

    

    if ($stmt->execute()) {
        echo "Useri u shtua me sukses! <a href='lista_tabelave.php'>Shiko userin</a>";
    } else {
        echo "Gabim: " . $stmt->error;
    }

    $stmt->close();
}




$conn->close();

?>
