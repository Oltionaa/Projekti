<?php
session_start();

// Kontrollo nëse përdoruesi është loguar dhe ka një ID admini
if (!isset($_SESSION['name']) && !isset($_SESSION['admin_id'])) {
    die("Ju duhet të bëheni log in në mënyrë që t’i shihni rezervimet.");
}

$user_name = $_SESSION['name'] ?? null;  // Merr emrin e përdoruesit nga sesioni
$admin_id = $_SESSION['admin_id'] ?? null; // Merr ID-në e adminit nga sesioni

include_once 'userRepository.php';
$userRepository = new UserRepository();

// Kontrollo nëse është përdorues ose admin dhe merr rezervimet përkatëse
if ($user_name) {
    $reservations = $userRepository->getUserReservationsByName($user_name);  // Përdoruesi shikon vetëm rezervimet e tij
} elseif ($admin_id) {
    $reservations = $userRepository->getAllReservations();  // Admini mund të shohë të gjitha rezervimet
} else {
    die("Nuk keni të drejtat për të parë rezervimet.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboardadmin.css">
</head>
<body>
  <div class="dashboard">
  
    <aside class="sidebar">
      <div class="sidebar-header">
        <h3>My Status</h3>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li><a href="#">Reservations</a></li>
          <li> <a href='home.php'>Home</a></li>
          <li> <a href='logout.php'>Logout</a></li>
        </ul>
      </nav>
    </aside>

    <main class="main-content">
      <header class="header">
        <h1>Profile</h1>
        <p>Welcome, <?php echo $user_name; ?>!</p> 
      </header>

      <table border="1">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Package Name</th>
            <th>Price</th>
            <th>Reservation Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        // Shfaq rezervimet
        if (isset($reservations) && count($reservations) > 0) {
            foreach ($reservations as $reservation) {
                echo "
                <tr>
                    <td>{$reservation['id']}</td>
                    <td>{$reservation['user_name']}</td>
                    <td>{$reservation['package_name']}</td>
                    <td>{$reservation['price']}</td>
                    <td>{$reservation['reservation_date']}</td>
                    <td><a href='edit.php?id={$reservation['id']}'>Edit</a></td>
                    <td><a href='delete.php?id={$reservation['id']}'>Delete</a></td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='7'>Nuk ka rezervime për të shfaqur.</td></tr>";
        }
        ?>
      </table>
    </main>
  </div>
</body>
</html>
