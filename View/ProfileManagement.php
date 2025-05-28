<?php
session_start();
if (!isset($_SESSION['CustomerLoginstatus']) || $_SESSION['CustomerLoginstatus'] !== true) {
  header('location: login.php');
  exit();
}else{
  $userEmail= $_SESSION["email"];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Management</title>
    <link rel="stylesheet" href="../Asset/CSS/ProfileManagement.css" />
  </head>
  <body>
    <div class="container">
      <h1>Profile Management</h1>

      <div class="tabs">
        <button class="tab active" onclick="showSection('view')">
          View Profile
        </button>
        <button class="tab" onclick="showSection('edit')">Edit Profile</button>
        <button class="tab" onclick="showSection('avatar')">
          Change Avatar
        </button>
        <button class="tab" onclick="showSection('password')">
          Update Password
        </button>
      </div>

      <div id="view" class="section active">
        <h2>View Profile</h2>
        <p><strong>Name:</strong> John Doe</p>
        <p><strong>Email:</strong> <?php echo $userEmail; ?></p>
        <p>
          <strong>About:</strong> Lorem ipsum dolor sit amet, consectetur
          adipiscing elit.
        </p>
      </div>

      <div id="edit" class="section">
        <h2>Edit Profile</h2>
        <label>Name:</label>
        <input type="text" value="John Doe" />
        <label>Email:</label>
        <input type="email" value="john@example.com" />
        <label>About Me:</label>
        <textarea>Write something about yourself...</textarea>
        <button>Save Changes</button>
      </div>

      <div id="avatar" class="section">
        <h2>Change Avatar</h2>
        <label>Upload New Avatar:</label>
        <input type="file" />
        <p>Current Avatar:</p>
        <div class="avatar"></div>
        <button>Update Avatar</button>
      </div>

      <div id="password" class="section">
        <h2>Update Password</h2>
        <label>Current Password:</label>
        <input type="password" />
        <label>New Password:</label>
        <input type="password" />
        <label>Confirm Password:</label>
        <input type="password" />
        <button>Update Password</button>
      </div>
    </div>

    <script>
      function showSection(id) {
        const sections = document.querySelectorAll(".section");
        const tabs = document.querySelectorAll(".tab");

        sections.forEach((sec) => sec.classList.remove("active"));
        tabs.forEach((tab) => tab.classList.remove("active"));

        document.getElementById(id).classList.add("active");
        event.target.classList.add("active");
      }
    </script>
  </body>
</html>
