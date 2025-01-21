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

// Kontrollo nëse të dhënat janë dërguar me POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Statusi = $_POST['Statusi'];
    $Destinacioni = $_POST['Destinacioni'];
    

    // Deklaratë e përgatitur për futjen e të dhënave
    $stmt = $conn->prepare("INSERT INTO Rezervimi (Statusi, Destinacioni) VALUES (?, ?)");
    $stmt->bind_param("ss", $Statusi, $Destinacioni);

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

