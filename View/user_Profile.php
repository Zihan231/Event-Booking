<?php
$currentPage = basename($_SERVER['SCRIPT_NAME']); // This gets the current page name
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_Profile</title>
    <link rel="stylesheet" href="../Asset/CSS/user_Profile.css">
</head>
<body>
    <!-- header in start -->
    <header>
  <div>
    <span class="logo">Eventify</span>
  </div>
  <nav>
    <ul>
      <li><a class="<?= $currentPage == 'index.php' ? 'ActivePage' : '' ?>" href="../index.php">Home</a></li>
      <li><a class="<?= $currentPage == 'EventCalendar.php' ? 'ActivePage' : '' ?>" href="./EventCalendar.php">Events</a></li>
      <li><a class="<?= $currentPage == 'contactUs.php' ? 'ActivePage' : '' ?>" href="./contactUs.php">Contact Us</a></li>
    </ul>
  </nav>
  <div id="LogSing">
    <a class="Blacktxt <?= $currentPage == 'login.php' ? 'ActivePage' : '' ?>" href="./login.php">Login</a>
    <a class="<?= $currentPage == 'signUp.php' ? 'ActivePage' : '' ?>" href="./signUp.php" id="sgnUp">Sign Up</a>
  </div>
</header>
    <!-- header in end -->

<!-- Main Content Area Stats -->
      <section id="mainContent">
        <div>
          
        <div id="UpdateformContainer">

          <!-- User Info Section -->
          <div class="user-info-card">
            <h2>User Information</h2>
            <div class="info-row">
              <span class="info-label">ID:</span>
              <span class="info-value">654</span>
            </div>
            <div class="info-row">
              <span class="info-label">Name:</span>
              <span class="info-value">John Doe</span>
            </div>
            <div class="info-row">
              <span class="info-label">Email:</span>
              <span class="info-value">john.doe@example.com</span>
            </div>
            <div class="info-row">
              <span class="info-label">Username:</span>
              <span class="info-value">johndoe123</span>
            </div>
          </div>

          <!-- Update Form -->
          <form class="update-profile-form" onsubmit="return isValidInput()">
            <h3>Edit Profile</h3>

            <div class="form-group">
              <label for="name">First Name</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter First name"
              />
              <div class="error" id="nameError"></div>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input
                type="text"
                id="lastName"
                name="lastName"
                placeholder="Enter Last name"
              />
              <div class="error" id="lastNameError"></div>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter email"
              />
              <div class="error" id="emailError"></div>
            </div>

            <div class="form-group">
              <label for="password">New Password (optional) </label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter new password"
              />
              <div class="error" id="passwordError"></div>
            </div>

            <button type="submit" class="update-btn">Update Profile</button>
            <p id="ErrorMsg_Update_Form"></p>
          </form>
        </div>
      </section>
    </main>
    <!-- <script src="../Asset/js/UpdateUserInfo.js"></script> -->
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
            <li><a href="./contactUs.php">Contact</a></li>
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
  </body>
</html>

</body>
</html>
