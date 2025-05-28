<?php
require_once '../Model/DataBase.php';
function getAllCustomers()
{
    global $conn;
    $query = "SELECT * FROM users WHERE U_Type = 'customer' AND isBanned = '0' AND isSuspended IS NULL";
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
    $users = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    return $users;
}

function searchUserById($searchTerm)
{
    global $conn;
    $searchTermEscaped = mysqli_real_escape_string($conn, $searchTerm);
    $query = "SELECT * FROM users 
              WHERE U_Id LIKE '%$searchTermEscaped%' ";
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
function unbanUser($userId)
{
    global $conn;
    $query = "UPDATE users SET isBanned = '0' WHERE U_Id = $userId";
    return mysqli_query($conn, $query);
}
function banUser($userId)
{
    global $conn;
    $query = "UPDATE users SET isBanned = '1' WHERE U_Id = $userId";
    return mysqli_query($conn, $query);
}
function TotalBannedUsers()
{
    global $conn;
    $query = "SELECT COUNT(*) as total FROM users WHERE isBanned = '1'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    return 0;
}
function TotalSuspendedUsers()
{
    global $conn;
    $query = "SELECT COUNT(*) as total FROM users WHERE isSuspended IS NOT NULL";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    return 0;
}
function TotalCustomers()
{
    global $conn;
    $query = "SELECT COUNT(*) as total FROM users WHERE U_Type = 'customer' And isBanned = '0' AND isSuspended IS NULL";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    return 0;
}

function InsertUser($firstName, $lastName, $pass, $email, $userType) {
    global $conn;
    $query = 'INSERT INTO users (U_FirstName, U_LastName, U_Password, U_Email, U_Type) 
              VALUES ($firstName, $lastName, $pass, $email, $userType)';
              $result = mysqli_query($conn, $query);
            if ($result) {
            return true;
        } else {
            return false;
        }

    }

    //   function loginUser($users){
    //      //Only db
    //      global $conn; //return conn
    //      $Query = "SELECT * FROM users WHERE email = '{$users['email']}' AND password = '{$users['password']}'";
    //      $result=mysqli_query($conn,$Query);
    //      $count=mysqli_num_rows($result);
    //      if($count>1){
    //         return false;
    //      }else{
    //          return mysqli_fetch_assoc($result); //Asscociative Array
    //      }
    //  }
     
 


     
// function register($user) {
//     global $conn;

//     $fname = $user['firstname'];
//     $lname = $user['lastname'];
//     $email = $user['email'];
//     $pass  = $user['password'];
//     $conpass = $user['password']; // You can change this if needed

//     // Check if email already exists
//     $checkSql = "SELECT * FROM registration WHERE email = '$email'";
//     $checkResult = mysqli_query($conn, $checkSql);

//     if (mysqli_num_rows($checkResult) > 0) {
//         mysqli_close($conn);
//         return "exists";
//     }

//     // Insert user data
//     $sql1 = "INSERT INTO registration (First_Name, Lirst_Name, email, Password, Con_Password)
//              VALUES ('$fname', '$lname', '$email', '$pass', '$conpass')";

//     $success1 = mysqli_query($conn, $sql1);

//     mysqli_close($conn);

//     return ($success1) ? "success" : "fail";
// }

?>
