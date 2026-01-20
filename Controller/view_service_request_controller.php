<?php
session_start();
require "../Model/cuddoperation.php";


if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}


$allRequests = getAllServiceRequests(); 
$workersData = fetchAllWorkers(); 

$workerList = [];
if ($workersData) {
    while($w = mysqli_fetch_assoc($workersData)) { 
       
        $workerList[] = $w; 
    }
}
require "../View/Manager/view_service_request.php";
?>