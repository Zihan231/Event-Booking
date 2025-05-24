<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header('location: login.php');
  exit();
}
else {
    require_once '../Model/Users.php';
    if(isset($_POST["BanBtn"])){
        $userId = $_POST["User_ID"];
        banUser($userId);
        header("Location: ../view/SeeAllBanned.php");
        exit();
    }
    else if (isset($_POST["UnbanBtn"])){
        $userId = $_POST["User_ID"];
        unbanUser($userId);
        header("Location: ../view/Users.php");
    }


}
?>