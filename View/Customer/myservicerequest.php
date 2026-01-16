<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Users</title>

    <style>

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Arial, sans-serif;
}


        .top-header{
             width: 300px;
    background: #005f7a;
    border-radius: 8px;
    padding: 14px;
    margin: 20px;
    font-weight: 600;
    text-align: center;
    color: #E6F6FB;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

        body {
            background-color: #e6eef0;}
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #72bdefff;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #005f7a;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
        .delete {
            background: #e74c3c;
            color: #fff;
        }


        .container
         { width: 80%; 
         margin: 40px auto;
          background:white;
         padding: 30px; 
        border-radius: 10px;
          box-shadow: 0 6px 18px rgba(0,0,0,0.1); }
          
    </style>
</head>
<body>

<div class="top-header">
<h2>All User Details</h2>
</div>
<div class="container">
<table>
    <tr>
        <th>Request ID</th>
        <th>Service Type</th>
        <th>Service Address</th>
        <th>Date</th>
        <th>Time</th>
        <th>Urgency</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
           <td><?= $row['requestid']; ?></td>
            <td><?= $row['servicetype']; ?></td>
            <td><?= $row['serviceaddress']; ?></td>
            <td><?= $row['date']; ?></td>
            <td><?= $row['time']; ?></td>
            <td><?= $row['urgency']; ?></td>
            <td><?= $row['status']; ?></td>
        
            <td>
                <a class="btn delete"
                   href="../Controller/userdeletecontroller.php?mobile=<?= $row['mobile']; ?>"
                   onclick="return confirm('Are you sure?');">
                    Delete
                </a>
            </td>
        </tr>
    <?php } ?>

</table>
</div>

</body>
</html>
