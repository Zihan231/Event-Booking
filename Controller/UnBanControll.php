<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header('location: login.php');
  exit();
}
else {
    require_once '../Model/Users.php';
    if(isset($_POST["unbanBtn"])){
        $userId = $_POST["unbanBtn"];
        unbanUser($userId);
        header("Location: ../view/SeeAllBanned.php");
        exit();
    }

}
?>