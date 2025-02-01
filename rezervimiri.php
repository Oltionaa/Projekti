<?php

class Reservation {
    private $conn;
    private $table = "reservations";

    public function __construct($db) {
        $this->conn = $db;
    }


    public function createReservation($user_name, $package_name, $price, $reservation_date) {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table . " (user_name, package_name, price, reservation_date) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            die("Gabim në deklaratën SQL: " . $this->conn->error);
        }
        $stmt->bind_param("ssis", $user_name, $package_name, $price, $reservation_date);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

 
    public function getAllReservations() {
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($sql);
        return $result;
    }
}

?>