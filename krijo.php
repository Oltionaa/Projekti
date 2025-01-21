<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boundlesstravel";

// Krijo lidhjen
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

// Krijo tabelën REZERVIMI
$sql = "CREATE TABLE IF NOT EXISTS Rezervimi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Statusi VARCHAR(255) NOT NULL,
    Destinacioni VARCHAR(255) NOT NULL,
    Data INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'Rezervimi' u krijua me sukses.<br>";
} else {
    echo "Gabim gjatë krijimit të tabelës 'Rezervimi': " . $conn->error . "<br>";
}


// Krijo tabelën Klienti
$sql = "CREATE TABLE IF NOT EXISTS Klienti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Emri VARCHAR(255) NOT NULL,
    Mbiemri VARCHAR(255) NOT NULL,
    Email VARCHAR(300) NOT NULL,
    Pagesa DECIMAL(10, 2) NOT NULL,
    Data DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'Klienti' u krijua me sukses.<br>";
} else {
    echo "Gabim gjatë krijimit të tabelës 'Klienti': " . $conn->error . "<br>";
}


// Krijo tabelën users
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    CONSTRAINT email_unique UNIQUE (email)
) ENGINE=InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'Users' u krijua me sukses.<br>";
} else {
    echo "Gabim gjatë krijimit të tabelës 'Users': " . $conn->error . "<br>";
}


// Krijo tabelën bookings
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    Shteti VARCHAR(255) NOT NULL,
    Cmimi DECIMAL(10, 2) NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'Bookings' u krijua me sukses.<br>";
} else {
    echo "Gabim gjatë krijimit të tabelës 'Bookings': " . $conn->error . "<br>";
}

$conn->close();
?>
