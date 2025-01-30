<?php

include_once 'databaseConnection.php';

class UserRepository {
    private $connection; 

    function __construct() {
       $conn = new DatabaseConenction(); 
        $this->connection = $conn->startConnection(); 
    }
  
    function getUserByIdUpdated($id) {
        $conn = $this->connection;

        
        $sql = "SELECT * FROM reservations WHERE id = ?"; 

       
        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
        $user = $statement->fetch(); 

        return $user;
    }

   
    function insertUser($user) {
        $conn = $this->connection;

        $id = $useri->getId();
        $user_id = $useri->getuser_id();
        $user_name = $user->getuser_name();
        $package_name = $useri->getpackage_name();
        $price = $user->getprice();
        $reservation_date = $useri->getreservation_date();


        $sql = "INSERT INTO reservations (id, user_id, user_name,package_name,price,reservation_date) VALUES (?, ?, ?,?, ?, ?)"; 

     

        $statement = $conn->prepare($sql); 
        $statement->execute([$id, $user_id, $user_name,$package_name,$price,$reservation_date]);


        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getUserReservations($user_id) {
        $conn = $this->connection;
    
       
        $sql = "SELECT * FROM reservations WHERE user_id = ?"; 
    
    
        $statement = $conn->prepare($sql);
        $statement->execute([$user_id]); 
        $reservations = $statement->fetchAll(); 
    
        return $reservations;
    }
    
    function getUserById($id) {
        $conn = $this->connection;

       
        $sql = "SELECT * FROM reservations WHERE id = ?"; 

     
        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
        $user = $statement->fetch(); 

        return $user;
    }
     //update useri emrin dhe daten e rezervimi
    function updateUser($id, $user_name, $reservation_date) {
        $conn = $this->connection;
    
       
        $sql = "UPDATE reservations SET user_name = ?, reservation_date = ? WHERE id = ?";
    
        $statement = $conn->prepare($sql);
    
       
        $statement->execute([$user_name, $reservation_date, $id]);
    
        echo "<script>alert('Update was successful');</script>";
    }


      ///admini ben update userin
    
    
      function updateUseri($id,$package_name, $price, $reservation_date) {
        $conn = $this->connection;


        $sql = "UPDATE reservations SET package_name=?, price=?, reservation_date=? WHERE id=?";

        $statement = $conn->prepare($sql); 

      
        $statement->execute([$package_name, $price, $reservation_date, $id]);

      
        echo "<script>alert('Update was successful');</script>";
    }

    //merr kejt parametrat per adminin
    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations";

        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        return $users; 
    }

  
    

    function deleteUser($id) {
        $conn = $this->connection;
    
        
        $checkSql = "SELECT COUNT(*) FROM reservations WHERE id = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->execute([$id]);
        $count = $checkStmt->fetchColumn();
    
        if ($count > 0) {
           
            $sql = "DELETE FROM reservations WHERE id = ? LIMIT 1";
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
    
            echo "<script>alert('Delete was successful');</script>";
        } else {
            echo "<script>alert('Record not found');</script>";
        }
    }
    
}



?>