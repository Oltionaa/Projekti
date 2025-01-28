<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

$sql = "SELECT * FROM userss";
$result = $conn->query($sql);

echo "<h2>Lista e userit te krijuar </h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                   <th>Email</th>
                <th>Password</th>
                <th>Role</th>

               
                

            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>

                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['password'] . "</td>
                 <td>" . $row['role'] . "</td>

               
               

              </tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka user.";
}





?>