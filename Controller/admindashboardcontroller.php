<?php
session_start();
require "../Model/db.php";
require "../Model/cuddoperation.php";
require "../Model/user.php";

if (!isset($_SESSION['mobile']) && $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}

$mobile = $_SESSION['mobile'];
$user  = getUserByMobile($mobile);
$count = countCustomers();
include "../View/admin/admindashboard.php";
