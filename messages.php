<?php
include_once "Database.php";
include_once "Contact.php";

$database = new Database();
$db = $database->getConnection();
$contact = new Contact($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

  
    if ($contact->saveMessage($name, $email, $message)) {
        echo "<script>
                alert('Mesazhi u dërgua me sukses!');
                window.location.href = 'footer.php'; // Ridrejto pas alertit
              </script>";
    } else {
        echo "<script>
                alert('Gabim! Mesazhi nuk u dërgua.');
                window.location.href = 'contactus.php';
              </script>";
    }
}
?>
