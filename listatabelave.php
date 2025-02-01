<?php
include "Database.php";
include "Rezervimiri.php";  
$database = new Database();
$db = $database->getConnection();
$reservation = new Reservation($db);

$reservations = $reservation->getAllReservations();

echo "<h2>Lista e Rezervimeve</h2>";

if ($reservations->rowCount() > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Package Name</th>
                <th>Price</th>
                <th>Reservation Date</th>
            </tr>";

    while ($row = $reservations->fetch(PDO::FETCH_ASSOC)) {
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
    echo "Nuk ka rezervime.";
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 2f565dd15187fabdf9f8785312e88c5c3a590673
