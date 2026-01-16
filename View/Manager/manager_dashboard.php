
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>

    <!-- CSS
    <link rel="stylesheet" href="../View/css/customer_dashboard.css">   -->
</head>
<body>

<!-- TOP HEADER -->
<div class="top-header">
    <h2>Manager Dashboard</h2>
</div>

<!-- MAIN CONTAINER -->
<div class="dashboard-container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">
            <img src="../View/logo/logo.png" alt="Logo">
        </div>

        <a href="#">Home</a>
        <a href="#">View Service Requests</a>
        <a href="#">Assigned Requests</a>
        <a href="#">Profile</a>
        <a href="../Controller/logoutcontroller.php">Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <h2>Hi <?php echo $user['name']; ?>,</h2>
        <p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
        <p>Welcome to Smart Service Management System</p>

        <hr>

        <!-- DASHBOARD INFO -->
        <h3>Dashboard Overview</h3>

        <ul>
            <li>Total Assigned Requests</li>
            <li>Pending Requests</li>
            <li>Completed Requests</li>
        </ul>

    </div>

</div>

</body>
</html>
