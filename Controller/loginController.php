<?php
session_start();
$_SESSION['status'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email == "" || $password == "") {
     
        header('Location: ../View/login.html');
        
    } else if ($email == $password) {
           $_SESSION["status"] = true;
        header('Location: ../View/DashBoard.php');
        
    } else {
        echo "Invalid user..!";
    }
} else {
    header('Location: ../View/login.html');
}
?>
