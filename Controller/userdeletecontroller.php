<?php
session_start();
require  '../Model/cuddoperation.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}

if (isset($_GET['mobile'])) {
    deleteUserByMobile($_GET['mobile']);
}

header("Location: viewuserscontroller.php");
exit();
