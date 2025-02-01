<?php

// Përfshi lidhjen me databazën
include_once 'databaseConnection.php';

class UserRepository {
    private $connection; 

    // Konstruktor për të filluar lidhjen me databazën
    function __construct() {
       $conn = new DatabaseConenction(); 
        $this->connection = $conn->startConnection(); 
    }
    function getUserReservationsByName($user_name) {
        $conn = $this->connection;

        // Kërkesa për të marrë rezervimet nga user_name
        $sql = "SELECT * FROM reservations WHERE user_name = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$user_name]);
        $reservations = $statement->fetchAll();

        return $reservations;
    }

    public function getUserByName($user_name) {
        $conn = $this->connection;

        $sql = "SELECT * FROM reservations WHERE user_name = ? LIMIT 1"; // Kërko përdoruesin përmes emrit
        $statement = $conn->prepare($sql);
        $statement->execute([$user_name]);
        
        return $statement->fetch(PDO::FETCH_ASSOC);  // Kthe përdoruesin si array asociativ
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

        // SQL për të marrë rezervimin nga ID
        $sql = "SELECT * FROM reservations WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        // Kthe rezultatet
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    // Funksioni insertUser për të shtuar një rezervim të ri
    function insertUser($user) {
        $conn = $this->connection;

        // Marrim të dhënat nga objekti i përdoruesit
        $user_name = $user->getuser_name();  // Emri i përdoruesit
        $package_name = $user->getpackage_name();  // Emri i paketës
        $price = $user->getprice();  // Çmimi i paketës
        $reservation_date = $user->getreservation_date();  // Data e rezervimit

        // Nuk është më e nevojshme të përdoret user_id, përdorim vetëm user_name
        $sql = "INSERT INTO reservations (user_name, package_name, price, reservation_date) 
                VALUES (?, ?, ?, ?)"; 

        // Ekzekutojmë SQL për të futur rezervimin
        $statement = $conn->prepare($sql); 
        $statement->execute([$user_name, $package_name, $price, $reservation_date]);

        // Njoftojmë se rezervimi është ruajtur me sukses
        echo "<script> alert('Rezervimi u ruajt me sukses!'); </script>";
    }
    public function getUserByNameUpdated($userName) {
        $conn = $this->connection;
    
        // Sigurohuni që e përdorni user_name dhe jo id
        $sql = "SELECT * FROM reservations WHERE user_name = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$userName]);
        return $statement->fetch();
    }
    

    // Funksioni updateUser azhurnon emrin dhe datën e rezervimit për një përdorues
   // Funksioni për azhurnimin e emrit dhe datës së rezervimit
    public function updateUser($user_name, $new_user_name, $reservation_date) {
    $conn = $this->connection;

    // SQL për azhurnimin e emrit dhe datës së rezervimit
    $sql = "UPDATE reservations SET user_name = ?, reservation_date = ? WHERE user_name = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$new_user_name, $reservation_date, $user_name]);

    // Njoftimi për azhurnimin e suksesshëm
    echo "<script>alert('Azhurnimi ishte i suksesshëm');</script>";
    }

    // Funksioni updateUseri azhurnon paketën, çmimin dhe datën e rezervimit nga administratori
    public function updateUseri($id, $package_name, $price, $reservation_date) {
        $conn = $this->connection;

        // SQL për të azhurnuar paketën, çmimin dhe datën e rezervimit
        $sql = "UPDATE reservations SET package_name = ?, price = ?, reservation_date = ? WHERE id = ?";
    
        // Ekzekutojmë SQL për azhurnimin
        $statement = $conn->prepare($sql); 
        $statement->execute([$package_name, $price, $reservation_date, $id]);

        // Njoftojmë që azhurnimi ishte i suksesshëm
        echo "<script>alert('Azhurnimi ishte i suksesshëm');</script>";
    }

    public function updateUserReservation($user_name, $reservation_date) {
        $conn = $this->connection;

        // Azhurnimi i rezervimit për përdoruesin, duke përdorur emrin dhe datën e rezervimit
        $sql = "UPDATE reservations SET reservation_date = ? WHERE user_name = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$reservation_date, $user_name]);

        echo "<script>alert('Azhurnimi ishte i suksesshëm');</script>";
    }

    // Funksioni merr të gjitha rezervimet nga tabela për administratën
    function getAllUsers() {
        $conn = $this->connection;

        // SQL për të marrë të gjitha rezervimet
        $sql = "SELECT * FROM reservations";

        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        // Kthej të gjitha rezervimet
        return $users; 
    }

    // Funksioni deleteUser fshin një rezervim nga ID e tij
    function deleteUser($id) {
        $conn = $this->connection;
    
        // Kontrollojmë nëse ekziston rezervimi me këtë ID
        $checkSql = "SELECT COUNT(*) FROM reservations WHERE id = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->execute([$id]);
        $count = $checkStmt->fetchColumn();
    
        if ($count > 0) {
            // Nëse ekziston, e fshijmë rezervimin
            $sql = "DELETE FROM reservations WHERE id = ? LIMIT 1";
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
    
            // Njoftojmë që fshirja ishte e suksesshme
            echo "<script>alert('Fshirja ishte e suksesshme');</script>";
        } else {
            // Nëse nuk u gjet, njoftojmë që nuk ka rezervim
            echo "<script>alert('Nuk u gjet ai rezervim');</script>";
        }
    }

    // Funksioni merr përdoruesin sipas ID-së së rezervimit
    function getUserById($id) {
        $conn = $this->connection;

        // SQL për të marrë një rezervim nga ID-ja
        $sql = "SELECT * FROM reservations WHERE id = ?"; 

        $statement = $conn->prepare($sql);
        $statement->execute([$id]); 
        $user = $statement->fetch(); 

        // Kthej përdoruesin ose rezervimin
        return $user;
    }
}

?>
