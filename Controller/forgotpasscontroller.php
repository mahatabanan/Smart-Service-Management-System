<?php

require "../Model/cuddoperation.php"; 

$FIXED_OTP = "123456";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mobile         =$_POST['mobile'];
    $otp            = trim($_POST['otp']);
    $newPassword    = $_POST['new_password'];
    $confirmPassword= $_POST['confirm_password'];

 
    if ($otp !== $FIXED_OTP) {
        header("Location: ../View/forgotpass.php?error=Invalid OTP");
        exit();
    }

   
    if ($newPassword !== $confirmPassword) {
        header("Location: ../View/forgotpass.php?error=Passwords do not match");
        exit();
    }

    
    if (strlen($newPassword) < 3) {
        header("Location: ../View/forgotpass.php?error=Password must be at least 4 characters");
        exit();
    }
    

 $status=updatepass($mobile,$newPassword);
    
  

    if ($status) {

        echo "<script>
                alert('Password updated successfully!');
                window.location.href='../View/login.html';
              </script>";
        exit();

    } else {
        echo "<script>
                alert('Invalid Mobile Number');
                window.location.href='../View/forgotpass.php';
              </script>";
        exit();
    }
}
