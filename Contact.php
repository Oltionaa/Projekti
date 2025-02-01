<?php

class Contact {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function saveMessage($name, $email, $message) {
        try {
            $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getMessages() {
        $query = "SELECT id, name, email, message, created_at FROM contact_messages";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>

