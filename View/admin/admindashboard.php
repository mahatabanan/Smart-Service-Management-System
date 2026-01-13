<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../View/css/dashboardstyle.css">
</head>
<body>

<!-- TOP HEADER -->
<div class="top-header">
    <h2>Admin Dash Board</h2>
</div>

<!-- MAIN CONTAINER -->
<div class="dashboard-container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo"><img src="../View/logo/logo.png" height=130 width=150></div>

        <a href="../Controller/admindashboardcontroller.php">HOME</a>

        <?php if ($user['role'] == 'admin'): ?>
            <a href="#">+ Add Manager</a>
        <?php endif; ?>

        <a href="#">Service Categories</a>
        <a href="adminview.php">View Users</a>
        <a href="../Controller/userupdatecontroller.php">Profile Update</a>
        <a href="../Controller/logoutcontroller.php">Logout</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <h2>Hi <?php echo $user['name']; ?>,</h2>
        <p>Welcome to Smart Service</p>

        <hr>


        
        <p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
        <p><b>Role:</b> <?php echo ucfirst($user['role']); ?></p>
        <p style="font-weight:bold ;color:orange">Total Active Users :<?php echo "  " .$count ?> </p>
    </div>

    <div>
        
        </div>

</div>

</body>
</html>
