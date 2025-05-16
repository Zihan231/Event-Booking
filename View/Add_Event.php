<?php
// include ("../Controller/loginController.php");
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
    <link rel="stylesheet" href="../Asset/CSS/Style_AddEvent.css" />
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

    <!--Side Bar-->
    <main>
      <section id="asideSection">
        <aside>
          <nav class="asideNav">
            <ul>
              <li>
                <span><i class="ri-dashboard-line"></i></span>
                <a href="DashBoard.php">Dashboard</a>
              </li>
              <li id="Selected_Page">
                <span><i class="ri-calendar-event-line"></i></span
                ><a href="#">Add Events</a>
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
                <a href="../index.html">Logout</a>
              </li>
            </ul>
          </nav>
        </aside>
      </section>
      <!-- Side Bar Ends -->

      <!-- Main Content Area Stats -->
      <section id="mainContent">
        <!-- Add Event Header Starts -->
        <div id="AddEventHeader">
          <h2>Add Event</h2>
          <p>Add a new event to the system by filling out the form below.</p>
        </div>
        <!-- Add Event Header Ends -->

        <!-- form Start -->
        <div id="AddEventFormContainer">
          <form
            action=""
            method="post"
            enctype="multipart/form-data"
            onsubmit="return AddEvent_Validation()"
          >
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-calendar-line"></i>
                </span>
                <label for="eventName">Event Name</label>
              </div>

              <input type="text" id="eventName" name="eventName" />
            </div>
            <div class="formGroup">
              <div>
                <span><i class="ri-calendar-schedule-fill"></i></span>
                <label for="eventDate">Event Date</label>
              </div>

              <input type="date" id="eventDate" name="eventDate" />
            </div>
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-time-line"></i>
                </span>
                <label for="eventTime">Starting Time</label>
              </div>

              <input type="time" id="eventTime" name="eventTime" />
            </div>
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-map-pin-line"></i>
                </span>
                <label for="eventLocation">Event Location</label>
              </div>

              <input type="text" id="eventLocation" name="eventLocation" />
            </div>
            <div class="formGroup">
              <div>
                <span><i class="ri-file-text-line"></i></span>
                <label for="eventDescription">Event Description</label>
              </div>

              <textarea
                id="eventDescription"
                name="eventDescription"
                rows="4"
              ></textarea>
            </div>
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-file-image-line"></i>
                </span>
                <label for="eventImage">Event Thumbnail</label>
              </div>

              <input
                type="file"
                id="eventImage"
                name="eventImage"
                accept="image/*"
              />
            </div>
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-list-ordered"></i>
                </span>
                <label for="eventCategory">Event Category</label>
              </div>

              <select id="eventCategory" name="eventCategory">
                <option value="" disabled selected>Select a category</option>
                <option value="Music">Music</option>
                <option value="Sports">Sports</option>
                <option value="Theatre">Theatre</option>
                <option value="Education">Education</option>
                <option value="Food & Drinks">Food & Drinks</option>
                <option value="Networking">Networking</option>
                <option value="Art & Crafts">Art & Crafts</option>
                <option value="Health & Wellness">Health & Wellness</option>
              </select>
            </div>

            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-price-tag-3-line"></i>
                </span>
                <label for="eventPrice">Event Price</label>
              </div>

              <input type="number" id="eventPrice" name="eventPrice" min="0" />
            </div>
            <div class="formGroup">
              <div>
                <span>
                  <i class="ri-map-pin-line"></i>
                </span>
                <label for="eventVenue">Venue Details</label>
              </div>

              <input type="text" id="eventVenue" name="eventVenue" />
            </div>
            <div class="formGroup">
              <div>
                <span> <i class="ri-team-line"></i> </span>
                <label for="eventCapacity">Event Capacity</label>
              </div>

              <input
                type="number"
                id="eventCapacity"
                name="eventCapacity"
                min="1"
              />
            </div>

            <button type="submit" id="submitBtn">Add Event</button>
          </form>
          <div id="errorMessage" class="errorMessage"></div>
        </div>
        <!-- form ends -->
      </section>
    </main>

    <script src="../Asset/js/AddEvent.js"></script>
  </body>
</html>
