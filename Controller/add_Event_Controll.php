<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header('location: login.php');
  exit();
}
if (isset($_POST["AddEvent"]) && $_SESSION['status'] == true) {

    $EventName = "";
    $EventDate = "";
    $EventTime = "";
    $EventLocation = "";
    $EventDescription = "";
    $EventThumbnail = "";
    $EventCategory = "";
    $TicketPrice = "";
    $EventVenue = "";
    $Capacity = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EventName = $_POST["eventName"] ?? "";
        $EventDate = $_POST["eventDate"] ?? "";
        $EventTime = $_POST["eventTime"] ?? "";
        $EventLocation = $_POST["eventLocation"] ?? "";
        $EventDescription = $_POST["eventDescription"] ?? "";
        $EventCategory = $_POST["eventCategory"] ?? "";
        $TicketPrice = $_POST["eventPrice"] ?? "";
        $EventVenue = $_POST["eventVenue"] ?? "";
        $Capacity = $_POST["eventCapacity"] ?? "";
        $EventThumbnail = $_FILES["eventImage"]["name"] ?? "";
        if (
            empty($EventName) || empty($EventDate) || empty($EventTime) || empty($EventLocation) ||
            empty($EventDescription) || empty($EventCategory) ||
            empty($TicketPrice) || empty($EventVenue) || empty($Capacity) ||
            !isset($_FILES["eventImage"]) || $_FILES["eventImage"]["error"] !== 0
        ) {
            echo "Please fill in all fields.";
        } else {
            echo "Successfull";
        }
    }
} else {
    header('location: ../view/login.php');
    exit();
}
