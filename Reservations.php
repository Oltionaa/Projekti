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
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <h3>My Status</h3>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li><a href="#">Reservations</a></li>
          <li> <a href='home.html'>Home</a></li>
          <li> <a href='logout.php'>Logout</a></li>
         
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header class="header">
        <h1>Dashboard</h1>
        <p> .</p>
      </header>


      <?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekti";

// Krijo lidhjen
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}




// Kontrollo nëse të dhënat janë dërguar me POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Destinacioni = $_POST['Destinacioni'];
    

    // Deklaratë e përgatitur për futjen e të dhënave
    $stmt = $conn->prepare("INSERT INTO Rezervimi (Emri,Mbiemri, Destinacioni) VALUES (?, ?,?)");
    $stmt->bind_param("sss", $Emri, $Mbiemri,$Destinacioni);

    if ($stmt->execute()) {
        echo "Rezervimi u shtua me sukses! <a href='lista_tabelave.php'>Shiko Rezervimin</a>";
    } else {
        echo "Gabim: " . $stmt->error;
    }

    $stmt->close();
}

// Mbyll lidhjen
$conn->close();
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Shto Rezervimin</title>
</head>
<body>

 
<table border="1">
     
     <tr>
         <th>ID</th>
         <th>user_id</th>
         <th>user_name</th>
         <th>package_name</th>
         <th>price</th>
         <th>reservation_date</th>
         <th>Edit</th> 
         <th>Delete</th> 
     </tr>

     <?php 

     include_once 'C:\xampp\htdocs\Projekti-1\userRepository.php';

     $userRepository = new UserRepository();

     $users = $userRepository->getAllUsers(); 


    
foreach($users as $user){
 echo "
 <tr>
     <td>{$user['id']}</td> <!-- ID e përdoruesit -->
     <td>{$user['user_id']}</td> <!-
     <td>{$user['user_name']}</td> <!-- Fjalëkalimi i përdoruesit -->
      <td>{$user['package_name']}</td> <!-- Fjalëkalimi i përdoruesit -->
       <td>{$user['reservation_date']}</td> <!-- Fjalëkalimi i përdoruesit -->
      


     <td><a href='edit.php?id={$user['id']}'>Edit</a></td> <!-- Link për redaktim me ID -->
     <td><a href='delete.php?id={$user['id']}'>Delete</a></td> <!-- Link për fshirje me ID -->
 </tr>
 ";
}

     ?>
 </table>
    <h2>Shto një rezervim të ri</h2>
    <form method="POST" action="Reservations.php">
        <label for="Statusi">Emri:</label>
        <input type="text" name="Emri" id="Emri" required><br><br>


        <label for="Statusi">Mbiemri:</label>
        <input type="text" name="Mbiemri" id="Mbiemri" required><br><br>

        <label for="Destinacioni">Destinacioni:</label>
        <input type="text" name="Destinacioni" id="Destinacioni" required><br><br>


        <button type="submit">Shto Rezervimin</button>
    </form>
</body>
</html>


