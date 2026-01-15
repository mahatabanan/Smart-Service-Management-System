<?php

 require "../Model/cuddoperation.php";

// form submit হলে এই অংশ কাজ করবে
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $password = $_POST['password'];
    $mobile   = $_POST['phone'];   // form field
    $address  = $_POST['address'];
    $role="customer";

    // basic server-side validation
   if ($name != "" && $password != "" && $mobile != "" && $address != "") {

        $status=insertcustomer($name,$password,$mobile,$address,$role);
        sleep("3");
        if ($status) {
            
            header("Location:../View/login.html");

          
        } 
        else {
            $error = "Registration failed!";
        }

    } else {
        $error = "All fields are required!";
    }
}
?>