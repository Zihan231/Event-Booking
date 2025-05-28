<?php
require_once '../Model/Events.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php');
    exit();
} else {



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
}
