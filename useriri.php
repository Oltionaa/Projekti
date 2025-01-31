<?php

class Userii {
    private $conn;
    private $table = "userss"; // Emri i tabelës në databazë

    public function __construct($db) {
        $this->conn = $db;
    }

    // Funksioni për të shtuar një përdorues të ri
    public function createUser($name, $email, $password, $role) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO " . $this->table . " (name, email, password, role) VALUES (:name, :email, :password, :role)";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $hashedPassword);
            $stmt->bindParam(":role", $role);

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    // Funksioni për të marrë të gjithë përdoruesit
    public function getUsers() {
        $sql = "SELECT id, name, email, role FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
