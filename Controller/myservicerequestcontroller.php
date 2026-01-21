<?php
session_start();
// Model file er sathe connection kora hocche
include_once "../Model/cuddoperation.php";


if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
}


$mobile = $_SESSION['mobile'];


$result = getallfromservicereq($mobile);


include "../View/Customer/myservicerequest.php";
?>