<?php
session_start();
require "../Model/db.php";
require "../Model/user.php";
require "../Model/cuddoperation.php"; 


if (!isset($_SESSION['mobile'])) {
    header("Location: ../View/login.html");
    exit();
}

$mobile = $_SESSION['mobile'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['uname']);
    $password = $_POST['pass'];
    


    
    if ($name === "" || strlen($name) < 3) {
        
        die("Invalid name: Name must be at least 3 characters.");
    }

    if ($password === "" || strlen($password) < 4) {
       
        die("Invalid Password: Name must be at least 4 characters.");
    }

    
    $status = updateuser($name, $mobile, $password); 

    if($status){

        sleep("2");
        header("Location: customerdashboardcontroller.php");
        exit();
    } else {
        echo "Update Failed!";
    }
}


$user = getUserByMobile($mobile);


include "../View/updateuser.php";

?>