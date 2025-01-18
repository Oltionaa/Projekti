<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['Name'])) {
    echo "<h3>Welcome to the Dashboard</h3>";
    echo "<br><a href='welcome.php'>Back</a>";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    // Redirect to login if session does not exist
    header('Location: login.php');
    exit();
}
?>
