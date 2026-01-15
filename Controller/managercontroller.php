<?php
session_start();
require "../Model/cuddoperation.php";
/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../View/login.html");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['manager_name'];
    $password = $_POST['password'];
    $mobile   = $_POST['phone'];   // form field
    $address  = $_POST['address'];
    $role="manager";


     if ($name != "" && $password != "" && $mobile != "" && $address != "") {

        $status=insertmanager($name,$password,$mobile,$address,$role);
        
        if ($status) {
    echo "
    <script>
        alert('Registration Successful');
        window.location.href = 'admindashboardcontroller.php';
    </script>
    ";
    exit();
}
        /*else {
            $error = "Registration failed!";
        }

    } else {
        $error = "All fields are required!";*/
    }


}







?>