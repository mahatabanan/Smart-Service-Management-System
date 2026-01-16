<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="../View/css/customer_dashboard.css">
</head>
<body>
 
<!-- TOP HEADER -->
<div class="top-header">
    <h2>Customer Dashboard</h2>
</div>
 
<!-- MAIN CONTAINER -->
<div class="dashboard-container">
 
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">
            <img src="../View/logo/logo.png" alt="Logo">
        </div>
 
        <a href="#">Home</a>
        <a href="../View/Customer/create_service_request.php">Create Service Request</a>
        <a href="#">My Service Requests</a>
        <a href="#">Profile</a>
        <a href="../Controller/logoutcontroller.php">Logout</a>
    </div>
 
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <h2>Hi <?php echo $user['name']; ?>,</h2>
        <p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>
        <p>Welcome to Smart Service</p>
 
        <hr>
 
        <!-- HEADING -->
        <h3>Available Services</h3>
       
        <!-- SERVICES -->
        <div class="services-container">
 
            <div class="service-card">
                <img src="../View/Customer/ac_repair.jpg">
                <h4>AC Repair</h4>
                <p>৳300 – ৳800</p>
            </div>
 
            <div class="service-card">
                <img src="../View/Customer/electrical.jpg">
                <h4>Electrical Service</h4>
                <p>৳200 – ৳500</p>
            </div>
 
            <div class="service-card">
                <img src="../View/Customer/plumbing.jpg">
                <h4>Plumbing Service</h4>
                <p>৳250 – ৳600</p>
            </div>
 
            <div class="service-card">
                <img src="../View/Customer/refrigerator.jpg">
                <h4>Refrigerator Repair</h4>
                <p>৳400 – ৳1000</p>
            </div>
 
            <div class="service-card">
                <img src="../View/Customer/washing.jpg">
                <h4>Washing Machine</h4>
                <p>৳400 – ৳900</p>
            </div>
 
        </div>
 
       
    </div>
 
</div>
 
</body>
</html>
 
 