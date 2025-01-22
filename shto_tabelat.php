<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";

// Krijo lidhjen
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

// Kontrollo nëse të dhënat janë dërguar me POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Destinacioni = $_POST['Destinacioni'];
    
    // Deklaratë e përgatitur për futjen e të dhënave
    $stmt = $conn->prepare("INSERT INTO Rezervimi (Emri, Mbiemri, Destinacioni) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Emri, $Mbiemri, $Destinacioni);

    if ($stmt->execute()) {
        echo "Rezervimi u shtua me sukses! <a href='lista_tabelave.php'>Shiko Rezervimin</a>";
    } else {
        echo "Gabim: " . $stmt->error;
    }

    $stmt->close();
}

// Mbyll lidhjen
$conn->close();
?>
