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
        <h3>My Project</h3>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li><a href="#">Dashboard</a></li>
        </ul>
      </nav>
    </aside>

  
    <main class="main-content">
      <header class="header">
        <h1>Dashboard</h1>
        <p>Welcome to Admin Dashboard.</p>
      </header>

      <div class="cards">
        <div class="card yellow">
          <div>
            <h3></h3>
            <p><a href="offers.html">Packages</a></p>
          </div>
        </div>

        <div class="card blue">
          <div>
            <h3></h3>
            <p><a href="admin.php">Customer</a></p>
          </div>
        </div>

        <div class="card green">
          <div>
            <h3></h3>
            <p>
              <a href="shtouserin.php">Shto nje User</a><br>
              <a href="shtorezervimin.php">Shto nje Rezervim</a>
            </p>
          </div>
        </div>
      </div>

      <div class="grid">
        <div class="box">
          <h2>Chart Daily</h2>
      
          <textarea placeholder="Enter chart data or notes..."></textarea>
        </div>
        <div class="box">
          <h2>Todo List</h2>
       
          <textarea placeholder="Enter your tasks..."></textarea>
        </div>
        
        <div class="box writable-box">
          <h2>Write Your Note</h2>
   
          <textarea placeholder="Write something..."></textarea>
        </div>
      </div>
      
