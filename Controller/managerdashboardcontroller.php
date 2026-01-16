

 // 

<?php
session_start();
require "../Model/cuddoperation.php";

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

$mobile = $_SESSION['mobile'];

/* Manager info load */
$user = getUserByMobile($mobile);

/* Load dashboard view */
require "../View/Manager/manager_dashboard.php";
