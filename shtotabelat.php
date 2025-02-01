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
    $user_name = $_POST['user_name'];
    $package_name = $_POST['package_name'];
    $price = $_POST['price'];
    $reservation_date = $_POST['reservation_date'];  

    $stmt = $conn->prepare("INSERT INTO reservations (user_name, package_name, price, reservation_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $user_name, $package_name, $price, $reservation_date);

    if ($stmt->execute()) {
        echo "Rezervimi u shtua me sukses! <a href='listatabelave.php'>Shiko rezervimet</a>";
    } else {
        echo "Gabim: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>