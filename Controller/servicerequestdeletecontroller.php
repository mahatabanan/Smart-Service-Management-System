<?php
session_start();
require  '../Model/cuddoperation.php';

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}
if (isset($_GET['requestid'])) {
    deleterequest($_GET['requestid']);
}
header("Location: view_service_request_controller.php");
exit();