
<?php
session_start();
require "../Model/cuddoperation.php";

if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}


$totalRevenue=totalrevenue();
$count=countCompletedRequests();
$result=getAllmanager();
$workercount=countAllWorkers();
include "../View/admin/inspect.php";
?>