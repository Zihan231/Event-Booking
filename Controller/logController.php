<?php
require_once '../Model/users.php';
session_start();    
function loginController(){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
 
    $user = [
        "email" => $email,
        "password" => $password
    ];
 
    $status = loginUser($user);
 
    if($status){
        $_SESSION['email'] =  $status['email'];
        $_SESSION['password'] = $status['password'];
        $_SESSION['logged_in'] = true;
 
        //print_r($_SESSION);
 
         header('location: ../View/DashBoard.php');
         exit();
    }else{
        echo "Invalid Credentitals";
    }
}
 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    loginController();
} else{
    echo"Invalid";
}
?>