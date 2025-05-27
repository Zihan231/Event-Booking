<?php
session_start();
require_once '../Model/Users.php';

if (isset($_POST['submit'])) {
    $fname  = trim($_POST['firstName']);
    $lname  = trim($_POST['lastName']);
    $email  = trim($_POST['email']);
    $pass   = trim($_POST['password']);
    $cpass  = trim($_POST['confirmPassword']);

    $user = [
        'firstname' => $fname,
        'lastname'  => $lname,
        'email'     => $email,
        'password'  => $pass
    ];

    $result = register($user);

    if ($result === "success") {
        $_SESSION['status'] = true;
        $_SESSION['username'] = $uname;
        header("Location: ../view/login.php");
        exit();
    }

    $_SESSION['form_data'] = $_POST;
    header('Location: ../view/signUp.php?error=valid');
    exit();
}

header('Location: ../View/signUp.php?error=invalid');
exit();
