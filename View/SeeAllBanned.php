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

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../Asset/CSS/Style_SeeAllBannedUser.css" />
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
          >Profile <span><i class="ri-user-3-line"></i></span
        ></a>
      </div>
    </header>
    <!--Header Section End-->

    <main>
      <!-- Side Bar Starts -->
      <section id="asideSection">
        <aside>
          <nav class="asideNav">
            <ul>
              <li>
                <span><i class="ri-dashboard-line"></i></span>
                <a href="DashBoard.php">Dashboard</a>
              </li>
              <li>
                <span><i class="ri-calendar-event-line"></i></span
                ><a href="Add_Event.php">Add Events</a>
              </li>
              <li id="Selected_Page">
                <span><i class="ri-user-3-line"></i></span>
                <a href="Users.php">Users</a>
              </li>
              <li>
                <span> <i class="ri-settings-2-line"></i> </span>
                <a href="#">Settings</a>
              </li>
              <li id="logout">
                <span><i class="ri-logout-circle-r-line"></i></span>
                <a href="../index.php">Logout</a>
              </li>
            </ul>
          </nav>
        </aside>
      </section>
      <!-- Side Bar Ends -->

      <!-- Main Content Area Stats -->
      <section id="mainContent">
        <div id="ManageUserHeader">
          <h1>Manage All Users</h1>
          <p id="ManageUserHeaderTxt">
            Here you can manage all the registered users of Eventify. You can
            view their details and also search for specific users.
          </p>
        </div>

        <div id="UserStatsContainer">
          <div class="user-stats-card">
            <h3 id="TotalUser">Total Users</h3>
            <p id="lockedCount">5</p>
            <a href="./Users.php" class="see-all-link">See All</a>
          </div>
          <div class="user-stats-card">
            <h3 id="Banned">Banned Users</h3>
            <p id="bannedCount">12</p>
            <a href="./SeeAllBanned.php" class="see-all-link">See All</a>
          </div>
          <div class="user-stats-card">
            <h3 id="Suspended">Suspended Users</h3>
            <p id="suspendedCount">8</p>
            <a href="./SeeAllSuspended.php" class="see-all-link">See All</a>
          </div>
        </div>

        <div>
          <form action="" onsubmit="return isValid()">
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

        <div id="RecentUser">
          <div id="RecentUserHeader">
            <h1>All Banned Users</h1>
            <span>
              <label for="genderFilter">Filter by Gender: </label>
              <select id="genderFilter">
                <option value="">All</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </span>
          </div>

          <table id="RecentUserTable" border="1">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>007</td>
                <td>Zihan</td>
                <td>Zihan@gmail.com</td>
                <td>+91 1234567890</td>
                <td>Male</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
              <tr>
                <td>007</td>
                <td>Ayesha</td>
                <td>ayesha123@gmail.com</td>
                <td>+91 9876543210</td>
                <td>Female</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
              <tr>
                <td>071</td>
                <td>Rahul</td>
                <td>rahul.kumar@email.com</td>
                <td>+91 9988776655</td>
                <td>Male</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
              <tr>
                <td>107</td>
                <td>Sara</td>
                <td>sara.ali@domain.com</td>
                <td>+91 9123456789</td>
                <td>Female</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
              <tr>
                <td>257</td>
                <td>Imran</td>
                <td>imran007@gmail.com</td>
                <td>+91 8899776655</td>
                <td>Male</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
              <tr>
                <td>684</td>
                <td>Nisha</td>
                <td>nisha.rani@webmail.com</td>
                <td>+91 7766554433</td>
                <td>Female</td>
                <td><button class="unban-button">Unban</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
    <script src="../Asset/js/AllBannedUser.js"></script>
  </body>
</html>
