<?php
require_once '../Model/DataBase.php';
function getAllCustomers()
{
    global $conn;
    $query = "SELECT * FROM users WHERE U_Type = 'customer'";
    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}
function getAllAdmins()
{
    global $conn;
    $query = "SELECT * FROM users WHERE U_Type = 'admin'";
    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}
function getAllBanned()
{
    global $conn;
    $query = "SELECT * FROM users WHERE isBanned = '1'";
    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}
function getAllSuspended()
{
    global $conn;
    $query = "SELECT * FROM users WHERE isSuspended IS NOT NULL";
    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}
function updateUserInfo($userId, $firstName, $lastName, $email, $password)
{

    global $conn;

    $query = "UPDATE users SET U_FirstName='$firstName', U_LastName='$lastName', U_Email='$email', U_Password='$password' WHERE U_Id=$userId";
    return mysqli_query($conn, $query);
}
function updateUserInfoNoPass($userId, $firstName, $lastName, $email)
{

    global $conn;

    $query = "UPDATE users SET U_FirstName='$firstName', U_LastName='$lastName', U_Email='$email' WHERE U_Id=$userId";
    return mysqli_query($conn, $query);
}

function getCustomerById($userId)
{
    global $conn;
    $query = "SELECT * FROM users WHERE U_Id = $userId";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}
function searchUser($searchTerm)
{
    global $conn;
    $searchTermEscaped = mysqli_real_escape_string($conn, $searchTerm);
    $query = "SELECT * FROM users 
              WHERE U_Id LIKE '%$searchTermEscaped%' 
                 OR U_FirstName LIKE '%$searchTermEscaped%' 
                 OR U_LastName LIKE '%$searchTermEscaped%' 
                 OR U_Email LIKE '%$searchTermEscaped%'";
    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}

function SearchbannedUser($searchTerm)
{
    global $conn;
    $searchTermEscaped = mysqli_real_escape_string($conn, $searchTerm);

    $query = "SELECT * FROM users 
              WHERE isBanned = '1' AND (
                  U_Id LIKE '%$searchTermEscaped%' 
                  OR U_FirstName LIKE '%$searchTermEscaped%' 
                  OR U_LastName LIKE '%$searchTermEscaped%' 
                  OR U_Email LIKE '%$searchTermEscaped%'
              )";

    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

    return $users;
}
function SearchSuspendedUser($searchTerm)
{
    global $conn;
    $searchTermEscaped = mysqli_real_escape_string($conn, $searchTerm);

    $query = "SELECT * FROM users 
              WHERE isSuspended IS NOT NULL AND (
                  U_Id LIKE '%$searchTermEscaped%' 
                  OR U_FirstName LIKE '%$searchTermEscaped%' 
                  OR U_LastName LIKE '%$searchTermEscaped%' 
                  OR U_Email LIKE '%$searchTermEscaped%'
              )";

    $result = mysqli_query($conn, $query);
    $users = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}
