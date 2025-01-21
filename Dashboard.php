<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <?php
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['Name'])) {
            echo "<h3>Welcome to the Dashboard, " . $_SESSION['Name'] . "!</h3>";
            echo "<a href='welcome.php'>Back</a><br>";
            echo "<a href='Reservations.php'>Reservations</a><br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            // Redirect to login if session does not exist
            header('Location: login.html');
            exit();
        }
        ?>
    </div>
</body>
</html>


















