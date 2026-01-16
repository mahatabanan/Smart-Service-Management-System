<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f7f8;
        }

        .page {
            padding: 40px 60px;
        }

        /* Top title button (same as pic) */
        .page-title {
            background-color: #0b6477;
            color: white;
            border: none;
            padding: 12px 28px;
            font-size: 18px;
            border-radius: 10px;
            cursor: default;
        }

        /* Center card */
        .card {
            margin: 60px auto;
            width: 65%;
            background: #ffffff;
            padding: 35px 45px;
            border-radius: 14px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-bottom: 25px;
            color: #000;
        }

        /* Inputs */
        .card input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .card input:focus {
            outline: none;
            border-color: #0b6477;
        }

        /* Button */
        .btn-primary {
            margin-top: 10px;
            background-color: #0b6477;
            color: #fff;
            border: none;
            padding: 10px 22px;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background-color: #094e5c;
        }

        /* Message */
        .error {
            color: red;
            margin-top: 10px;
        }

        .success {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="page">
    <button class="page-title">Forgot Password</button>

    <div class="card">
        <h3>Reset Your Password</h3>

        <form action="../Controller/forgotpasscontroller.php" method="post">
            <input type="text" name="mobile" placeholder="Enter Mobile Number" required>

            <input type="text" name="otp" placeholder="Enter OTP" required>

            <input type="password" name="new_password" placeholder="New Password" required>

            <input type="password" name="confirm_password" placeholder="Confirm Password" required>

            <button type="submit" class="btn-primary">Change Password</button>
        </form>

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>{$_GET['error']}</p>";
        }
        if (isset($_GET['success'])) {
            echo "<p class='success'>{$_GET['success']}</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
