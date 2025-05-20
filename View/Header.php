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
      <li><a class="<?= $currentPage == 'contactUs.html' ? 'ActivePage' : '' ?>" href="./contactUs.html">Contact Us</a></li>
    </ul>
  </nav>
  <div id="LogSing">
    <a class="Blacktxt <?= $currentPage == 'login.html' ? 'ActivePage' : '' ?>" href="./View/login.html">Login</a>
    <a class="<?= $currentPage == 'signUp.html' ? 'ActivePage' : '' ?>" href="./View/signUp.html" id="sgnUp">Sign Up</a>
  </div>
</header>
