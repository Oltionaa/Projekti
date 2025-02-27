<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Gallery with Captions</title>
  <link rel="stylesheet" href="aboutus.css">
  <link rel="stylesheet" href="home.css"/>
</head>
<body>
  <?php include('navbar.php'); ?>
  <div class="gallery-container">
    <button class="scroll-btn prev" onclick="prevImg()">&#10094;</button>
    <div class="gallery">
      <div class="image-card">
        <img id="img1" src="foto1.jpg" alt="1">
        <div class="caption" id="caption1">Kelingking Beach</div>
      </div>
      <div class="image-card">
        <img id="img2" src="foto2.png" alt="2">
        <div class="caption" id="caption2">Cappadocia</div>
      </div>
      <div class="image-card">
        <img id="img3" src="foto3.jpg" alt="3">
        <div class="caption" id="caption3">London</div>
      </div>
    </div>
    <button class="scroll-btn next" onclick="nextImg()">&#10095;</button>
  </div>
 
<div class="adventure-section">
    <h2>Experience The New Adventure</h2>
    <div class="adventure-cards">
      <div class="adventure-card">
        <h3>About Us </h3>
        <p>We are your travel guides, covering essential information for travelers to explore a destination confidently. Our commitment extends 24/7 assistance to make your trip easier</p>
      </div>
      <div class="adventure-card">
        <h3>Safe Traveling</h3>
        <p>We specialize in offering personalized safe travel experiences, from relaxing beach vacations to adventurous city tours with  relaxing stays and helpful amenities.</p>
      </div>
      <div class="adventure-card">
        <h3>Affordable Price</h3>
        <p>Discover the world and make new experiences with special prices</p>
      </div>
    </div>
  </div>
  
  <script src="aboutus.js"></script>

  </body>
  </html>
    