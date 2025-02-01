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
        $sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}

?>

