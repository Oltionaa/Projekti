<?php
session_start();

$isAdmin = isset($_SESSION['role']) && $_SESSION['role'] == 'admin';
?>


<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projekti</title>
  <link rel ="stylesheet"  href="home.css">
  <link rel ="stylesheet"  href="our.css">
  <link rel ="stylesheet"  href="offers.css">
  <link rel="stylesheet" href="footer.css"/>
</head>
<body>
      
  <div class="navbar">
      <div class="Logo">
          <img src="fotot/logo.png"alt ="Company Logo">
      </div>
      <a href="home.php">Home</a>
      <a href="aboutus.php">About us</a>
      <a href="our.php">Our Services</a>
      <a href="offers.php">Offers</a>
      <a href="footer.php">Contact us</a>
      <a href="signinn.html">Sign in</a>
  </div>
  <div class="container">
      <div class="left-section">
        <h1>Find your Escape</h1>
        <p>Look And Take Your Journey. See How Beautiful This World is...</p>
        <a href="our.php" class="button">Explore Now</a>
      </div>
  </div>
  <div class="section-container">
    <h1 class="section-title">Let us plan you a perfect Escape</h1>
    <p class="section-subtitle">Choose your type of tour</p>
  
      <div class="tour-cards-row">
        <div class="tour-card">
          <div class="tour-card-image">
            <img src="fotot/cityt.jpg" alt="City Tours">
          </div>
          <h3 class="tour-card-title">City Tours</h3>
          <p class="tour-card-details">
              Tickets, Expert Local Guide, Exclusive Experiences, Photo Stops,
              Flexible Free Time, Comfortable Group
          </p>
          <a href="city.php" class="tour-card-button">Explore</a> 
        </div>
        <div class="tour-card">
          <div class="tour-card-image">
            <img src="fotot/muzeu.jpg" alt="Museum Tours">
          </div>
          <h3 class="tour-card-title">Museum Tours</h3>
          <p class="tour-card-details">
              Tickets, Expert Local Guide, Exclusive Experiences, Photo Stops,
              Flexible Free Time, Comfortable Group
          </p>
          <a href="museumtour.php" class="tour-card-button">Explore</a> 
        </div>
        <div class="tour-card">
          <div class="tour-card-image">
            <img src="fotot/beaches.jpg" alt="Beaches">
          </div>
          <h3 class="tour-card-title">Beaches</h3>
          <p class="tour-card-details">
              Reserved Beach Loungers & Umbrella, Refreshing Drinks, Delicious Beachside Meals,
              Beach Equipment, Access to Amenities: Use of clean restrooms, showers, and changing rooms for your convenience.
              Free Time to Explore.
          </p>
          <a href="beaches.php" class="tour-card-button">Explore</a> 
        </div>
      </div> 
    </div>
    <div class="section-container-s">
  <h1>Exclusive Offers Just for You</h1>
  <div class="cards-container">
    <div class="card">
      <div class="card-image">
        <img src="fotot/ksamil-beach.jpg" alt="Ksamil Beach">
      </div>
      <div class="card-content">
        <h3 class="card-title">Ksamil Beach</h3>
        <p class="card-description">Exclusive Offer!
        Book your exclusive package now and enjoy flights and accommodation for an unforgettable trip. The package includes:
        Flight tickets
        Luxury hotel accommodation
        Selected transfers and activities
        Dont miss this amazing opportunity .</p>
        <div class="card-price">$70</div>
        <form action="saverezervimi.php" method="POST">
        <input type="hidden" name="package_name" value="Ksamil Beach">
       <input type="hidden" name="price" value="70">
        <button type="submit" class="card-button">Book Now</button>
        <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="card">
        <div class="card-image">
          <img src="fotot/bora.jpg" alt="Bora">
        </div>
        <div class="card-content">
          <h3 class="card-title">Bora Bora</h3>
          <p class="card-description">All-Inclusive Offer!
            Book now and enjoy an unforgettable experience with our All-Inclusive package! You’ll get:
            
            Full travel coverage (flights and transfers)
            Accommodation in luxury hotels
            Daily breakfast, lunch, and dinner
            Unlimited drinks and activities
            Special excursions and events included</p>
          <div class="card-price">$80</div>
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Bora Bora">
            <input type="hidden" name="price" value="80">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="fotot/nice.jpg" alt="Nice">
        </div>
        <div class="card-content">
          <h3 class="card-title">Nice </h3>
          <p class="card-description">
            Escape package for a perfect getaway! Enjoy:
            Round-trip flights and airport transfers
            Stay in a 5-star resort with all meals included
            Unlimited beverages (alcoholic and non-alcoholic)
            Access to daily entertainment and activities
            Guided tours and special excursions
            Book now and experience the luxury of a stress-free vacation!</p>
          <div class="card-price">$90</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Nice">
            <input type="hidden" name="price" value="90">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
        </div>
      <div class="card">
        <div class="card-image">
          <img src=fotot/santorini.jpg alt="Santorini">
        </div>
        <div class="card-content">
          <h3 class="card-title">Santorini</h3>
          <p class="card-description">Experience the best of relaxation and adventure with our package 
            Flights and private transfers included
            All meals, snacks, and drinks provided
            Access to resort amenities (spa, pools, etc.)
            Fun-filled activities for all ages
            Reserve your spot today and enjoy a luxurious.</p>
          <div class="card-price">$80</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Santorini">
            <input type="hidden" name="price" value="80">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
        
      <div class="card">
        <div class="card-image">
          <img src="fotot/paris.jpg"alt="Paris">
        </div>
        <div class="card-content">
          <h3 class="card-title">Paris</h3>
          <p class="card-description">Take advantage of our special offer on flight tickets and travel at amazing prices!

            Tickets available for various destinations
            Special rates for quick and direct flights
            Flexible options for changes and cancellations
            Book now and secure your spot for your next trip!
            Get your ticket and fly with ease!</p>
          <div class="card-price">$100</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Paris">
            <input type="hidden" name="price" value="100">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/budapesti.jpg" alt="Budapesti">
        </div>
        <div class="card-content">
          <h3 class="card-title">Budapesti</h3>
          <p class="card-description">Don't miss out on this deal
            Choose from a wide range of destinations
            Affordable prices for both short and long-haul flights
            Easy booking and flexible travel options
            Reserve today and start planning your next adventure!
            Book now and fly to your dream destination!</p>
          <div class="card-price">$120</div> 
            <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Budapesti">
            <input type="hidden" name="price" value="120">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/vinnea.jpg" alt="Vinnea">
        </div>
        <div class="card-content">
          <h3 class="card-title">Vinnea</h3>
          <p class="card-description">Get everything you need for your next trip:
            Luggage allowance included
            Priority check-in and seat selection
            Flexible changes and cancellations
            Access to airport lounges and fast-track security
            In-flight meals and entertainment included
            Book now and enjoy a stress-free travel experience from start to finish!</p>
          <div class="card-price">$150</div>
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Vinnea">
            <input type="hidden" name="price" value="150">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/rome.jpg" alt="Rome">
        </div>
        <div class="card-content">
          <h3 class="card-title">Rome</h3>
          <p class="card-description">Enjoy a hassle-free travel experience with our Complete All-Inclusive Flight Package:

            Round-trip flights to multiple destinations
            Free checked luggage and carry-on
            Reserved seating with extra legroom
            Meals, drinks, and entertainment included on board
            Flexible booking with change and cancellation options
            Airport transfers and lounge access
            Book today and enjoy a seamless, all-inclusive journey from takeoff to landing!</p>
          <div class="card-price">$135</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Rome">
            <input type="hidden" name="price" value="135">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/amsterdam.jpg" alt="Amsterdam">
        </div>
        <div class="card-content">
          <h3 class="card-title">Amsterdam</h3>
          <p class="card-description">Accommodation in top-rated hotels or resorts
            All meals and drinks included
            Free luggage allowance and seat selection
            Flexible change and cancellation options
            Airport transfers and access to lounges
            Book today and experience a worry-free, all-inclusive holiday from flights to accommodation!</p>
          <div class="card-price">$140</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Amsterdam">
            <input type="hidden" name="price" value="140">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/prague.jpg" alt="Prague">
        </div>
        <div class="card-content">
          <h3 class="card-title">Prague</h3>
          <p class="card-description">Round-trip flights to a variety of destinations
            Accommodation in luxury hotels or resorts
            Daily meals, snacks, and drinks included
            Flexible booking options for changes and cancellations
            Airport transfers and lounge access
            In-room amenities and free Wi-Fi
            Don’t miss out on this perfect all-in-one vacation package book now!</p>
          <div class="card-price">$180</div>
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Prague">
            <input type="hidden" name="price" value="180">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/barcelona1.jpg" alt="Barcelona">
        </div>
        <div class="card-content">
          <h3 class="card-title">Barcelona</h3>
          <p class="card-description">Book now and enjoy everything you need for a perfect trip:
            Round-trip flights to your destination
            Stay in comfortable hotels
            All meals and drinks included
            Flexible booking options
            Airport transfers included
            Book today and have a stress-free vacation!</p>
          <div class="card-price">$190</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Barcelona">
            <input type="hidden" name="price" value="190">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php.php" class="edit-button">Manage</a>
        <?php endif; ?>
        </form>
        </div>
      </div>
       
      <div class="card">
        <div class="card-image">
          <img src="fotot/turkey.jpg"alt="Cappadocia">
        </div>
        <div class="card-content">
          <h3 class="card-title">Cappadocia</h3>
          <p class="card-description">Get everything for your trip in one package:

            Round-trip flights
            Hotel accommodation
            Meals and drinks included
            Easy booking with flexible options
            Airport transfers included
            Book now for a hassle-free holiday!</p>
          <div class="card-price">$200</div>   
          <form action="saverezervimi.php" method="POST">
            <input type="hidden" name="package_name" value="Cappadocia">
            <input type="hidden" name="price" value="200">
            <button type="submit" class="card-button">Book Now</button>
            <?php if ($isAdmin): ?>
          <a href="dashboardadmin.php" class="edit-button">Manage</a>
        <?php endif; ?>

        </form>
        </div>
      </div>
  </div>
    </div>
    <footer>
      
<section id="footer">
  <img src="fotot/f.png" class="footer-img">
  <div class="title-text">
    <h1>CONTACT US</h1>
    <h1></h1>
  </div>
  <div class="footer-row">
    <div class="footer-left">
      <h1>Opening Hours</h1>
      <p>Monday to Friday - 8am to 6pm</p>
      <p>Saturday 10am to 3pm</p>
    </div>
    <div class="footer-right">
      <h1>Get In Touch</h1>
      <p>Email: boundlesstravel@gmail.com</p>
      <p>Tel:+383 44-123-456</p>
    </div>
  </div>
 
  <div class="social">
    <img src="fotot/facebook.png">
    <img src="fotot/twitter.png">
    <img src="fotot/instagram.png">
    <p>Copyright 2024 Travel Company. All rights reserved.</p>
 
  </div>
 </section>
 
    </footer>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector(".navbar");
    
        window.addEventListener("scroll", function () {
          if (window.scrollY > 100) { 
            navbar.classList.add("shrink");
          } else {
            navbar.classList.remove("shrink");
          }
        });
      });
    </script>
</body>
</html>