<?php
$currentPage = basename($_SERVER['SCRIPT_NAME']); // This gets the current page name
?>

<header>
  <div>
    <span class="logo">Eventify</span>
  </div>
  <nav>
    <ul>
      <li><a class="<?= $currentPage == 'index.php' ? 'ActivePage' : '' ?>" href="../index.php">Home</a></li>
      <li><a class="<?= $currentPage == 'EventCalendar.php' ? 'ActivePage' : '' ?>" href="./EventCalendar.php">Events</a></li>
      <li><a class="<?= $currentPage == 'contactUs.php' ? 'ActivePage' : '' ?>" href="./contactUs.php">Contact Us</a></li>
    </ul>
  </nav>
  <div id="LogSing">
    <a class="Blacktxt <?= $currentPage == 'login.php' ? 'ActivePage' : '' ?>" href="./login.php">Login</a>
    <a class="<?= $currentPage == 'signUp.php' ? 'ActivePage' : '' ?>" href="./signUp.php" id="sgnUp">Sign Up</a>
  </div>
</header>
