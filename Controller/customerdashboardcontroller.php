<?php
session_start();
require "../Model/user.php";

if (!isset($_SESSION['mobile'])) {
    header("Location: login.html");
    exit();
}

$mobile = $_SESSION['mobile'];
$user=getUserByMobile($mobile);
include "../View/Customer/customerdashboard.php";

?>