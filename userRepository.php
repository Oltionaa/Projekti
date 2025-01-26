<?php

include_once 'C:\xampp\htdocs\Projekti-1\databaseConnection.php';

class UserRepository {
    private $connection; 

    function __construct() {
       $conn = new DatabaseConenction(); // Fixed the typo in 'DatabaseConnection'
        $this->connection = $conn->startConnection(); 
    }

    // Insert a user into the database (with name and password only)
    function insertUser($user) {
        $conn = $this->connection;

        $id = $user->getId();
        $user_id = $user->getuser_id();
        $user_name = $user->getuser_name();
        $package_name = $user->getpackage_name();
        $price = $user->getprice();
        $reservation_date = $user->getreservation_date();

        // Prepare the SQL statement
        $sql = "INSERT INTO reservations (id, user_id, user_name,package_name,price,reservation_date) VALUES (?, ?, ?,?, ?, ?)"; // Correct table name

        // Execute the statement with parameters
        $statement = $conn->prepare($sql); 
        $statement->execute([$id, $user_id, $user_name,$package_name,$price,$reservation_date]);

        // Provide feedback
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    // Get all users from the database
    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations"; // Correct table name

        // Execute the query
        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        return $users; 
    }

    // Get a user by ID
    function getUserById($id) {
        $conn = $this->connection;

        // Use prepared statements to avoid SQL injection
        $sql = "SELECT * FROM reservations WHERE id = ?"; // Correct table name

        // Prepare and execute the query
        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
        $user = $statement->fetch(); 

        return $user;
    }

    // Update a user's name and password
    function updateUser($id, $name, $password) {
        $conn = $this->connection;

        // Correct the SQL query to update only name and password for 'userss'
        $sql = "UPDATE reservations SET name = ?, password = ? WHERE id = ?"; // Correct table name

        // Prepare and execute the statement
        $statement = $conn->prepare($sql); 
        $statement->execute([$id, $user_id, $user_name,$package_name,$price,$reservation_date]);

        // Provide feedback
        echo "<script>alert('Update was successful');</script>";
    }

    // Delete a user by ID
    function deleteUser($id) {
        $conn = $this->connection;

        // Correct the table name to 'userss'
        $sql = "DELETE FROM reservations WHERE id = ?"; // Correct table name

        // Execute the statement
        $statement = $conn->prepare($sql); 
        $statement->execute([$id]);

        // Provide feedback
        echo "<script>alert('Delete was successful');</script>";
    }
}

?>
