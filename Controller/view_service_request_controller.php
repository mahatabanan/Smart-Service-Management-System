<?php
session_start();
require_once __DIR__ . "/../Model/cuddoperation.php";

/* ১. এক্সেস কন্ট্রোল (ম্যানেজার ছাড়া অন্য কেউ ঢুকতে পারবে না) */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

/* ২. টেবিলের মেইন ডাটা আনা (Service Requests) */
// এই ফাংশনটি cuddoperation.php থেকে কল করা হচ্ছে
$allRequests = getAllServiceRequests(); 

/* ৩. ড্রপডাউনের জন্য ওয়ার্কার লিস্ট তৈরি করা */
// এখানে fetchAllWorkers() ব্যবহার করা হয়েছে যাতে এরর না আসে
$workersData = fetchAllWorkers(); 

$workerList = [];
if ($workersData) {
    while($w = mysqli_fetch_assoc($workersData)) { 
        // ডাটাবেস থেকে আসা প্রতিটি ওয়ার্কারের রো (Row) লিস্টে জমা করা হচ্ছে
        $workerList[] = $w; 
    }
}

/* ৪. মেসেজ হ্যান্ডলিং (যদি সাকসেস মেসেজ থাকে) */
$msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>