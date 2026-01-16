<?php
session_start();
require "../Model/cuddoperation.php";




       
/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
    
}
$mobile=$_SESSION['mobile'];
       //
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect & sanitize
    $fullname       = trim($_POST['customer_name'] ?? '');
    $servicetypeArr = $_POST['service_type'] ?? [];
    $description    = trim($_POST['problem_description'] ?? '');
    $serviceaddress = trim($_POST['service_address'] ?? '');
    $date           = $_POST['preferred_date'] ?? '';
    $time           = $_POST['preferred_time'] ?? '';
    $urgency        = $_POST['urgency'] ?? 'normal';
    $status         = "Pending";

    $errors = [];

    /* --------php validation  -------- */

    // Full name
    if ($fullname === '') {
        $errors[] = "Full name is required";
    } elseif (strlen($fullname) < 3) {
        $errors[] = "Full name must be at least 3 characters";
    }

    // Mobile
   /* if ($mobile === '') {
        $errors[] = "Mobile number is required";
    } elseif (!preg_match('/^01[0-9]{9}$/', $mobile)) {
        $errors[] = "Invalid mobile number format";
    }*/

    // Service type (checkbox)
    if (empty($servicetypeArr)) {
        $errors[] = "At least one service type must be selected";
    }

    // Address
    if ($serviceaddress === '') {
        $errors[] = "Service address is required";
    }

    // Description
    if ($description === '') {
        $errors[] = "Problem description is required";
    }

    // Date
    if ($date === '') {
        $errors[] = "Service date is required";
    }

    // Time
    if ($time === '') {
        $errors[] = "Service time is required";
    }

    /* -------- IF VALIDATION FAILS -------- */
    if (!empty($errors)) {
        $_SESSION['form_errors'] = $errors;
        header("Location: ../View/Customer/create_service_request.php");
        exit();
    }

    /* -------- service type  array to string . so there use implode  -------- */
    $servicetype = implode(", ", $servicetypeArr);


    /* --------  database insert -------- */
    $statusInsert = insertservicerequest(
        $mobile,
        $fullname,
        $servicetype,
        $serviceaddress,
        $description,
        $date,
        $time,
        $urgency,
        $status
    );

    if ($statusInsert) {
        $_SESSION['success'] = "Service request submitted successfully";
        header("Location: customerdashboardcontroller.php");
        exit();
    } else {
        $_SESSION['form_errors'] = ["Database error: request not saved"];
        header("Location: ../View/Customer/create_service_request.php");
        exit();
    }
}
