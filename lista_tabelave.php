<?php
include "Database.php";  
include "useriri.php";   


$database = new Database();  
$db = $database->getConnection();  


$user = new Userii($db);  

$users = $user->getUsers();

echo "<h2>Lista e përdoruesve</h2>";

if (!empty($users)) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Role</th>
            </tr>";
    foreach ($users as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['role']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka asnjë përdorues.";
}
?>
