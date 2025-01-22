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

// Kërko të dhënat nga tabela Rezervimi
$sql = "SELECT * FROM Rezervimi";
$result = $conn->query($sql);

echo "<h2>Lista e Rezervimeve</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Destinacioni</th>
                
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['Emri'] . "</td>
                <td>" . $row['Mbiemri'] . "</td>
                <td>" . $row['Destinacioni'] . "</td>
               
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka rezervime.";
}








$conn->close();
?>
