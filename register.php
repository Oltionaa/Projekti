<?php
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
?>
