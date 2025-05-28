<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['CustomerLoginstatus']) || $_SESSION['CustomerLoginstatus'] !== true) {
  header('location: login.php');
  exit();
} else {
  $EventID = $_SESSION['EventID'];
  require_once '../Model/Events.php';
  $eventDetails = geteventDetails($EventID);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment</title>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../Asset/CSS/Style_Payment.css?v2.1" />
</head>

<body>
  <!-- Header Starts -->
  <?php
  include("../View/Header.php");
  ?>
  <!-- Header Ends -->

  <!-- Main Content Starts -->
  <main class="payment-section">
    <div class="container">
      <h2>Confirm Your Payment</h2>

      <!-- E-Ticket Info -->
      <div class="ticket-delivery">
        <p>
          🎟️ Your e-ticket will be delivered instantly via email after
          successful payment.
        </p>
      </div>

      <!-- Payment Summary -->
      <div class="payment-summary">
        <h3>Order Summary</h3>
        <ul>
          <li><span>Event:</span><?php echo $eventDetails["E_Name"]; ?></li>
          <li><span>Date:</span> <?php echo $eventDetails["E_Date"]; ?></li>
          <li><span>Tickets:</span>
            <select id="ticketQuantity" name="ticketQuantity">
              <option value="0">Select Quantity</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <div><span>× $</span><span id="ticketPriceDisplay"><?php echo $eventDetails["E.Price"]; ?></span></div>
          </li>

          <hr class="Hr_Style" />

          <li><span>Total:</span> <span id="TotalAmount"></span> </li>
        </ul>
      </div>

      <!-- Coupon Code Section (inside .payment-summary container, after Total) -->
      <div class="coupon-section">
        <form action="../Controller/CheckPromoCode.php" method="Post"  id="couponForm">
          <label for="couponCode">Have a coupon?(Optional)</label>

          <div class="coupon-input-group">
            <input
              type="text"
              id="couponCode"
              placeholder="Enter coupon code" name="couponCode" />
            <button type="submit" id="applyCouponBtn" name="applyCouponBtn" onclick="return confirmCouponCode()">Apply</button>
          </div>
        </form>


        <p id="couponMessage" class="coupon-message"></p>

        <p class="updated-total" style="display: <?php if(isset($_SESSION['ValidPromoCode']) || isset($_SESSION['InvalidPromoCode'])) echo 'block'; else echo 'none'; ?>">
          <strong>Updated Total:</strong> $<span id="updatedTotal"><?php if(isset($_SESSION['ValidPromoCode'])) {
            echo $_SESSION["ValidPromoCode"] . "<br>";
            echo $_SESSION['EventPrice'];} else {
            echo $_SESSION["InvalidPromoCode"];
          } ?></span>
        </p>
      </div>

      <!-- Payment Type Selection -->
      <div class="payment-type">
        <h3>Choose Payment Type</h3>
        <label for="paymentChoice">Payment Option:</label>
        <select id="paymentChoice">
          <option value="full">Full Payment</option>
          <option value="partial">Partial Payment</option>
        </select>
      </div>

      <!-- Partial Payment Section (Hidden by default) -->
      <div
        class="partial-payment"
        id="partialPaymentSection"
        style="display: none">
        <h3>Partial Payment</h3>
        <p>
          You can pay a part of the amount now and complete the rest later
          before the event.
        </p>

        <label for="partialAmount">Enter amount to pay now:</label>
        <input type="number" id="partialAmount" placeholder="e.g., 50.00" />

        <p class="payment-note">
          Remaining amount should be paid at least 3 days before the event.
        </p>
        <p
          id="partialError"
          style="color: red; display: none; margin-top: 10px">
          665
        </p>
      </div>

      <div id="PaymentOption">
        <h3>Payment Method</h3>
        <label for="paymentMethod">Choose your payment method:</label>
        <select id="paymentMethod">
          <option value="creditCard">BKash</option>
          <option value="paypal">Nagad</option>
          <option value="paypal">Rocket</option>
          <option value="paypal">Dutch-Bangla Bank</option>
          <option value="bankTransfer">Bank Transfer</option>
        </select>
      </div>
      <!-- Confirm Button -->
      <div class="confirm-button">
        <button id="payNowBtn" onclick="return confirmPayment()" class="pay-now-btn">Confirm & Pay</button>
      </div>
    </div>
  </main>

  <!-- Main Content Ends -->

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
            <li><a href="./View/contactUs.php">Contact</a></li>
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
  <!-- Footer Section Ends -->
  <script src="../Asset/js/Payment.js?v2.1"></script>
</body>

</html>