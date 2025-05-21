<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="../Asset/CSS/Style_DashBoard.css" />
  <!-- <link rel="stylesheet" href="../Asset/CSS/Style_Users.css" /> -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <!--Header Section-->
  <header>
    <div id="LogoContainer">
      <span class="logo">Eventify</span>
      <span class="GrayTxt" id="AdminTxt">Admin</span>
    </div>

    <div id="ProfileContainer">
      <a href="ProfileManagement.php" id="ProfileLink">profile <span><i class="ri-user-3-line"></i></span></a>
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
            <li id="Selected_Page">
              <span><i class="ri-dashboard-line"></i></span>
              <a href="./DashBoard.php">Dashboard</a>
            </li>
            <li>
              <span><i class="ri-calendar-event-line"></i></span><a href="./Add_Event.php">Add Events</a>
            </li>
            <li>
              <span><i class="ri-user-3-line"></i></span>
              <a href="./Users.php">Users</a>
            </li>
            <li>
              <span> <i class="ri-settings-2-line"></i> </span>
              <a href="./System.php">System</a>
            </li>
            <li>
              <span> <i class="ri-file-list-3-fill"></i> </span>
              <a href="./attendee-list.php">Attende List</a>
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
      <!-- Dashboard starts -->
      <div class="contentHeader">
        <h1>Dashboard Overview</h1>
        <p>Welcome back! Here's what's happening with your events.</p>
      </div>
      <!-- Dashboard cards starts -->
      <div class="DashboardCards">
        <!-- Card 1 Total Tickets Sold-->
        <div class="card">
          <div class="cardLogo_Percent">
            <span id="Tickets_icon_Bg" class="card_icon_BG"><i class="ri-ticket-line"></i></span>
            <span class="Dashboard_cards_Percent" id="soldTicketPercent">+12.5%
            </span>
          </div>
          <h3>1,250</h3>
          <p>Total Tickets Sold</p>
        </div>
        <!-- Card 2 Active Events -->
        <div class="card">
          <div class="cardLogo_Percent">
            <span id="Active_Event_BG" class="card_icon_BG"><i class="ri-calendar-event-line"></i></span>
            <span id="Active_event_percent" class="Dashboard_cards_Percent">+12.5%
            </span>
          </div>
          <h3>150</h3>
          <p>Active Events</p>
        </div>

        <!-- Card 3 Revenue -->
        <div class="card">
          <div class="cardLogo_Percent">
            <span id="Revenue_icon_BG" class="card_icon_BG"><i class="ri-money-dollar-circle-line"></i></span>
            <span id="Revenue_percent" class="Dashboard_cards_Percent">+12.5%
            </span>
          </div>
          <h3>$58,965</h3>
          <p>Total Revenue</p>
        </div>

        <!-- Card 4 Total User -->
        <div class="card">
          <div class="cardLogo_Percent">
            <span id="Total_User_icon_BG" class="card_icon_BG"><i class="ri-user-line"></i></span>
            <span id="Total_user_percent" class="Dashboard_cards_Percent">+12.5%
            </span>
          </div>
          <h3>15,500</h3>
          <p>Total User</p>
        </div>
      </div>
      <!-- Dashboard Cards End -->

      <!-- Revenue stats & Sales Trend Starts -->
      <div id="RevenueStats_SalesTrend_Container">
        <!-- Revenue Stats Start -->
        <div id="RevenueStatsContainer" class="RevenueStats_SalesTrendsCards">
          <div id="RevenueStatsContainer_header">
            <h3><i class="ri-bar-chart-line"></i> Revenue Stats</h3>
            <span id="RevenueStatsContainer_header_links_Container">
              <span class="RevenueStatsContainer_header_links"><a href="#">Week</a></span>
              <span class="RevenueStatsContainer_header_links"><a href="#">Year</a></span>
              <span class="RevenueStatsContainer_header_links"><a href="#">Month</a></span>
            </span>
          </div>

          <div>
            <img
              src="../Asset/Image/Trends.jpg"
              alt=""
              id="RevenueStatsContainer_img" />
          </div>
        </div>
        <!-- Revenue Stats Ends -->

        <!-- Sales Trends Start -->
        <div id="Sale_Trends_Container" class="RevenueStats_SalesTrendsCards">
          <div id="RevenueStatsContainer_header">
            <h3><i class="ri-line-chart-line"></i> Sales Trends</h3>
            <span id="RevenueStatsContainer_header_links_Container">
              <span class="RevenueStatsContainer_header_links"><a href="#">Week</a></span>
              <span class="RevenueStatsContainer_header_links"><a href="#">Year</a></span>
              <span class="RevenueStatsContainer_header_links"><a href="#">Month</a></span>
            </span>
          </div>

          <div>
            <img
              src="../Asset/Image/Sale_Trends.webp"
              alt=""
              id="RevenueStatsContainer_img" />
          </div>
        </div>
        <!-- Sales Trends Ends -->
      </div>
      <!-- Revenue stats & Sales Trend Starts -->

      <!-- Recent User Starts -->
      <div id="RecentUserContainer">
        <div id="ManageUserHeader">
          <h1>Recently Registered Users</h1>
          <p id="ManageUserHeaderTxt">
            Manage the registered users of Eventify. You can view their
            details and also search for specific users.
          </p>
        </div>
        <!-- Search & Filter Starts -->
        <div>
          <form action="" onsubmit="return isValid()">
            <div id="Search_bar_container">
              <input
                type="text"
                id="Search_bar"
                placeholder="Search Users by ID or User Name" />
              <button>Search <i class="ri-search-line"></i></button>
            </div>
            <p id="Search_bar_error" class="error_message"></p>
          </form>
        </div>

        <div id="RecentUser">
          <div id="RecentUserHeader">
            <h3>Recently Registered Users</h3>
            <span>
              <label for="genderFilter">Filter by Gender: </label>
              <select id="genderFilter">
                <option value="">All</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </span>
          </div>
          <!-- Search & FIlter Ends -->

          <!-- Recent User Table Starts -->
          <table id="RecentUserTable" border="1">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>007</td>
                <td>Zihan</td>
                <td>Zihan@gmail.com</td>
                <td>+91 1234567890</td>
                <td>Male</td>
                <td><a href="../View/Update_User_info.php">Edit</a></td>
              </tr>
              <tr>
                <td>007</td>
                <td>Ayesha</td>
                <td>ayesha123@gmail.com</td>
                <td>+91 9876543210</td>
                <td>Female</td>
                <td>
                  <a href="../View/Update_User_info.php">Edit</a>
                </td>
              </tr>
              <tr>
                <td>071</td>
                <td>Rahul</td>
                <td>rahul.kumar@email.com</td>
                <td>+91 9988776655</td>
                <td>Male</td>
                <td><a href="../View/Update_User_info.php">Edit</a></td>
              </tr>
              <tr>
                <td>107</td>
                <td>Sara</td>
                <td>sara.ali@domain.com</td>
                <td>+91 9123456789</td>
                <td>Female</td>
                <td><a href="../View/Update_User_info.php">Edit</a></td>
              </tr>
              <tr>
                <td>257</td>
                <td>Imran</td>
                <td>imran007@gmail.com</td>
                <td>+91 8899776655</td>
                <td>Male</td>
                <td><a href="../View/Update_User_info.php">Edit</a></td>
              </tr>
              <tr>
                <td>684</td>
                <td>Nisha</td>
                <td>nisha.rani@webmail.com</td>
                <td>+91 7766554433</td>
                <td>Female</td>
                <td><a href="../View/Update_User_info.php">Edit</a></td>
              </tr>
            </tbody>
          </table>
          <!-- Recent User Table Ends -->
          <div id="See_All_User_Btn_Container">
            <a href="Users.php"><button id="See_All_User_Btn">See All Users</button></a>
          </div>
        </div>
      </div>
      <!-- Recent User Ends -->
    </section>
  </main>
  <script src="../Asset/js/AddUsers.js"></script>
</body>

</html>