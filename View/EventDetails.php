<?php
include("../Model/DataBase.php");
$sql = "select * from events where E_ID='{$_GET["id"]}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventify</title>
  <link rel="stylesheet" href="../Asset/CSS/Style_EventDetails.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <!-- Header Starts -->
  <?php
  include("./Header.php");
  ?>
  <!-- Header Ends -->
  <!-- Main Starts -->
  <main>
    <section id="EventDetails">
      <div id="EventDetailsHeader">
        <h1><?php echo $row["E_Name"]; ?></h1>
      </div>
      <div id="EventBannerAndDetails">
        <div id="EventBanner">
          <img src="../Asset/Image/<?php echo $row['Thumbnail']; ?>" alt="Event Thumbnail">
        </div>
        <div id="EventContentDetails">
          <h2>Event Details</h2>
          <p>
            <?php
            echo $row["E_Description"];


            ?>
          </p>
          <h3>Event Information</h3>
          <ul>
            <li>
              <strong><i class="ri-calendar-line"></i></strong> <?php echo $row["E_Date"]; ?>
            </li>
            <li>
              <strong><i class="ri-time-line"></i></strong> <?php echo date("h:i A", strtotime($row["E_Time"])); ?>
            </li>
            <li>
              <strong><i class="ri-ancient-pavilion-fill"></i></strong>
              <?php
              echo $row["E_Location"];

              ?>
            </li>
            <li>
              <strong><i class="ri-price-tag-3-fill"></i></strong> Starting
              from
              <strong>&nbsp;$<?php echo $row["E.Price"]; ?></strong>
            </li>
          </ul>
          <div id="Stars">
            <span>Reviews:</span>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
          </div>
          <!-- <div id="CartAndBookNow_Btn_Container"> <a
                            id="BookNowBTN" href="ticketType.html">Book Now</a> <a id="BookNowBTN"
                            href="login.php?redirect=EventDetails.php">Book Now</a> <a
                            id="AddToCartBtn" href="">Add to Cart</a>
                    </div> -->
          <div id="CartAndBookNow_Btn_Container">
            <a id="BookNowBTN" href="ticketType.php">Book Now</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer Section -->
  <?php
  include("../View/Footer.php");
  ?>
  <!-- Footer Section Ends -->
  <script src="../Asset/js/LandingPage.js"></script>
</body>

</html>