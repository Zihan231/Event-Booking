<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventify</title>
  <link rel="stylesheet" href="../Asset/CSS/Refund.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <?php
  include("./Header.php");
  ?>
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
  <?php
  include("../View/Footer.php");
  ?>
  <!-- Footer Section -->
  

  <script src="../Asset/js/Refund.js"></script>
</body>

</html>