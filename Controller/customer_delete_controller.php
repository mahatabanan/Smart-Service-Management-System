<?php
session_start(); 
require_once "../Model/cuddoperation.php"; 

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

if (isset($_POST['delete_btn'])) {
    $requestid = $_POST['requestid'];

    if (!empty($requestid)) {
       
        $result = managerDeleteRequest($requestid);

        if ($result) {
            header("Location: ../View/view_service_request.php?msg=success");
            exit();
        } else {
            header("Location: ../View/view_service_request.php?msg=error");
            exit();
        }
    }
} else {
    header("Location: ../View/view_service_request.php");
    exit();
}
?>