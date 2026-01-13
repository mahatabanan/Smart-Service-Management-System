<?php
session_start();
require "../Model/db.php";
require "../Model/user.php";
require "../Model/cuddoperation.php"; // আপনার ফাইলের নাম চেক করে নিবেন (crudoperation হতে পারে)

// 1. Check Login
if (!isset($_SESSION['mobile'])) {
    header("Location: ../View/login.html");
    exit();
}

$mobile = $_SESSION['mobile'];

/* ---------- POST: Update Data (Form Submit হলে এখানে আসবে) ---------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['uname']);
    $password = $_POST['pass'];
    


    // SERVER-SIDE VALIDATION
    if ($name === "" || strlen($name) < 3) {
        // এখানে চাইলে এরর মেসেজ শো করানোর জন্য ভেরিয়েবল সেট করতে পারেন
        die("Invalid name: Name must be at least 3 characters.");
    }

    if ($password === "" || strlen($password) < 4) {
        // এখানে চাইলে এরর মেসেজ শো করানোর জন্য ভেরিয়েবল সেট করতে পারেন
        die("Invalid Password: Name must be at least 4 characters.");
    }

    // Model function call to update database
    // Make sure updatename() function exists in your Model file
    $status = updatename($name, $mobile, $password); 

    if($status){
        // Success: Redirect to Dashboard
        sleep("2");
        header("Location: admindashboardcontroller.php");
        exit();
    } else {
        echo "Update Failed!";
    }
}

/* ---------- GET: Show Update Form (প্রথমবার পেজে আসলে) ---------- */
// বর্তমান ডাটা ফর্মে দেখানোর জন্য ডাটাবেস থেকে আনা হলো
$user = getUserByMobile($mobile);

// View ফাইল লোড করা (আপনার ভিউ ফাইলটি Controller ফোল্ডারের বাইরে ../View/ তে আছে)
include "../View/updateuser.php";

?>