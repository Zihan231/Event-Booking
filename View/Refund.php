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
    <link rel="stylesheet" href="../Asset/CSS/Refund.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div>
        <span class="logo">Eventify</span>
      </div>
      <nav>
        <ul>
          <li><a class="ActivePage" href="index.html">Home</a></li>
          <li><a href="./View/EventCalendar.php">Events</a></li>
          <li><a href="./View/contactUs.html">Contact Us</a></li>
        </ul>
      </nav>
      <div id="LogSing">
        <a class="Blacktxt" href="./View/login.html">Login</a>
        <a href="./View/signUp.html" id="sgnUp">Sign Up</a>
      </div>
    </header>
    <main class="refund-policy-container">
      <section class="refund-header">
        <h1>Refund & Cancellation Policy</h1>
        <p>Manage your cancellations and check refund eligibility.</p>
      </section>

      <!-- View Refund Deadline -->
      <section class="refund-deadline">
        <h2>View Refund Deadline</h2>
        <form id="refund-deadline-form">
          <label for="booking-id">Enter Booking ID:</label>
          <input type="text" id="booking-id" name="booking-id" />
          <button type="submit">Check Deadline</button>
          <p id="deadline-result" class="form-message"></p>
        </form>
      </section>

      <!-- Submit Cancellation -->
      <section class="submit-cancellation">
        <h2>Submit a Cancellation</h2>
        <form id="cancellation-form">
          <label for="cancel-booking-id">Booking ID:</label>
          <input type="text" id="cancel-booking-id" name="cancel-booking-id" />

          <label for="cancel-reason">Reason for Cancellation:</label>
          <textarea id="cancel-reason" name="cancel-reason" rows="4"></textarea>

          <button type="submit">Submit Cancellation</button>
          <p id="cancel-confirmation" class="form-message"></p>
        </form>
      </section>

      <!-- Track Request -->
      <section class="track-request">
        <h2>Track Your Refund Request</h2>
        <form id="track-request-form">
          <label for="track-id">Enter Tracking ID:</label>
          <input type="text" id="track-id" name="track-id" />
          <button type="submit">Track</button>
          <p id="track-result" class="form-message"></p>
        </form>
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
              <li><a href="./View/contactUs.html">Contact</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Support</h4>
            <ul>
              <li><a href="./View/Refund.php">Refund Policy</a></li>
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

    <script src="../Asset/js/Refund.js"></script>
  </body>
</html>
