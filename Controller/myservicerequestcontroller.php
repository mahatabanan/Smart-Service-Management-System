<?php
session_start();
include "../Model/cuddoperation.php";

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
}
$mobile=$_SESSION['mobile'];
/* Fetch users from model */
$result = getallfromservicereq($mobile);
/* Load view */
include  "../View/Customer/myservicerequest.php";
