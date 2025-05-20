<?php
include("./Model//DataBase.php");
$Sql = "SELECT * FROM events ORDER BY E_ID DESC LIMIT 4;";
$result = mysqli_query($conn, $Sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventify</title>
  <link rel="stylesheet" href="./Asset/CSS/style_Index.css?v18.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <!-- header Starts -->
  <header>
    <div>
      <span class="logo">Eventify</span>
    </div>
    <nav>
      <ul>
        <li><a class="ActivePage" href="./index.php">Home</a></li>
        <li><a href="./View/EventCalendar.php">Events</a></li>
        <li><a href="./View/contactUs.php">Contact Us</a></li>
      </ul>
    </nav>
    <div id="LogSing">
      <a class="Blacktxt" href="./View/login.php">Login</a>
      <a href="./View/signUp.php" id="sgnUp">Sign Up</a>
    </div>
  </header>
  <!-- header Ends -->
  <main>
    <!-- Hero Section -->
    <section id="hero">
      <div class="hero-container" class="HeroSec-Div">
        <div id="hero-text" class="HeroSec-Div">
          <h1>Discover Extraordinary Events Near You</h1>
        </div>
        <p id="hero-description">
          From concerts to workshops, find and book tickets for the best
          events happening around you.
        </p>
        <div class="HeroSec-Div">
          <a href="#SrcBar" id="Explore" class="hero-buttons-exp">Explore Events</a>
          <a href="#HowitWork-Section" id="HowitWork" class="hero-buttons-exp">How It Works</a>
        </div>
      </div>
    </section>

    <!-- Search Bar Section -->
    <section id="SrcBar">
      <div id="srcBar-container" class="srcbar-Div">
        <form action="" onsubmit="return isValidSearch()">
          <div class="srcbar-Div">
            <input
              type="text"
              placeholder="Search for events"
              id="search-input"
              class="srcbar-element" />
          </div>

          <div class="srcbar-Div">
            <button class="srcbar-element" id="search-button">Search</button>
          </div>
        </form>
        <p id="errorMessage" class="error-message"></p>
      </div>
    </section>

    <!-- Category Section -->
    <section id="Category-Section">
      <div id="Category-Description">
        <h2>Browse by Category</h2>
        <p>Discover events that match your interests and passions</p>
      </div>

      <div class="Category-Container">
        <a href="./View/EventsByCategory.php?Category=music">
          <div class="Icon-Background" id="BgColor-Music-icon">
            <i class="ri-music-line" class="Icon-Properties"></i>
          </div>
          <h3 class="Category-h">Music</h3>
          <p class="Category-P">324 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=sports">
          <div class="Icon-Background" id="BgColor-Sports-icon">
            <i class="ri-basketball-line"></i>
          </div>
          <h3 class="Category-h">Sports</h3>
          <p class="Category-P">156 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=theatre">
          <div class="Icon-Background" id="BgColor-Theatre-icon">
            <i class="ri-movie-line"></i>
          </div>
          <h3 class="Category-h">Theatre</h3>
          <p class="Category-P">89 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=education">
          <div class="Icon-Background" id="BgColor-Education-icon">
            <i class="ri-book-open-line"></i>
          </div>
          <h3 class="Category-h">Education</h3>
          <p class="Category-P">412 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=food">
          <div class="Icon-Background" id="BgColor-FoodDriks-icon">
            <i class="ri-restaurant-line"></i>
          </div>
          <h3 class="Category-h">Food & Drinks</h3>
          <p class="Category-P">412 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=networking">
          <div class="Icon-Background" id="BgColor-Networking-icon">
            <i class="ri-community-line"></i>
          </div>
          <h3 class="Category-h">Networking</h3>
          <p class="Category-P">255 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=art">
          <div class="Icon-Background" id="BgColor-ArtCrafts-icon">
            <i class="ri-paint-brush-line"></i>
          </div>
          <h3 class="Category-h">Art & Crafts</h3>
          <p class="Category-P">412 Events</p>
        </a>
        <a href="./View/EventsByCategory.php?Category=health">
          <div class="Icon-Background" id="BgColor-HealthWellness-icon">
            <i class="ri-heart-line"></i>
          </div>
          <h3 class="Category-h">Health & Wellness</h3>
          <p class="Category-P">412 Events</p>
        </a>
      </div>
    </section>

    <!-- Featured Events Section -->
    <section id="Featured-Events">
      <div id="Featured-Events-Description">
        <span>
          <h2>Featured Events</h2>
          <p>Discover the most popular events this month</p>
        </span>
        <span>
          <a href="./View/EventCalendar.php" id="ViewAll" class="ViewAll-button">View All <i class="ri-arrow-right-line"></i></a>
        </span>
      </div>
      <div id="Featured-cards-container">
        <!-- Featured Events PHP -->
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>


          <div id="F1" class="Featured-cards">
            <div class="Featured-img-container">
              <img
                src="./Asset/Image/<?php echo $row["Thumbnail"]; ?>"
                class="Featured-img"
                alt="<?php echo $row["Thumbnail"]; ?>" />
            </div>
            <div class="Featured-text-1">
              <div class="Featured-tag">
                <?php
                switch ($row["E_Category"]) {
                  case "music":
                    $tagId = "music-tag";
                    break;
                  case "sports":
                    $tagId = "sports-tag";
                    break;
                  case "entertainment":
                    $tagId = "theatre-tag";
                    break;
                  case "education":
                    $tagId = "education-tag";
                    break;
                  case "food":
                    $tagId = "food-tag";
                    break;
                  case "social":
                    $tagId = "networking-tag";
                    break;
                  case "art":
                    $tagId = "art-tag";
                    break;
                  case "health":
                    $tagId = "health-tag";
                    break;
                  default:
                    $tagId = "";
                }
                ?>
                <span class="Tag" id="<?php echo $tagId; ?>"><?php echo $row["E_Category"]; ?></span>
                <span class="price"><?php echo $row["E.Price"]; ?>$</span>
              </div>
              <div class="Featured-below-tag">
                <h3 class="Featured-h3"><?php echo $row["E_Name"]; ?></h3>
                <span><i class="ri-map-pin-line"></i> <?php echo $row["E_Location"]; ?></span>
                <span><i class="ri-calendar-line"></i> <?php echo $row["E_Date"]; ?> • <?php echo date("h:i A", strtotime($row["E_Time"])); ?></span>
                <a href="./View/EventDetails.php?id=<?php echo $row["E_ID"]; ?>" id="BookNowBtn_1" class="Featured-button">
                  View Details
                </a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- Feature Events End here -->
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="HowitWork-Section">
      <div class="HowItWorks-Header">
        <h3>How It Works</h3>
        <p>Book your favorite events in just a few simple steps</p>
      </div>

      <div id="HowItWorks-Container">
        <!-- Step 1 -->
        <div class="HowItWorks-Card">
          <div class="HowItWorks-Step">
            <div class="HowItWorks-Icon-Bg">
              <i class="ri-search-line"></i>
            </div>
          </div>
          <h4>Find Events</h4>
          <p>
            Browse through thousands of events or use our filters to find
            exactly what you're looking for.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="HowItWorks-Card">
          <div class="HowItWorks-Step">
            <div class="HowItWorks-Icon-Bg">
              <i class="ri-ticket-2-line"></i>
            </div>
          </div>
          <h4>Book Tickets</h4>
          <p>
            Select your seats and securely pay with your preferred method —
            fast and simple.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="HowItWorks-Card">
          <div class="HowItWorks-Step">
            <div class="HowItWorks-Icon-Bg">
              <i class="ri-emotion-happy-line"></i>
            </div>
          </div>
          <h4>Enjoy</h4>
          <p>
            Instant ticket delivery and event updates — just show up and have
            fun!
          </p>
        </div>
      </div>
    </section>

    <!-- User Review -->
    <section id="UserReview-Section">
      <div id="UserReview-Heading">
        <h3>What Our Users Say</h3>
        <p>
          Thousands of satisfied customers trust EventHub for their event
          booking needs
        </p>
      </div>
      <div id="UserReview-Container">
        <!-- User Review 1 -->
        <div class="Review-Description">
          <span class="User-Stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
          </span>
          <p>
            "Eventify made it so easy to find and book tickets for the concert
            I wanted to attend. The process was smooth, and I received my
            tickets instantly. Highly recommend!"
          </p>
          <div class="User-Name">
            <img
              src="./Asset/Image/User1.jpg"
              alt="User 1"
              class="User-Img" />
            <span class="User-Name-Text">John Doe</span>
          </div>
        </div>

        <!-- User Review 2 -->
        <div class="Review-Description">
          <span class="User-Stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-line"></i>
          </span>
          <p>
            "I use Eventify for all my event bookings. Their interface is
            clean, support is responsive, and the experience is reliable.
            Great platform!"
          </p>
          <div class="User-Name">
            <img
              src="./Asset/Image/User-2.jpg"
              alt="User 2"
              class="User-Img" />
            <span class="User-Name-Text">Jane Smith</span>
          </div>
        </div>

        <!-- User Review 3 -->
        <div class="Review-Description">
          <span class="User-Stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
          </span>
          <p>
            "Booking through Eventify was effortless. I appreciated the
            instant confirmation and the multiple payment options. Will
            definitely use it again."
          </p>
          <div class="User-Name">
            <img
              src="./Asset/Image/User-3.jpg"
              alt="User 3"
              class="User-Img" />
            <span class="User-Name-Text">Michael Lee</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section id="Newsletter-Section">
      <div id="Newsletter-Header">
        <h2>Stay Updated with Eventify</h2>
        <p class="Newsletter-Description">
          Subscribe to our newsletter for the latest events and exclusive
          offers.
        </p>
      </div>
      <div class="Newsletter-Container">
        <div>
          <form action="" onsubmit="return isValidEmail()">
            <input
              type="email"
              placeholder="Enter your email address"
              id="newsletter-input" />
            <button id="newsletter-button">Subscribe</button>
          </form>
        </div>

        <div id="newsletter-privacy">
          <p class="Newsletter-Description">
            By subscribing, you agree to our Privacy Policy and consent to
            receive updates from us.
          </p>
          <p id="EmailError" class="error-message"></p>
        </div>
      </div>
    </section>
  </main>
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
  <script src="./Asset/js/LandingPage.js"></script>
</body>

</html>