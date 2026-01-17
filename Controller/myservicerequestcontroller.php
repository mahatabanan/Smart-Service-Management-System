<?php
session_start();
// Model file er sathe connection kora hocche
include_once "../Model/cuddoperation.php";

/* Security check - Shudhu customer login thaklei dhukte parbe */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
}

// Login kora user er mobile number variable e rakha hocche
$mobile = $_SESSION['mobile'];

/* Database theke shudhu ei customer er shob request ana hocche */
$result = getallfromservicereq($mobile);

/* View file load kora hocche jate table e data dekha jay */
include "../View/Customer/myservicerequest.php";
?>