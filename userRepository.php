<?php

<<<<<<< HEAD
<<<<<<< HEAD
include_once 'databaseConnection.php';
=======
include_once 'C:\xampp\htdocs\Projekti-1\databaseConnection.php';
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
include_once 'C:\xampp\htdocs\Projekti-1\databaseConnection.php';
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f

class UserRepository {
    private $connection; 

    function __construct() {
<<<<<<< HEAD
<<<<<<< HEAD
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

=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
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
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        return $users; 
    }

<<<<<<< HEAD
<<<<<<< HEAD
  
    

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
=======
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
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
<<<<<<< HEAD
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
