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

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../Asset/CSS/Style_TakeAction.css" />
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
                <a href="../index.html">Logout</a>
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
        <!-- Search Bar Container Starts -->
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
        <!-- Search Bar Container Starts -->

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

          <!-- Action Grid Section -->
          <div class="action-grid">
            <!-- Ban User -->
            <div class="action-card">
              <h4>Ban User</h4>
              <p>Immediately ban this user from accessing the platform.</p>
              <button class="action-btn ban" onclick="banUser()">
                Ban User
              </button>
            </div>

            <!-- Suspend User -->
            <div class="action-card">
              <h4>Suspend User</h4>
              <p>Suspend account for a set period of time.</p>
              <select id="suspendDuration">
                <option value="3">3 days</option>
                <option value="7">7 days</option>
                <option value="30">30 days</option>
                <option value="90">90 days</option>
              </select>
              <button class="action-btn suspend" onclick="suspendUser()">
                Suspend
              </button>
            </div>

            <!-- Delete Permanently -->
            <div class="action-card">
              <h4>Delete Permanently</h4>
              <p>
                Warning: This will remove the account and all data permanently.
              </p>
              <button class="action-btn delete" onclick="deleteUser()">
                Delete
              </button>
            </div>

            <!-- Change Role -->
            <div class="action-card">
              <h4>Change Role</h4>
              <p>Upgrade or downgrade the user's role.</p>
              <select id="changeRole">
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
              <button class="action-btn suspend" onclick="changeUserRole()">
                Change Role
              </button>
            </div>

            <!-- Send Warning -->
            <div class="action-card">
              <h4>Send Warning</h4>
              <p>Send an official warning message to the user.</p>
              <button class="action-btn ban" onclick="sendWarning()">
                Send Warning
              </button>
            </div>

            <!-- Lock Account -->
            <div class="action-card">
              <h4>Lock Account</h4>
              <p>Lock the account until further verification is done.</p>
              <button class="action-btn suspend" onclick="lockAccount()">
                Lock Account
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="../Asset/js/TakeAction.js"></script>
  </body>
</html>
