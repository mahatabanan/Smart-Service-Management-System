<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>

    <style>
    

        /* ===== RESET ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, sans-serif;
}

/* ===== BODY ===== */
body {
    background-color: #eef3f4;
}

/* ===== TOP HEADER BADGE ===== */
.top-header {
    padding: 15px 30px;}

.top-header h2 {
    display: inline-block;
    background-color: #005f73;
    color: #fff;
    padding: 14px 35px;
    border-radius: 10px;
    font-size: 22px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

/* ===== MAIN CONTAINER CARD ===== */
.dashboard-container {
    display: flex;
   margin: 10px 30px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    min-height: 80vh;
}

/* ===== SIDEBAR ===== */
.sidebar {
    width: 260px;
    padding: 25px 20px;
    border-right: 1px solid #e0e0e0;
}

/* Logo */
.sidebar .logo {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar .logo img {
    width: 150px;
}

.sidebar a {
    display: block;
    padding: 12px 12px;
    text-decoration: none;
    color: #000;
    font-family: "Segoe UI", Tahoma, Arial, sans-serif;
    font-size: 15px;
    font-weight: 500;          /* normal */
    border-radius: 6px;
    transition: all 0.3s ease;
}

/* Hover effect */
.sidebar a:hover {
    background-color: #E6F6FB;
    color: #0288B8;
}



/* ===== MAIN CONTENT ===== */
.main-content {
    flex: 1;
    padding: 40px 50px;
}

.main-content h2 {
    font-size: 26px;
    margin-bottom: 6px;
}

.main-content p {
    font-size: 15px;
    color: #555;
    margin-bottom: 6px;
}

/* Divider */
.main-content hr {
    margin: 25px 0;
    border: none;
    border-top: 1px solid #ddd;
}

.main-content h3 {
    font-size: 18px;
    margin-bottom: 15px;
}


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

            <a href="#" class="active">Home</a>
            <a href="http://localhost/SMART-SERVICE-MANAGEMENT-SYSTEM/View/Manager/manage_worker.php">Add Worker</a>

            <a href="#">View Service Requests</a>
            <a href="../Controller/userupdatecontroller.php">Profile</a>
            <a href="../Controller/logoutcontroller.php">Logout</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <h2>Hi <?php echo $user['name']; ?>,</h2>
            <p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
            <p>Welcome to Smart Service Management System</p>

            <hr>

            <h3>Dashboard Overview</h3>

            <p style="font-weight:bold; color:orange">
                Total Customers : <?php echo $count; ?>
            </p>

            <p style="font-weight:bold; color:orange">
                Total Pending Requests : <b><?php echo $pendingRequests; ?></b>
            </p>

            <p style="font-weight:bold; color:orange">
                Completed Requests : <b><?php echo $completedRequests; ?></b>
            </p>
        </div>

    </div>

</body>
</html>
