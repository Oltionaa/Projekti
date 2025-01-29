<html>
    <head>
        <link rel="stylesheet" href="beaches.css"/>
    </head>
    <body>
    <?php include('navbar.php'); ?>
        <div class="section-container-s">
            <h1>You Choose Beaches</h1>
            <div class="cards-container">
                <div class="card">
                    <div class="card-image">
                        <img src="plazha1.jpg" alt="Pampelonne">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Pampelonne Beach</h3>
                        <p class="card-description">
                            Pampelonne Beach, Saint Tropez
                            The iconic Saint Tropez of the Cote d’Azur is one of the most famous destinations in France, and Pampelonne Beach is often associated with it. This popular beach is known as a vibrant party spot with clubs and beach bars. It is also known for its numerous celebrities and luxurious yachts.
                        </p>
                        <div class="card-price">$63</div>
                        <form action="saverezervimi.php" method="POST">
                            <input type="hidden" name="package_name" value="Pampelonne Beach">
                            <input type="hidden" name="price" value="63">
                            <button type="submit" class="card-button">Book Now</button>
                        </form>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-image">
                        <img src="plazha2.jpg" alt="Bodrum">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Bodrum</h3>
                        <p class="card-description">
                            There are some lovely beaches that stretch out from Bodrum town center along the peninsula, offering various options to relax by the Aegean. We list some of the more popular beaches here, with details of amenities and locations.
                        </p>
                        <div class="card-price">$75</div>
                        <form action="saverezervimi.php" method="POST">
                            <input type="hidden" name="package_name" value="Bodrum">
                            <input type="hidden" name="price" value="75">
                            <button type="submit" class="card-button">Book Now</button>
                        </form>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-image">
                        <img src="plazha3.jpg" alt="Thailand">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Thailand</h3>
                        <p class="card-description">
                            White sand, turquoise waters, and palm trees are on the itinerary of just about every visitor to Thailand. The country delivers in this respect. Many of these beaches also offer activities such as snorkeling, diving, or rock climbing, in addition to access to Thailand's amazing cuisine and unique cultural experiences.
                        </p>
                        <div class="card-price">$80</div>
                        <form action="saverezervimi.php" method="POST">
                            <input type="hidden" name="package_name" value="Thailand">
                            <input type="hidden" name="price" value="80">
                            <button type="submit" class="card-button">Book Now</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="plazha4.jpg" alt="Kisiwa">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Kisiwa</h3>
                        <p class="card-description">
                            Round off your African experience with a stay at a luxurious hotel on one of Tanzania’s beautiful beaches. Get in touch with us so we can find the location that meets all your personal expectations and create your unique beach holiday.
                        </p>
                        <div class="card-price">$70</div>
                        <form action="saverezervimi.php" method="POST">
                            <input type="hidden" name="package_name" value="Kisiwa">
                            <input type="hidden" name="price" value="70">
                            <button type="submit" class="card-button">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html