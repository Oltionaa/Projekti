<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}




$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

echo "<h2>Lista e Rezervimit  te krijuar </h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>user_name</th>
                <th>package_name</th>
                <th>price</th>
                <th>reservation_date</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['user_name'] . "</td>
              
                <td>" . $row['package_name'] . "</td>
                 <td>" . $row['price'] . "</td>

                  <td>" . $row['reservation_date'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka rezervim.";
}





?>