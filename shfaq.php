<?php
require_once "Database.php";
require_once "Contact.php";

$database = new Database();
$db = $database->getConnection();
$contact = new Contact($db);

$messages = $contact->getMessages();

echo "<h2>Mesazhet e Kontaktit</h2>";

if (count($messages) > 0) {  // Kontrollo nëse ka mesazhe
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Subjekti</th>
                <th>Mesazhi</th>
                <th>Data</th>
            </tr>";
    
    foreach ($messages as $row) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['subject'] . "</td>
                <td>" . $row['message'] . "</td>
                <td>" . $row['created_at'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka asnjë mesazh.";
}
?>
