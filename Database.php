<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'Projekti'; // Emri i bazës së të dhënave
    private $username = 'root';  // Emri i përdoruesit për MySQL
    private $password = '';      // Fjalëkalimi për MySQL
    private $conn;

    public function __construct() {
        try {
            // Përdorimi i PDO për lidhjen me MySQL
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Aktivizo mesazhe gabimi
        } catch (PDOException $e) {
            // Nëse ndodhi një gabim në lidhje me DB, mbylle dhe shfaq mesazhin
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Funksioni për të marrë lidhjen
    public function getConnection() {
        return $this->conn;
    }
}
?>