<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
}
else{
  $EventID = $_SESSION["EventID"];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seat Selection</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../Asset/CSS/setseclation.css" />
  </head>
  <body>
    <div class="container">
      <div class="left">
        <button class="back-btn" onclick="goBack()" aria-label="Go back">
          <i class="fas fa-arrow-left"></i>
        </button>
        <h1>Seat Selection</h1>
        <div id="error" class="error" style="display: none"></div>
        <div class="stage">Stage</div>
        <div id="seat-map" class="seat-map">
          <div class="row">
            <div
              id="A1"
              class="seat vip"
              data-price="$149"
              data-features="VIP, Row A, Seat 1"
            >
              A1
            </div>
            <div
              id="A2"
              class="seat vip"
              data-price="$149"
              data-features="VIP, Row A, Seat 2"
            >
              A2
            </div>
            <div class="gap"></div>
            <div
              id="A3"
              class="seat vip"
              data-price="$149"
              data-features="VIP, Row A, Seat 3"
            >
              A3
            </div>
            <div
              id="A4"
              class="seat vip"
              data-price="$149"
              data-features="VIP, Row A, Seat 4"
            >
              A4
            </div>
          </div>
          <div class="row">
            <div
              id="B1"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row B, Seat 1"
            >
              B1
            </div>
            <div
              id="B2"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row B, Seat 2"
            >
              B2
            </div>
            <div class="gap"></div>
            <div
              id="B3"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row B, Seat 3"
            >
              B3
            </div>
            <div
              id="B4"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row B, Seat 4"
            >
              B4
            </div>
          </div>
          <div class="row">
            <div
              id="C1"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row C, Seat 1"
            >
              C1
            </div>
            <div
              id="C2"
              class="seat standard accessible"
              data-price="$99"
              data-features="Wheelchair Accessible, Row C, Seat 2"
            >
              C2
            </div>
            <div class="gap"></div>
            <div
              id="C3"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row C, Seat 3"
            >
              C3
            </div>
            <div
              id="C4"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row C, Seat 4"
            >
              C4
            </div>
          </div>
          <div class="row">
            <div
              id="D1"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row D, Seat 1"
            >
              D1
            </div>
            <div
              id="D2"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row D, Seat 2"
            >
              D2
            </div>
            <div class="gap"></div>
            <div
              id="D3"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row D, Seat 3"
            >
              D3
            </div>
            <div
              id="D4"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row D, Seat 4"
            >
              D4
            </div>
          </div>
          <div class="row">
            <div
              id="E1"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row E, Seat 1"
            >
              E1
            </div>
            <div
              id="E2"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row E, Seat 2"
            >
              E2
            </div>
            <div class="gap"></div>
            <div
              id="E3"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row E, Seat 3"
            >
              E3
            </div>
            <div
              id="E4"
              class="seat normal accessible"
              data-price="$79"
              data-features="Wheelchair Accessible, Row E, Seat 4"
            >
              E4
            </div>
          </div>
          <div class="row">
            <div
              id="F1"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row F, Seat 1"
            >
              F1
            </div>
            <div
              id="F2"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row F, Seat 2"
            >
              F2
            </div>
            <div class="gap"></div>
            <div
              id="F3"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row F, Seat 3"
            >
              F3
            </div>
            <div
              id="F4"
              class="seat normal"
              data-price="$79"
              data-features="Normal, Row F, Seat 4"
            >
              F4
            </div>
          </div>
          <div class="row">
            <div
              id="G1"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row G, Seat 1"
            >
              G1
            </div>
            <div
              id="G2"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row G, Seat 2"
            >
              G2
            </div>
            <div
              id="G3"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row G, Seat 3"
            >
              G3
            </div>
            <div
              id="G4"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row G, Seat 4"
            >
              G4
            </div>
            <div
              id="G5"
              class="seat standard"
              data-price="$99"
              data-features="Standard, Row G, Seat 5"
            >
              G5
            </div>
          </div>
        </div>
        <div class="filter-form">
          <div class="input-group">
            <input type="checkbox" id="wheelchair" onchange="filterSeats()" />
            <label for="wheelchair"
              >Show Wheelchair Accessible Seats Only</label
            >
          </div>
        </div>
        <button id="bookBtn" class="book-btn" onclick="confirmBooking()">
          Confirm Booking
        </button>
        <div id="continue-btn-container" class="continue-btn-container">
            <button
          onclick="window.location.href='./Payment.php' "
          class="cancel-btn" id="ContiueBtn" 
        >
          Contiue to Payment
        </button>
        </div>
        
      </div>
      <div class="right">
        <div id="seat-status" class="seat-status">
          <h3>Selected Seats</h3>
          <ul id="selected-seats-list"></ul>
          <h3>Booked Seats</h3>
          <ul id="booked-seats-list"></ul>
        </div>
      </div>
    </div>
    <script src="../Asset/js/setseclation.js"></script>
  </body>
</html>
