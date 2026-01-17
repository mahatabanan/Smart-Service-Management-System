<?php
session_start();

// মডেল ফাইলের সঠিক পাথ
include "../Model/cuddoperation.php"; 

if (isset($_POST['add_worker'])) {

    $name   = trim($_POST['worker_name']);
    $phone  = trim($_POST['worker_phone']);
    $skills = $_POST['skills'] ?? [];

    if ($name == "" || $phone == "") {
        echo "Name and phone required!";
        exit();
    }

    $skillString = implode(", ", $skills);

    // ডাটাবেস ফাংশন কল
    $status = insertWorker($name, $skillString, $phone);

    if ($status) {
        // সফল হলে ভিউ পেজে ফেরত পাঠানো
        header("Location: ../View/Manager/manage_worker.php?success=1");
        exit();
    } else {
        echo "Worker insert failed!";
    }
}
?>