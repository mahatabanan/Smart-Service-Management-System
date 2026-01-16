<?php
session_start();
require  '../Model/cuddoperation.php';

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
}
if (isset($_GET['requestid'])) {
    deleterequest($_GET['requestid']);
}
header("Location: myservicerequestcontroller.php");
exit();