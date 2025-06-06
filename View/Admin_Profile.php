<?php 
session_start();
if (!isset($_SESSION['AdminLoginstatus']) || $_SESSION['AdminLoginstatus'] !== true) {
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
    <link rel="stylesheet" href="Style_AdminProfile.css" />
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

      <div id="ProfileContainer" class="Selected_Page">
        <a href="Admin_Profile.php" id="ProfileLink"
          >Profile <span><i class="ri-user-3-line"></i></span
        ></a>
      </div>
    </header>
    <!--Header Section End-->

    <!--Main Section-->
    <main>
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
              <li>
                <span><i class="ri-user-3-line"></i></span>
                <a href="Users.php">Users</a>
              </li>
              <li>
                <span> <i class="ri-settings-2-line"></i> </span>
                <a href="#">Settings</a>
              </li>
              <li id="logout">
                <span><i class="ri-logout-circle-r-line"></i></span>
                <a href="index.php">Logout</a>
              </li>
            </ul>
          </nav>
        </aside>
      </section>
      <!-- Main Content Area -->
      <!-- Main Content Area -->
      <section id="mainContent">
        <h1>Admin Profile</h1>
        <p></p>
        <div id="ProfileCard">
          <div id="ProfileImgContainer">
            <img src="Img/User-2.jpg" alt="Admin" />
          </div>
          <div id="ProfileDetails">
            <h2>Admin Name</h2>
            <p>Email: admin@Eventify.com</p>
            <p>Phone: +880 19961 46488</p>
            <p>Role: Super Administrator</p>
            <p>Username: admin_eventify</p>
            <p>Password: ********</p>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
