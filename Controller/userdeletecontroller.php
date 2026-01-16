<?php
session_start();
require  '../Model/cuddoperation.php';

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}
if (isset($_GET['mobile'])) {
    deleteUserByMobile($_GET['mobile']);
}

header("Location: viewuserscontroller.php");
exit();
