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
    <link rel="stylesheet" href="../Asset/CSS/Style_UpdateUserInfo.Css" />
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
    <script src="../Asset/js/UpdateUserInfo.js"></script>
  </body>
</html>
