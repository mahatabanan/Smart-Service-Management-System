<?php
session_start();
include "../Model/cuddoperation.php";

/* Access control */
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}

/* Fetch users from model */
$result = getAllUsers();

/* Load view */
require_once  '../View/admin/viewallusers.php';
