<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header('location: login.php');
  exit();
}
require_once '../Model/Users.php';
if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];
  $searchResults = SearchSuspendedUser($searchTerm);
  if (!empty($searchResults)) {
    $users = $searchResults;
  }
} else {
  $users = getAllSuspended();
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
    rel="stylesheet" />
  <link rel="stylesheet" href="../Asset/CSS/Style_SeeAllSuspendedUser.css" />
</head>

<body>
  <!--Header Section-->
  <header>
    <div id="LogoContainer">
      <span class="logo">Eventify</span>
      <span class="GrayTxt" id="AdminTxt">Admin</span>
    </div>

    <div id="ProfileContainer">
      <a href="ProfileManagement.php" id="ProfileLink">Profile <span><i class="ri-user-3-line"></i></span></a>
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
              <span><i class="ri-calendar-event-line"></i></span><a href="Add_Event.php">Add Events</a>
            </li>
            <li id="Selected_Page">
              <span><i class="ri-user-3-line"></i></span>
              <a href="Users.php">Users</a>
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
              placeholder="Search Users by ID or User Name" name="search" />
            <button>Search <i class="ri-search-line"></i></button>
          </div>
          <p id="Search_bar_error" class="error_message"></p>
        </form>
      </div>

      <div id="RecentUser">
        <div id="RecentUserHeader">
          <h1>All Suspended Users</h1>
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
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Expiry Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($users)) {
              foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['U_Id'] . "</td>";
                echo "<td>" . $user['U_FirstName'] . "</td>";
                echo "<td>" . $user['U_LastName'] . "</td>";
                echo "<td>" . $user['U_Email'] . "</td>";
                echo "<td>" . $user['isSuspended'] . "</td>";  
                echo '<td>
            <select class="suspension-action">
              <option value="">Select Action</option>
              <option value="remove">Remove Suspension</option>
              <option value="1day">1 Day</option>
              <option value="4days">4 Days</option>
              <option value="7days">7 Days</option>
              <option value="1month">1 Month</option>
            </select>
            <button class="confirm-button" onclick="handleConfirmAction(this)">Confirm</button>
          </td>';
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='6'>No suspended users found.</td></tr>";
            }
            ?>
          </tbody>

        </table>
      </div>
    </section>
  </main>
  <script src="../Asset/js/AllSuspandedUser.js?v2.0"></script>
</body>

</html>