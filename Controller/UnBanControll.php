<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['AdminLoginstatus']) || $_SESSION['AdminLoginstatus'] !== true) {
  header('location: login.php');
  exit();
} else {
  require_once '../Model/Users.php';
  if (isset($_POST["unbanBtn"])) {
    $userId = $_POST["unbanBtn"];
    unbanUser($userId);
    header("Location: ../view/SeeAllBanned.php");
    exit();
  }
}
