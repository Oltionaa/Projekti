<?php
class Reservation {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection; 
    }
    public function createReservation($userId, $packageName, $price) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO reservations (user_id, package_name, price) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $userId, PDO::PARAM_INT);
            $stmt->bindParam(2, $packageName, PDO::PARAM_STR);
            $stmt->bindParam(3, $price, PDO::PARAM_STR);
    
            if ($stmt->execute()) {
                return true; 
            } else {
                return "Gabim gjatë ekzekutimit të rezervimit: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            return "Gabim: " . $e->getMessage(); 
        }
    }
   
    public function getUserReservations($userId) {
        $stmt = $this->conn->prepare("SELECT * FROM reservations WHERE user_id = ?");
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
