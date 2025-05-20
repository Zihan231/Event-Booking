<?php
include("../Model/DataBase.php");

$sql = "SELECT COUNT(*) AS total FROM events";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalEvents = $row['total'];

$eventsPerPage = 12;
$totalPages = ceil($totalEvents / $eventsPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $eventsPerPage;

$sql = "SELECT * FROM events LIMIT $eventsPerPage OFFSET $offset"; //if Offset=12 so 12 rows will be skiped and Limit = 12 so only 12 rows will be shown
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventify</title>
  <link rel="stylesheet" href="../Asset/CSS/Style_EventCalender.css?v11.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <!-- Header Starts -->
  <?php
  $_SESSION["Active"] = "ActivePage";
  include("../View/Header.php");
  ?>
  <!-- Header Ends -->

  <!-- Main Starts -->
  <main id="Main-Section">
    <div id="AllEventsHeader">
      <h1>All Events</h1>
      <p>Explore a variety of events happening near you.</p>
    </div>
    <!-- Search bar -->
    <div id="SrcBar_filters">
      <div id="SrcBar">
        <form method="GET">
          <label for="FilterEvents">Filter:</label>
          <select name="Filter" id="FilterEvents">
            <option value="All">All Events</option>
            <option value="LowToHigh">Price Low to High</option>
            <option value="HighToLow">Price High to Low</option>
            <option value="Recent">Most Recent</option>
            <option value="Week">This Week</option>
            <option value="Month">This Month</option>
            <option value="Year">This Year</option>
          </select>
        </form>
      </div>
      <div id="Filter">
        <label for="FilterEvents">Filter:</label>
        <select name="Filter" id="FilterEvents">
          <option value="All">All Events</option>
          <option value="LowToHigh">Price Low to High</option>
          <option value="HighToLow">Price High to Low</option>
          <option value="Recent">Most Recent</option>
          <option value="Week">This Week</option>
          <option value="Month">This Month</option>
          <option value="Year">This Year</option>
        </select>
      </div>
    </div>

    <!-- Events stars -->
    <div id="EventCardContainer">

      <?php
      if (mysqli_num_rows($result) == 0) {
        echo "No Events Found.";
      } else {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>

          <!-- Events -->
          <div class="eventCards">
            <img src="../Asset/Image/<?php echo $row['Thumbnail']; ?>" alt="Event Thumbnail">

            <div class="EventDescription">
              <div id="EventTagContainer">
                <span class="EventTag" id="music-tag"><?php echo $row["E_Category"]; ?></span>
                <span class="price"><?php echo $row["E.Price"]; ?>$</span>
              </div>
              <h2><?php echo $row["E_Name"]; ?></h2>
              <p><?php echo $row["short_description"]; ?></p>
              <p>
                <span><i class="ri-calendar-line"></i></span>Date: <?php echo $row["E_Date"]; ?>
              </p>
              <p>
                <span><i class="ri-time-line"></i></span> <?php echo date("h:i A", strtotime($row["E_Time"])); ?>

              </p>
              <p>
                <span><i class="ri-map-pin-line"></i></span><?php echo $row["E_Location"] ?>
              </p>
              <a href="EventDetails.php?id=<?php echo $row["E_ID"]; ?>">View Details</a>
            </div>
          </div>
      <?php
        }
      }
      ?>






      <!--1st Page's Events ends Here -->
    </div>
    <div id="PaginationContainer">
      <div class="pagination">
        <!-- Previous Page Arrow -->
        <?php if ($page > 1): ?>
          <a href="?page=<?php echo $page - 1; ?>">&laquo;</a>
        <?php else: ?>
          <a href="#" style="pointer-events: none; color: gray;">&laquo;</a>
        <?php endif; ?>

        <!-- Page Numbers -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
          <a href="?page=<?php echo $i; ?>" <?php if ($i == $page) echo 'class="active"'; ?>>
            <?php echo $i; ?>
          </a>
        <?php endfor; ?>

        <!-- Next Page Arrow -->
        <?php if ($page < $totalPages): ?>
          <a href="?page=<?php echo $page + 1; ?>">&raquo;</a>
        <?php else: ?>
          <a href="#" style="pointer-events: none; color: gray;">&raquo;</a>
        <?php endif; ?>
      </div>
    </div>

    <!-- Event Container Ends -->
  </main>

  <!-- main Ends -->

  <?php
  include("../View/Footer.php");
  ?>

  <script src="../Asset/js/EventCalendar.js"></script>
</body>

</html>