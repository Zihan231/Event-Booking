<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
}
require_once '../Model/DataBase.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
}
function addEvent($EName, $EDate, $ETime, $ELocation, $EDescription, $ESDescription, $EThumbnail, $ECategory, $ETicketPrice, $EVenueID)
{
    global $conn;
    $query = "INSERT INTO `events` (`E_ID`, `E_Name`, `E_Location`, `E_Date`, `E_Time`, `E_Description`, `E_Category`, `E.Price`, `short_description`, `Thumbnail`, `venue_ID`) VALUES (NULL, '$EName', '$ELocation', '$EDate', '$ETime', '$EDescription', '$ECategory', '$ETicketPrice', '$ESDescription', '$EThumbnail', '$EVenueID')";
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
