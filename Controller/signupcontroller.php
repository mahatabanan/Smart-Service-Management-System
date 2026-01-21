<?php
session_start();

require "../Model/cuddoperation.php";
require "../Model/user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name     = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    $mobile   = $_POST['phone'] ?? '';
    $address  = $_POST['address'] ?? '';
    $role     = "customer";

    // 1️⃣ Check if user already exists by mobile
    $user = getUserByMobile($mobile);

    if ($user !== null) {
        echo "Mobile Number is already taken!";
        exit(); // ⛔ stop execution here
    }

    // 2️⃣ Basic validation
    if ($name === '' || $password === '' || $mobile === '' || $address === '') {
        echo "All fields are required!";
        exit();
    }

    // 3️⃣ Insert new customer
    $status = insertcustomer($name, $password, $mobile, $address, $role);

    if ($status) {
       echo "<script>
            alert('Registration Successful!');
            window.location.href='../View/login.html';
          </script>";
    exit();
    } else {
        echo "Registration failed!";
        exit();
    }
}
?>
