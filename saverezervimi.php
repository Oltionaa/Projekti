<?php
session_start();
require_once 'database.php';
require_once 'User.php';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $package_name = $_POST['package_name'] ?? '';
    $price = $_POST['price'] ?? 0;

    // Sigurohuni që jeni të regjistruar dhe merrni emrin e përdoruesit nga sesioni
    $user_id = $_SESSION['user_id'] ?? '';
    if (empty($user_id)) {
        echo "Ju duhet të jeni i regjistruar për të bërë rezervimin.";
        exit;
    }

    // Krijo lidhjen me bazën e të dhënave
    $db = new Database();
    $conn = $db->getConnection();
    $user = new User($conn);

    try {
        // Merr emrin e përdoruesit nga ID-ja e sesionit
        $user_name = $user->getUserName($user_id);

        if (!$user_name) {
            echo "Përdoruesi nuk u gjet.";
            exit;
        }

        // Përditësojmë query për të hequr 'user_id'
        $insertStmt = $conn->prepare("
            INSERT INTO reservations (package_name, price, user_name, reservation_date)
            VALUES (:package_name, :price, :user_name, NOW())
        ");

        // Lidhja e parametrave për query-n
        $insertStmt->bindParam(':package_name', $package_name, PDO::PARAM_STR);
        $insertStmt->bindParam(':price', $price, PDO::PARAM_STR);
        $insertStmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);

        // Ekzekutohet query
        $insertStmt->execute();

        echo "
        <div style='text-align: center; margin-top: 20px;'>
            <h2>Rezervimi u ruajt me sukses!</h2>
            <p>Ju mund të shikoni rezervimet tuaja ose të ktheheni në faqen fillestare.</p>
            <a href='Reservations.php' style='
                display: inline-block;
                margin: 10px;
                padding: 10px 20px;
                background-color: #28a745;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            '>Shiko Rezervimet</a>
            <a href='home.php' style='
                display: inline-block;
                margin: 10px;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            '>Kthehu në Home</a>
        </div>
        ";
    } catch (PDOException $e) {
        echo "Gabim gjatë ruajtjes së rezervimit: " . $e->getMessage();
    }
} else {
    echo "Metoda e kërkesës nuk është e vlefshme.";
}
?>
