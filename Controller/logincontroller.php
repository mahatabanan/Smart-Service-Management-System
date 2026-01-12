<?php
session_start();
require  "../Model/user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mobile   = $_POST['mobilenumber'];
    $password = $_POST['Password'];

    $user = getUserByMobile($mobile);

    if (!$user) {
        echo "No user found with this mobile number!";
        exit;
    }

    if ($password == $user['password']) {
       // session set
    $_SESSION['mobile'] = $user['mobile'];
    $_SESSION['role']   = $user['role'];
    $_SESSION['name']   = $user['name'];
    
    // role-based redirect
    if ($user['role'] === 'admin') {
        header("Location: admindashboardcontroller.php");
    } elseif ($user['role'] === 'manager') {
        header("Location: ../manager_dashboard.php");
    } else {
        header("Location: ../customerdashboard.php");
    }

    }

    else{
        echo "Invalid Password";
    }

}
