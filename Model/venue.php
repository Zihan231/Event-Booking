<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
} else {
    require_once '../Model/DataBase.php';
    function addVenues($V_name, $V_Capacity, $V_Lo)
    {
        global $conn;

        $query = "INSERT INTO `venues` (`V_Id`, `V_Name`, `V_Capacity`, `V_Location`) VALUES (NULL, '$V_name', '$V_Capacity', '$V_Lo')";

        if (mysqli_query($conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
}
