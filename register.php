<?php
<<<<<<< HEAD
session_start(); // Start session to potentially store user data

// Database connection (replace with your credentials)
$host = 'localhost';
$dbname = 'boundlesstravel';
$username = 'root'; // Update with your database username
$password = ''; // Update with your database password

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Get plain password from form
    $role = $_POST['role']; // Admin or user role

    // Validate the input
    if (empty($name) || empty($email) || empty($password) || empty($role)) {
        echo "All fields are required.";
        exit();
    }

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Create PDO connection
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$boundlesstravel", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the email is already taken
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $existingUser = $stmt->fetch();

        if ($existingUser) {
            echo "Email already exists.";
            exit();
        }

        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)");
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'role' => $role
        ]);

        echo "Registration successful! You can now log in.";
        header("Location: login.php"); // Redirect to login page after successful registration
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
}
=======

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
                header("Location: login.php");
                exit();
            } else {
                echo "Gabim në regjistrim: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}

$conn->close();
>>>>>>> 4b539ba6a8e80a8fe7f90af08f6c2c597925fab2
?>
