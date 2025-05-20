<?php
include("../Model/DataBase.php");

$sql = "select * from events where E_Category='{$_GET['Category']}'";

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
            <h1>Browse Events By category</h1>
            <p>Explore a variety of events happening near you.</p>
        </div>
        <!-- Search bar -->
        <div id="SrcBar_filters">
            <div id="SrcBar">
                <form action="" onsubmit="return isValidSearch()">
                    <div id="srcBar-container" class="srcbar-Div">
                        <input
                            type="text"
                            placeholder="Search for events"
                            id="search-input" />
                        <button id="search-button">Search</button>
                    </div>
                    <p id="errorMessage" class="error-message"></p>
                </form>
            </div>

            <div id="Filter">
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
        </div>

        <!-- Events stars -->
        <div id="EventCardContainer">

            <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<h2> No Events Found. </h2>";
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
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
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