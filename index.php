<?php

declare(strict_types=1);

require_once "showBookingsBudget.php";
require_once "showBookingsStandard.php";
require_once "showBookingsLuxury.php";
require_once "roomCheck.php";
require_once "bookingConfirmed.php";
require_once "checkTransferCode.php";
require_once "receipt.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="styles.css" rel="stylesheet">
    <link href="header.css" rel="stylesheet">
    <link href="hero.css" rel="stylesheet">
    <link href="nav.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="bookingForm.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <link href="calendar.css" rel="stylesheet">
    <link href="bookings.css" rel="stylesheet">
    <link href="receipt.css" rel="stylesheet">
    <link href="messages.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwater Resort</title>
</head>

<body>
    <!-- Header -->
    <header>
        <h1>Overwater Resort</h1>
        <div class="hr-container">
            <hr class="header-hr">
            <img src="images/star.svg" alt="">
            <img src="images/star.svg" alt="">
            <hr class="header-hr">
        </div>
        <h4 class="header-est">Established 1986</h4>
    </header>

    <!-- Hero -->
    <section class="hero">
        <picture>
            <source media="(min-width: 800px)" srcset="images/hero-large.jpg">
            <source media="(min-width: 600px)" srcset="images/hero-medium.jpg">
            <img src="images/hero-small.jpg" alt="aerial view of the hotel">
        </picture>
    </section>

    <!-- Navigation -->
    <nav>
        <div class="nav-room-container budget-select">
            <h3 class="nav-room">Economy</h3>
        </div>
        <div class="nav-room-container standard-select">
            <h3 class="nav-room">Standard</h3>
        </div>
        <div class="nav-room-container luxury-select">
            <h3 class="nav-room">Luxury</h3>
        </div>
    </nav>

    <!-- Main -->
    <main>
        <div class="main-container">
        <!-- Budget room content -->
        <article class="budget-room-content">
            <div class="room-budget">
                <div class="room-budget-image-container">
                    <img class="budget-room-image" src="images/economy-room.jpg" alt="image of budget room">
                    <img class="price-image" src="images/cost-1.svg" alt="image of $1">
                </div>
                <h2>Economy room</h2>
                <p class="room-budget-info">Welcome to our budget-friendly room! We offer an affordable and comfortable hotel room, perfect for travelers looking for a great value. This room may be basic, but it comes with everything you need for a comfortable stay. It's equipped with a comfortable bed, a nightstand, and a lamp, as well as a desk and chair for those who need to work. You'll also find a private bathroom stocked with towels, soap, and shampoo. Don't sacrifice comfort for cost - book a stay in our economy hotel rooms and enjoy a great night's sleep at an unbeatable price.</p>
                <div class="call-to-action-budget">
                    <h3>Stay more than one night and get a $1 discount!<img class="arrow" alt="" src="images/arrow.svg"></h3>
                </div>
            </div>
        </article>

        <!-- Standard room content -->
        <article class="standard-room-content">
            <div class="room-standard">
                <div class="room-standard-image-container">
                    <img class="budget-room-image" src="images/standard-room.jpg" alt="image of standard room">
                    <img class="price-image" src="images/cost-2.svg" alt="image of $2">
                </div>
                <h2>Standard room</h2>
                <p class="room-standard-info">We are proud to offer our comfortable and convenient standard hotel room, perfect for travelers looking for a comfortable and affordable place to stay. The room is equipped with a comfortable bed, a nightstand with a lamp, and a desk and chair for those who need to work. You'll also find a private bathroom stocked with towels, soap, and shampoo. Plus, the room offers a great view of the ocean. Our standard hotel rooms offer all the amenities you need for a comfortable stay at a great value.</p>
                <div class="call-to-action-standard">
                    <h3>Stay more than one night and get a $1 discount!<img class="arrow" alt="" src="images/arrow.svg"></h3>
                </div>
            </div>
        </article>

        <!-- Luxury room content -->
        <article class="luxury-room-content">
            <div class="room-luxury">
                <div class="room-luxury-image-container">
                    <img class="budget-room-image" src="images/luxury-room.jpg" alt="image of luxury room">
                    <img class="price-image" src="images/cost-3.svg" alt="image of $3">
                </div>
                <h2>Luxury room</h2>
                <p class="room-luxury-info">We are excited to offer our luxury room, the perfect choice for travelers seeking a little extra space and comfort. This spacious suite features a king-size bed, a separate living area with a sofa bed and armchair, and a fully equipped kitchen. You'll also enjoy the convenience of a private outdoor area with stunning views of the ocean. The room's bathroom boasts a deep soaking tub and a separate glass-enclosed shower. Additional amenities include a flat-screen TV, a mini-bar, and a safe for your valuables.</p>
                <div class="call-to-action-luxury">
                    <h3>Stay more than one night and get a $1 discount!<img class="arrow" alt="" src="images/arrow.svg"></h3>
                </div>
            </div>
        </article>

        <!-- Booking form -->
        <section class="booking-section">
            <form class="booking-form" action="index.php" method="post">
                <div class="arrndepdate-container">
                    <!-- Arrival date -->
                    <div class="label-container">
                        <label for="arrDate">Arrival date</label>
                    </div>
                    <input id="arrDate" type="date" name="arrDate" min="2023-01-01" max="2023-01-31" required>

                    <!-- Departure date -->
                    <div class="label-container">
                        <label for="depDate">Departure date</label>
                    </div>
                    <input id="depDate" type="date" name="depDate" min="2023-01-01" max="2023-01-31" required>
                </div>  

                <div class="transfernroom-container">
                    <!-- Transfer code -->
                    <div class="label-container">
                        <label for="transferCode">Transfer code</label>
                    </div>
                    <input id="transferCode" type="text" name="transferCode" required>

                    <!-- Room -->
                    <div class="label-container">
                        <label for="room">Room</label>
                    </div>
                    <select id="room" name="room" required>
                        <option value="budget">Economy</option>
                        <option value="standard">Standard</option>
                        <option value="luxury">Luxury</option>
                    </select>
                </div>

                <div class="break"></div>
                
                <div class="button-container">
                    <button type="submit">Make a reservation!</button>
                </div>
            </form>
        </section>

        <!-- Budget room calendar -->
        <section class="budget-room-calendar-container">
            <div class="budget-room-calendar">
                <p>Economy room availability</p>
                <h2>January 2023</h2>
                <?= showBookingsBudget(); ?>
            </div>
        </section>

        <!-- Standard room calendar -->
        <section class="standard-room-calendar-container">
            <div class="standard-room-calendar">
                <p>Standard room availability</p>
                <h2>January 2023</h2>
                <?= showBookingsStandard(); ?>
            </div>
        </section>

        <!-- Luxury room calendar -->
        <section class="luxury-room-calendar-container">
            <div class="luxury-room-calendar">
                    <p>Luxury room availability</p>
                    <h2>January 2023</h2>
                <?= showBookingsLuxury(); ?>
            </div>
        </section>
        </div>

        <script src="script.js"></script>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content-container">
            <div class="footer-some-content-container">
                <div class="footer-address">
                    <h3>Address</h3>
                    <p>Isla de los Monos, 123 Road, Yrgopelagio</p>
                </div>
                <div class="footer-contact">
                    <h3>Contact</h3>
                    <p>Telephone: +46 709 849 503</p>
                    <p>Email: customercare@overwaterresort.com</p>
                </div>
                <div class="footer-careers">
                    <h3>Careers</h3>
                    <p>Available jobs</p>
                </div>
            </div>
            <div class="copyright-info">
                <hr class="footer-hr">
                <p>&#169;2023 Tobias Åhlund</p>
            </div>
        </div>
    </footer>
</body>

</html>