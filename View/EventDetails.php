
<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eventify</title>
    <link rel="stylesheet" href="../Asset/CSS/Style_EventDetails.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Header Starts -->
    <header>
      <div>
        <span class="logo">Eventify</span>
      </div>
      <nav>
        <ul>
          <li><a  href="../index.html">Home</a></li>
          <li><a class="ActivePage" href="../View/EventCalendar.php">Events</a></li>
          <li><a href="../View/contactUs.html">Contact Us</a></li>
        </ul>
      </nav>
      <div id="LogSing">
        <a class="Blacktxt" href="./login.html">Login</a>
        <a href="./signUp.html" id="sgnUp">Sign Up</a>
      </div>
    </header>
    <!-- Header Ends -->
    <!-- Main Starts -->
    <main>
      <section id="EventDetails">
        <div id="EventDetailsHeader">
          <h1>Uefa Champions League Final</h1>
        </div>
        <div id="EventBannerAndDetails">
          <div id="EventBanner">
            <img
              src="../Asset/Image/uefa-champions-league-stadium-0rqhq348gkv25lxg.jpg"
              alt="Event Banner"
            />
          </div>
          <div id="EventContentDetails">
            <h2>Event Details</h2>
            <p>
              Join us for the UEFA Champions League Final, where the best teams
              in Europe battle for glory. Experience the thrill of live
              football, electrifying atmosphere, and unforgettable moments.
              Don't miss out on this epic showdown at the iconic Wembley
              Stadium. Get your tickets now and be part of football history!
            </p>
            <h3>Event Information</h3>
            <ul>
              <li>
                <strong><i class="ri-calendar-line"></i></strong> June 10, 2025
              </li>
              <li>
                <strong><i class="ri-time-line"></i></strong> 8:00 PM
              </li>
              <li>
                <strong><i class="ri-ancient-pavilion-fill"></i></strong>
                Wembley Stadium, London
              </li>
              <li>
                <strong><i class="ri-price-tag-3-fill"></i></strong> Starting
                from
                <strong>&nbsp;$100</strong>
              </li>
            </ul>
            <div id="Stars">
              <span>Reviews:</span>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-half-fill"></i>
            </div>
            <!-- <div id="CartAndBookNow_Btn_Container"> <?php if (isset($_SESSION['user_id'])): ?> <a
                            id="BookNowBTN" href="ticketType.html">Book Now</a> <?php else: ?> <a id="BookNowBTN"
                            href="login.html?redirect=EventDetails.php">Book Now</a> <?php endif; ?> <a
                            id="AddToCartBtn" href="">Add to Cart</a>
                    </div> -->
            <div id="CartAndBookNow_Btn_Container">
              <a id="BookNowBTN" href="ticketType.php">Book Now</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer Section -->

    <!-- Footer Section -->
    <footer id="Footer-Section">
      <div class="footer-container">
        <div class="footer-brand">
          <h3>Eventify</h3>
          <p>Your gateway to unforgettable events and experiences.</p>
        </div>
        <div class="footer-links">
          <div class="footer-column">
            <h4>Company</h4>
            <ul>
              <li><a href="./contactUs.html">Contact</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Support</h4>
            <ul>
              <li><a href="./Refund.php">Refund Policy</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Follow Us</h4>
            <div class="social-icons">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-x-line"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-youtube-line"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Eventify. All rights reserved.</p>
      </div>
    </footer>
    <!-- Footer Section Ends -->
    <script src="../Asset/js/LandingPage.js"></script>
  </body>
</html>
