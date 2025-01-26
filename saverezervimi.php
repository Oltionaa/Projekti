<?php
session_start();
require_once 'database.php';
require_once 'User.php';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $package_name = $_POST['package_name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $user_id = $_SESSION['user_id'] ?? '';

    if (empty($user_id)) {
        echo "Ju duhet të jeni i regjistruar për të bërë rezervimin.";
        exit;
    }

    $db = new Database();
    $conn = $db->getConnection();
    $user = new User($conn);

    try {
        
        $user_name = $user->getUserName($user_id);

        if (!$user_name) {
            echo "Përdoruesi nuk u gjet.";
            exit;
        }

        
        $insertStmt = $conn->prepare("
            INSERT INTO reservations (user_id, package_name, price, user_name, reservation_date)
            VALUES (:user_id, :package_name, :price, :user_name, NOW())
        ");
        $insertStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $insertStmt->bindParam(':package_name', $package_name, PDO::PARAM_STR);
        $insertStmt->bindParam(':price', $price, PDO::PARAM_STR);
        $insertStmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $insertStmt->execute();

        echo "Rezervimi u ruajt me sukses!";
    } catch (PDOException $e) {
        echo "Gabim gjatë ruajtjes së rezervimit: " . $e->getMessage();
    }
} else {
    echo "Metoda e kërkesës nuk është e vlefshme.";
}
?>
