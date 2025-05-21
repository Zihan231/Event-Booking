<?php
session_start();
$_SESSION['status'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $role = $_POST['role'] ?? '';

    if ($email == '' || $password == '') {
        header('Location: ../View/login.php');
        exit;
    }

    if ($email == $password) {
        $_SESSION['status'] = true;
        $_SESSION['email'] = $email;

        if ($role === 'admin') {
            header('Location: ../View/DashBoard.php');
            exit;
        } elseif ($role === 'customer') {
            header('Location: ../index.php');
            exit;
        } else {
            echo "Invalid user role selected!";
            exit;
        }
    } else {
        echo "Invalid email or password!";
        exit;
    }
} else {
    header('Location: ../View/login.php');
    exit;
}
