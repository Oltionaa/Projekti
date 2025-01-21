<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";


$conn = new mysqli($host, $username, $password);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}


$conn->query("USE $dbname");


$sql = "CREATE TABLE userss (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'userss' u krijua me sukses!";
} else {
    echo "Gabim gjatë krijimit të tabelës: " . $conn->error;
}

$conn->close();
?>
