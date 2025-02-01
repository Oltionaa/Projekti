<?php

include_once 'databaseConnection.php';

class UserRepository {
    private $connection; 


    function __construct() {
       $conn = new DatabaseConenction(); 
        $this->connection = $conn->startConnection(); 
    }
    function getUserReservationsByName($user_name) {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations WHERE user_name = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$user_name]);
        $reservations = $statement->fetchAll();

        return $reservations;
    }

    public function getUserByName($user_name) {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations WHERE user_name = ? LIMIT 1"; 
        $statement = $conn->prepare($sql);
        $statement->execute([$user_name]);
        
        return $statement->fetch(PDO::FETCH_ASSOC);  
    }

    // Funksioni për të marrë të gjitha rezervimet (për admin)
    function getAllReservations() {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations";

        $statement = $conn->query($sql);
        $reservations = $statement->fetchAll();

        return $reservations;
    }


    public function getReservationById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    function insertUser($user) {
        $conn = $this->connection;

       
        $user_name = $user->getuser_name(); 
        $package_name = $user->getpackage_name();  
        $price = $user->getprice(); 
        $reservation_date = $user->getreservation_date(); 

      
        $sql = "INSERT INTO reservations (user_name, package_name, price, reservation_date) 
                VALUES (?, ?, ?, ?)"; 

        $statement = $conn->prepare($sql); 
        $statement->execute([$user_name, $package_name, $price, $reservation_date]);

        echo "<script> alert('Rezervimi u ruajt me sukses!'); </script>";
    }
    public function getUserByNameUpdated($userName) {
        $conn = $this->connection;
    
      
        $sql = "SELECT * FROM reservations WHERE user_name = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$userName]);
        return $statement->fetch();
    }
    


    public function updateUser($user_name, $new_user_name, $reservation_date) {
    $conn = $this->connection;

    $sql = "UPDATE reservations SET user_name = ?, reservation_date = ? WHERE user_name = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$new_user_name, $reservation_date, $user_name]);

    echo "<script>alert('Azhurnimi ishte i suksesshëm');</script>";
    }

    // Funksioni updateUseri update paketën, çmimin dhe datën e rezervimit nga administratori
    public function updateUseri($id, $package_name, $price, $reservation_date) {
        $conn = $this->connection;

        $sql = "UPDATE reservations SET package_name = ?, price = ?, reservation_date = ? WHERE id = ?";
    
       
        $statement = $conn->prepare($sql); 
        $statement->execute([$package_name, $price, $reservation_date, $id]);

     
    }

    public function updateUserReservation($user_name, $reservation_date) {
        $conn = $this->connection;

    
        $sql = "UPDATE reservations SET reservation_date = ? WHERE user_name = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$reservation_date, $user_name]);

    }

    
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
    
          
            echo "<script>alert('Fshirja ishte e suksesshme');</script>";
        } else {
         
            echo "<script>alert('Nuk u gjet ai rezervim');</script>";
        }
    }


    function getUserById($id) {
        $conn = $this->connection;

       
        $sql = "SELECT * FROM reservations WHERE id = ?"; 

        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
        $user = $statement->fetch(); 

        
        return $user;
    }
}

?>

