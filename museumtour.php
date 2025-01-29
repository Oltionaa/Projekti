<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Tours</title>
    <link rel="stylesheet" href="museumtour.css">
    <link rel="stylesheet" href="home.css"/>
</head>
<body>
  <?php include('navbar.php'); ?>
    <div class="section-container-s">
        <h1>Museum Tours</h1>
        <div class="cards-container">
            <div class="card">
                <div class="card-image">
                    <img src="fotot/colo.jpg" alt="Colosseum">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Colosseum</h3>
                    <p class="card-description">
                        The Colosseum, also known as the Flavian Amphitheatre, is one of the most iconic landmarks of ancient Rome and is located in the heart of Rome, Italy.
                    </p>
                    <div class="card-price">$15</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="Colosseum">
                        <input type="hidden" name="price" value="15">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="fotot/l.jpg" alt="The Louvre">
                </div>
                <div class="card-content">
                    <h3 class="card-title">The Louvre</h3>
                    <p class="card-description">
                        The Louvre in France, officially called the Musée du Louvre, is the world’s largest art museum and a historic monument located in Paris.
                    </p>
                    <div class="card-price">$35</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="The Louvre">
                        <input type="hidden" name="price" value="35">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="fotot/museumlondon.jpg" alt="Butterfly Paradise">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Butterfly Paradise</h3>
                    <p class="card-description">
                        The London Butterfly Museum, more accurately known as Butterfly Paradise, is a vibrant butterfly house located at the Natural History Museum in London.
                    </p>
                    <div class="card-price">$20</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="Butterfly Paradise">
                        <input type="hidden" name="price" value="20">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="fotot/ny.jpg" alt="The Met">
                </div>
                <div class="card-content">
                    <h3 class="card-title">The Metropolitan Museum of Art</h3>
                    <p class="card-description">
                        The Metropolitan Museum of Art in New York City, commonly known as The Met, is one of the largest and most prestigious art museums in the world.
                    </p>
                    <div class="card-price">$35</div>
                    <form action="saverezervimi.php" method="POST">
                        <input type="hidden" name="package_name" value="The Metropolitan Museum of Art">
                        <input type="hidden" name="price" value="35">
                        <button type="submit" class="card-button">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
