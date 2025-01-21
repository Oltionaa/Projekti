<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm-password'], $_POST['role'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        if ($password !== $confirm_password) {
            die("Fjalëkalimi dhe konfirmimi nuk përputhen!");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Email i pavlefshëm!");
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql_check_email = "SELECT id FROM userss WHERE email = ?";
        if ($stmt_check_email = $conn->prepare($sql_check_email)) {
            $stmt_check_email->bind_param("s", $email);
            $stmt_check_email->execute();
            $stmt_check_email->store_result();
            if ($stmt_check_email->num_rows > 0) {
                die("Ky email është regjistruar tashmë!");
            }
        }
        $sql = "INSERT INTO userss (name, email, password, role) VALUES (?, ?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $role);
            if ($stmt->execute()) {
                echo "Regjistrimi u krye me sukses!";
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Gabim në regjistrim: " . $stmt->error;
            }
            $stmt->close();
        }
    }
}
$conn->close();
?>