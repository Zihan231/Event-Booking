<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="stylesheet" href="../Asset/CSS/veanu.css">
</head>
<body>
    <div class="container">
        <button class="back-btn" onclick="goBack()" aria-label="Go back">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h1>Venue Details</h1>
        <div id="error" class="error" style="display: none;"></div>
        <div class="tabs">
            <div class="tab active" onclick="showTab('parking')" aria-label="View Parking Map">Parking Map</div>
            <div class="tab" onclick="showTab('transport')" aria-label="View Public Transport Guide">Public Transport Guide</div>
        </div>

        <div id="parking" class="tab-content active">
            <h2>Parking Map</h2>
            <div class="map-container">
                <img src="https://placehold.co/600x400?text=Parking+Map" alt="Parking Map of Event Center" width="600" height="400">
                <p>Our venue offers over 3,000 parking spaces, including blue badge bays. Pre-book your spot online. Motorcycle parking is free in Zone East 1. Coach parking is £50/day.</p>
            </div>
            <div class="traffic-alerts">
                <h3>Real-Time Traffic Alerts</h3>
                <button onclick="fetchTrafficAlerts()">Get Traffic Updates</button>
                <ul id="traffic-alerts-list"></ul>
            </div>
        </div>

        <div id="transport" class="tab-content">
            <h2>Public Transport Guide</h2>
            <div class="transport-guide">
                <h3>Metro</h3>
                <p>Take the Central Line to Event Center Station (5-minute walk). Trains run every 5 minutes during peak hours.</p>
                <h3>Bus</h3>
                <p>Routes 101, 202, and 303 stop at Venue Entrance. Real-time bus arrivals available via the Citymapper app.</p>
                <h3>Train</h3>
                <p>National Rail services to Event Center Station. Book tickets via the Trainline app.</p>
                <p><strong>Tip:</strong> Use contactless payment or an Oyster card for seamless travel.</p>
            </div>
        </div>

        <div class="hotel-booking">
            <h2>Book Nearby Hotels</h2>
            <div class="booking-form">
                <div class="input-group">
                    <label for="checkin">Check-In Date</label>
                    <input type="date" id="checkin" aria-label="Select check-in date">
                </div>
                <div class="input-group">
                    <label for="guests">Number of Guests</label>
                    <input type="number" id="guests" min="1" value="1" placeholder="Enter number of guests" aria-label="Enter number of guests">
                </div>
                <button onclick="bookHotel()">Search Hotels</button>
            </div>
        </div>
    </div>

   <script src="../Asset/js/veanu.js"></script>
</body>
</html>