<?php
include "Database.php";
include "useriri.php"; 

$database = new Database();
$db = $database->getConnection();
$user = new Userii($db); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'];

    if ($user->createUser($name, $email, $password, $role)) {
        echo "<div style='padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin: 10px 0;'>
        Useri u shtua me sukses! <a href='lista_tabelave.php' style='color: #155724; font-weight: bold;'>Shiko listën</a>
      </div>";

    } else {
        echo "<script>alert('Gabim gjatë shtimit të userit.');</script>";
    }
}
?>
