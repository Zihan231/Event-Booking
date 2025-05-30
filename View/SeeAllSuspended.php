<?php
session_start();
if (!isset($_SESSION['AdminLoginstatus']) || $_SESSION['AdminLoginstatus'] !== true) {
  header('location: login.php');
  exit();
} else {
  require_once '../Model/Users.php';
  $TotalUsers = TotalCustomers();
  $TotalBanned = TotalBannedUsers();
  $TotalSuspended = TotalSuspendedUsers();
  if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $searchResults = SearchSuspendedUser($searchTerm);
    if (!empty($searchResults)) {
      $users = $searchResults;
    }
  } else {
    $users = getAllSuspended();
  }
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
          <h3 id="TotalUser">Active Users</h3>
          <p id="lockedCount"><?php echo $TotalUsers; ?></p>
          <a href="./Users.php" class="see-all-link">See All</a>
        </div>
        <div class="user-stats-card">
          <h3 id="Banned">Banned Users</h3>
          <p id="bannedCount"><?php echo $TotalBanned; ?></p>
          <a href="./SeeAllBanned.php" class="see-all-link">See All</a>
        </div>
        <div class="user-stats-card">
          <h3 id="Suspended">Suspended Users</h3>
          <p id="suspendedCount"><?php echo $TotalSuspended; ?></p>
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
              <th>Expiry Date <br><sub>(YYYY-MM-DD)</sub></th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <p style="color: #4f46e5; padding: 5px 5px; font-weight:600; text-align:center;"><?php
                                                                            if (isset($_SESSION["QuickSuspendStatus"])) {
                                                                              echo $_SESSION["QuickSuspendStatus"];
                                                                              $_SESSION["QuickSuspendStatus"] = "";
                                                                            }
                                                                            ?></p>
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
                <form method="POST" action="../Controller/QuickSuspendOption.php">
            <select name="Choosed_Value" class="suspension-action" required>
              <option value="">Select Action</option>
              <option value="remove">Remove Suspension</option>
              <option value="Ex_1day">Extend: 1 Day </option>
              <option value="Ex_3days">Extend: 3 Days</option>
              <option value="Re_1day">Reduce: 1 Days</option>
              <option value="Re_3days">Reduce: 3 Days</option>
            </select>
            <input type="number" name="UserId" hidden value="' . $user['U_Id'] . '">
            <button type="submit" name="QuickSuspendBtn" class="confirm-button" >Confirm</button>
              </form>
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