<?php
session_start();
if (isset($_SESSION["status"]) && $_SESSION["status"] == true && isset($_POST["UpdateBtn"])) {
    $Firstname=$_POST["firstname"] ??"";
    $Lastname=$_POST["lastName"] ??"";
    $EmailAddress=$_POST["email"] ?? "";
    $Newpass=$_POST["password"] ?? "";

    if(empty($Firstname) || empty($Lastname) || empty($EmailAddress)){
        echo "Please fillup the required input box.";
    } 
    else{
        echo "Update Successfull";
    }
    
} else {
    header('location: ../view/login.html');
    exit();
}
