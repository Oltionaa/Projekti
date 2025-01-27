<?php
class Database {
    private $host = 'localhost';
<<<<<<< HEAD
    private $dbname = 'Projekti'; // Emri i bazës së të dhënave
    private $username = 'root';  // Emri i përdoruesit për MySQL
    private $password = '';      // Fjalëkalimi për MySQL
=======
    private $dbname = 'Projekti'; 
    private $username = 'root';  
    private $password = '';      
>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
    private $conn;

    public function __construct() {
        try {
           
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

<<<<<<< HEAD
    // Funksioni për të marrë lidhjen
=======
>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
    public function getConnection() {
        return $this->conn;
    }
}
<<<<<<< HEAD
?>
=======
?>

>>>>>>> 888a5f9dc5fb6a12a33f208aee3cdce8b4a13d0b
