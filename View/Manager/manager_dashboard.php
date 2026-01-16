
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>

    <!-- CSS
    <link rel="stylesheet" href="../View/css/customer_dashboard.css">   -->



     <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* PAGE */
        body {
            background: #e6eef0;
            color: #1f2933;
        }

        /* TOP HEADER */
        .top-header {
            background: #005f7a;
            color: #ffffff;
            padding: 16px 30px;
            font-size: 20px;
            font-weight: 600;
        }

        /* MAIN LAYOUT */
        .dashboard-container {
            display: flex;
            min-height: calc(100vh - 60px);
        }

        /* SIDEBAR */
        .sidebar {
            width: 230px;
            background: #ffffff;
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.08);
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .sidebar .logo img {
            width: 110px;
        }

        .sidebar a {
            display: block;
            padding: 12px 25px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #0288b8;
            color: #ffffff;
        }

        /* MAIN CONTENT */
        .main-content {
            flex: 1;
            padding: 30px;
        }

        .main-content h2 {
            margin-bottom: 8px;
        }

        .main-content p {
            margin-bottom: 6px;
            font-size: 15px;
        }

        .main-content hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }

        /* RESPONSIVE 
        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }
        }*/
    </style>
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
        <a href="../Controller/userupdatecontroller.php">Profile</a>
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


        <p style="font-weight:bold; color:orange">
             Total Customers : <?php echo $count; ?>
        </p>


        <p style="font-weight:bold; color:orange">Total Pending Requests : <b><?php echo $pendingRequests; ?></b></p>
      

        <p style="font-weight:bold; color:orange">Completed Requests : 
            <b><?php echo $completedRequests; ?></b></p>
        

    </div>

</div>

</body>
</html>
