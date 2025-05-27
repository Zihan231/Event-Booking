<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
} else {


    require_once '../Model/DataBase.php';
    function addEvent($EName, $EDate, $ETime, $ELocation, $EDescription, $ESDescription, $EThumbnail, $ECategory, $ETicketPrice, $EVenueID, $PromoCode)
    {
        global $conn;
        $query = "INSERT INTO `events` (`E_ID`, `E_Name`, `E_Location`, `E_Date`, `E_Time`, `E_Description`, `E_Category`, `E.Price`, `short_description`, `Thumbnail`, `venue_ID`, `PromoCode`) VALUES (NULL, '$EName', '$ELocation', '$EDate', '$ETime', '$EDescription', '$ECategory', '$ETicketPrice', '$ESDescription', '$EThumbnail', '$EVenueID', '$PromoCode')";
        if (mysqli_query($conn, $query)) {
            return true;
        } else {
            return false;
        }
    }

    function totalEvents()
    {
        global $conn;
        $query = "SELECT COUNT(*) AS total FROM events";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['total'];
        } else {
            return 0;
        }
    }
    function geteventDetails($eventID)
    {
        global $conn;
        $query = "SELECT * FROM events WHERE E_ID = '$eventID'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }
    function getEventByID($eventID)
    {
        global $conn;
        $query = "SELECT * FROM events WHERE E_ID = '$eventID'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }
}
