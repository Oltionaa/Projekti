<?php


class DatabaseConenction {

    private $server = "localhost";     
    private $username = "root";      
    private $password = "";          
    private $database = "projekti";
   
    function startConnection() {
        try {
         
            $conn = new PDO(
                "mysql:host=$this->server;dbname=$this->database", 
                $this->username, 
                $this->password  
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            return $conn;
        } catch (PDOException $e) {
        
            echo "Database Connection Failed: " . $e->getMessage();

            return null;
        }
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
?>
=======
?>
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
=======
?>
>>>>>>> f3f1c22c6fca8a5d102c61bef042ff2f1589453f
