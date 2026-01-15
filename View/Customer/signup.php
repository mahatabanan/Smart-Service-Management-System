<?php
// database connection
//require "..db.php";

// form submit হলে এই অংশ কাজ করবে
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $password = $_POST['password'];
    $mobile   = $_POST['phone'];   // form field
    $address  = $_POST['address'];

    // basic server-side validation
   /* if ($name != "" && $password != "" && $mobile != "" && $address != "") {

        // INSERT using correct DB column name: mobile
        $sql = "INSERT INTO users (name, password, mobile, address)
                VALUES ('$name', '$password', '$mobile', '$address')";

        if (mysqli_query($conn, $sql)) {
            // success alert + redirect
            echo "<script>
                    alert('Welcome to our family');
                    window.location.href = 'login.html';
                  </script>";
            exit();
        } else {
            $error = "Registration failed!";
        }

    } else {
        $error = "All fields are required!";
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration - Smart Service System</title>
    <link rel="stylesheet" href="../../View/css/signup.css">
</head>
<body>

<div id="card">

    <div id="section">
        <img src="../../View/logo/logo.png" id="logo" alt="Logo">
    </div>

    <h3>Registration Form</h3>
    <p>Please fill out this form to register</p>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <!-- same file submit -->
    <form  action="../../Controller/signupcontroller.php" method="POST" onsubmit="return validateForm();">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="Enter 11 digit phone number">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="House / Road / Thana / District">

        <input type="submit" value="REGISTRATION">

    </form>

</div>

<script src="../../View/js/signup.js"></script>
</body>
</html>
