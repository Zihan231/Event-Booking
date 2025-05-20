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
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Asset/CSS/Style_System.css?v10.0" />
    <!-- <link rel="stylesheet" href="../Asset/CSS/Style_Users.css" /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--Header Section-->
    <header>
      <div id="LogoContainer">
        <span class="logo">Eventify</span>
        <span class="GrayTxt" id="AdminTxt">Admin</span>
      </div>

      <div id="ProfileContainer">
        <a href="ProfileManagement.php" id="ProfileLink"
          >profile <span><i class="ri-user-3-line"></i></span
        ></a>
      </div>
    </header>
    <!--Header Section End-->

    <!--Main Section-->
    <main>
     <!-- Side Bar Starts -->
      <section id="asideSection">
        <aside>
          <nav class="asideNav">
            <ul>
              <li >
                <span><i class="ri-dashboard-line"></i></span>
                <a href="./DashBoard.php">Dashboard</a>
              </li>
              <li>
                <span><i class="ri-calendar-event-line"></i></span
                ><a href="./Add_Event.php">Add Events</a>
              </li>
              <li>
                <span><i class="ri-user-3-line"></i></span>
                <a href="./Users.php">Users</a>
              </li>
              <li id="Selected_Page">
                <span> <i class="ri-settings-2-line"></i> </span>
                <a href="./System.php">System</a>
              </li>
              <li id="logout">
                <span><i class="ri-logout-circle-r-line"></i></span>
                <a href="../Controller/logoutController.php">Logout</a>
              </li>
            </ul>
          </nav>
        </aside>
      </section>
      <!-- Side bar Ends -->

      <!-- Main Content Area -->
      <section id="mainContent">
        <h1>Update System</h1>
        <div class="cardsContainer">
          <!-- Promocodes -->
          <div class="Systemcards">
            <h2>Add Promocodes</h2>
            <form
              id="promoForm"
              onsubmit="return PromoForm_Validation()"
              method="POST"
            >
              <label for="promoCode">Promo Code:</label>
              <input type="text" id="promoCode" name="promoCode" />

              <label for="expireDate">Expire Date:</label>
              <input type="date" id="expireDate" name="expireDate" />

              <label for="discount">Discount (%):</label>
              <input type="number" id="discount" name="discount" />

              <button type="submit">Add Promo</button>
            </form>
            <div id="errorMessage" style="color: red; margin-top: 10px"></div>
          </div>

          <!-- Venue -->
          <div class="Systemcards">
            <h2>Add Venue</h2>
            <form
              id="venueForm"
              onsubmit="return VenueForm_Validation()"
              method="POST"
            >
              <label for="venueName">Venue Name:</label>
              <input type="text" id="venueName" name="venueName" />
              <label for="capacity">Capacity:</label>
              <input type="number" id="capacity" name="capacity" />

              <label for="location">Location:</label>
              <input type="text" id="location" name="location" />

              <button type="submit">Add Venue</button>
            </form>
            <div
              id="venueErrorMessage"
              style="color: red; margin-top: 10px"
            ></div>
          </div>
          
          <!-- Waiting List Table -->
          <div class="Systemcards" style="grid-column: 1 / -1">
            <div id="WaitinglisHeader">
              <h2>Waiting List</h2>
            </div>
            <!-- Search & Filter Starts -->
          <div id="SrcFilContainer">
            <form method="POST" onsubmit="return isValid()">
              <div id="Search_bar_container">
                <input
                  type="text"
                  id="Search_bar"
                  placeholder="Search Users by ID or User Name"
                />
                <button>Search <i class="ri-search-line"></i></button>
              </div>
              <p id="Search_bar_error" class="error_message"></p>
            </form>
          </div>
            <table id="RecentUserTable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Registration Date</th>
                  <th>Event Name</th>
                  <th>Event ID</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John Doe</td>
                  <td>john@example.com</td>
                  <td>2025-05-01</td>
                  <td>Spring Festival</td>
                  <td>EVT123</td>
                </tr>
                <tr>
                  <td>Jane Smith</td>
                  <td>jane@example.com</td>
                  <td>2025-05-03</td>
                  <td>Music Concert</td>
                  <td>EVT456</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
    <script src="../Asset/js/System.js"></script>
  </body>
</html>
