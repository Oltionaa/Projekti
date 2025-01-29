<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Tours</title>
    <link rel="stylesheet" href="city.css">
    <link rel="stylesheet" href="home.css"/>
</head>
<body>
  <?php include('navbar.php'); ?>
    <div class="section-container-s">
        <h1>You Choose City Tours</h1>
        <div class="cards-container">
            <div class="card">
                <div class="card-image">
                    <img src="rio.jpg" alt="Rio de Janeiro">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Rio de Janeiro</h3>
                    <p class="card-description">
                        One of the main places we visit when we travel somewhere is exactly the CENTER of the city.
                        This is where the markets, points of interest, financial life and many other spaces are.
                        In the city of Rio de Janeiro is no different! The area is full of things to see, do and eat!
                        The area is also relatively small so you can visit the sites by foot.
                    </p>
                    <div class="card-price">$120</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="Rio de Janeiro">
                        <input type="hidden" name="price" value="120">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="new.jpg" alt="New York City">
                </div>
                <div class="card-content">
                    <h3 class="card-title">New York City</h3>
                    <p class="card-description">
                        Start with sightseeing NYC’s greatest hits: Times Square, the Empire State Building, 
                        the Statue of Liberty, and spend the rest of your time checking out neighbourhood gems.
                    </p>
                    <div class="card-price">$350</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="New York City">
                        <input type="hidden" name="price" value="350">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="lisbon.png" alt="Lisbon">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Lisbon</h3>
                    <p class="card-description">
                        The Portuguese capital is a hybrid of activity at all times, with warm temperatures 
                        outside even in the winter months, and a seemingly endless list of great hotels and restaurants.
                    </p>
                    <div class="card-price">$160</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="Lisbon">
                        <input type="hidden" name="price" value="160">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="dubai.jpg" alt="Dubai">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Dubai</h3>
                    <p class="card-description">
                        If it’s your first time in Dubai, this tour provides a comprehensive introduction to 
                        the city’s most memorable landmarks and attractions.
                    </p>
                    <div class="card-price">$200</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="Dubai">
                        <input type="hidden" name="price" value="200">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
