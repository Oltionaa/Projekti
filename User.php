<?php

class User {
    private $conn;
    private $table_name = 'userss'; 

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $surname, $email, $password) {
        $query = "INSERT INTO {$this->table_name} (name, surname, email, password) VALUES (:name, :surname, :email, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));

        if ($stmt->execute()) {
            return true;
        }
    }
    public function userExists($name) {
        $query = "SELECT COUNT(*) FROM {$this->table_name} WHERE name = :name";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    
        return $stmt->fetchColumn() > 0;
    }
    
    public function login($name, $password) {
        $query = "SELECT id, name, password FROM {$this->table_name} WHERE name = :name";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                return true;
            }
        }
        return false;
    }

    public function getUserId() {
        return $_SESSION['id'] ?? null;
    }

    public function getUserName($user_id) {
        $query = "SELECT name FROM {$this->table_name} WHERE id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['name'] ?? null;
    }

    public function getUserRole($name) {
        $query = "SELECT role FROM {$this->table_name} WHERE name = :name";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['role'];
        }
        return null; 
    }
}
?>
