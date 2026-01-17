<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Service Requests</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .top-header {
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
            background-color: #e6eef0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #72bdefff;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #005f7a;
            color: white;
        }

        .container {
            width: 95%; 
            margin: 40px auto;
            background: white;
            padding: 30px; 
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }

        .btn {
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        .delete {
            background: #e74c3c;
            color: #fff;
        }

        /* Status badge style */
        .status-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 6px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="top-header">
    <h2>My Service Requests</h2>
</div>

<div class="container">
    <table>
        <tr>
            <th>Service Type</th>
            <th>Address</th>
            <th>Date</th>
            <th>Time</th>
            <th>Urgency</th>
            <th>Worker Details</th>
            <th>Price</th> <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['servicetype']; ?></td>
                <td><?= $row['serviceaddress']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><?= $row['time']; ?></td>
                <td><?= $row['urgency']; ?></td>
                
                <td>
                    <?php 
                    // Manager worker assign na kora porjonto waiting dekhabe
                    echo !empty($row['worker']) ? $row['worker'] : "<i>Waiting...</i>"; 
                    ?>
                </td>

                <td>
                    <b><?= ($row['service_charge'] > 0) ? $row['service_charge'] . " TK" : "TBD"; ?></b>
                </td>
                
                <td>
                    <span class="status-badge" style="background-color: <?= ($row['status'] === 'Accepted') ? '#2ecc71' : '#f39c12'; ?>;">
                        <?= $row['status']; ?>
                    </span>
                </td>

                <td>
                    <a class="btn delete"
                       href="../Controller/requestdeletecontroller.php?requestid=<?= $row['requestid']; ?>"
                       onclick="return confirm('Are you sure you want to cancel this request?');">
                        Cancel
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>