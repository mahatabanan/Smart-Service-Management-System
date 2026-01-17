<?php 
// Controller load kora hocche jate data pawa jay
require_once "../../Controller/view_service_request_controller.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager - Service Requests</title>
    
    <style>
        /* 1. Reset and Basic Setup */
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }

        body { 
            background-color: #f4f7f6; 
            padding: 20px; 
            color: #333;
        }

        /* 2. Container Style */
        .container { 
            width: 98%; 
            margin: auto; 
            background: #ffffff; 
            padding: 25px; 
            border-radius: 12px; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
        }

        h2 { 
            color: #005f7a; 
            margin-bottom: 25px; 
            text-align: center;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* 3. Table Styling */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            background: white;
        }

        th, td { 
            border: 1px solid #e0e0e0; 
            padding: 15px; 
            text-align: left; 
            font-size: 14px; 
        }

        th { 
            background-color: #005f7a; 
            color: white; 
            font-weight: 600;
            text-transform: uppercase;
        }

        tr:nth-child(even) { 
            background-color: #fcfcfc; 
        }

        tr:hover {
            background-color: #f1f8fa;
        }

        /* 4. Form & Input Elements */
        .assign-form { 
            display: flex; 
            flex-direction: column; 
            gap: 8px; 
            max-width: 180px;
        }

        select, input[type="number"] { 
            padding: 8px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            outline: none;
            transition: border 0.3s;
        }

        select:focus, input[type="number"]:focus {
            border-color: #005f7a;
        }

        /* 5. Button Styles */
        .btn-assign { 
            background-color: #27ae60; 
            color: white; 
            border: none; 
            padding: 10px; 
            border-radius: 5px; 
            cursor: pointer; 
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn-assign:hover { 
            background-color: #219150; 
        }

        /* 6. Status Badges */
        .status-badge { 
            padding: 6px 10px; 
            border-radius: 20px; 
            color: white; 
            font-size: 11px; 
            font-weight: bold;
            text-transform: uppercase;
        }

        .pending { 
            background-color: #f39c12; 
        }

        .accepted { 
            background-color: #2ecc71; 
        }

        /* Helper for Customer Info */
        .cust-name {
            font-weight: bold;
            display: block;
            color: #005f7a;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Manager Dashboard</h2>

    <table>
        <thead>
            <tr>
                <th>Customer Info</th>
                <th>Service Type</th>
                <th>Address</th>
                <th>Preferred Time</th>
                <th>Urgency</th>
                <th>Status</th>
                <th>Action (Assign)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(mysqli_num_rows($allRequests) > 0) {
                while($row = mysqli_fetch_assoc($allRequests)) { 
            ?>
                <tr>
                    <td>
                        <span class="cust-name"><?= $row['fullname']; ?></span>
                        <small><?= $row['mobile']; ?></small>
                    </td>
                    <td><?= $row['servicetype']; ?></td>
                    <td><?= $row['serviceaddress']; ?></td>
                    <td><?= $row['time']; ?></td>
                    <td>
                        <strong style="color: <?= ($row['urgency'] == 'Urgent') ? '#e74c3c' : '#333'; ?>;">
                            <?= $row['urgency']; ?>
                        </strong>
                    </td>
                    <td>
                        <span class="status-badge <?= ($row['status'] == 'Accepted') ? 'accepted' : 'pending'; ?>">
                            <?= $row['status']; ?>
                        </span>
                    </td>
                    <td>
                        <?php if($row['status'] !== 'Accepted') { ?>
                            <form action="../../Controller/assign_controller.php" method="POST" class="assign-form">
                                <input type="hidden" name="requestid" value="<?= $row['requestid']; ?>">
                                
                                <select name="workername" required>
                                    <option value="">Select Worker</option>
                                    <?php 
                                    foreach($workerList as $worker) { 
                                        echo "<option value='".$worker['workername']."'>".$worker['workername']."</option>";
                                    } 
                                    ?>
                                </select>
                                
                                <input type="number" name="service_charge" placeholder="Amount (TK)" required>
                                
                                <button type="submit" name="update_btn" class="btn-assign">Assign</button>
                            </form>
                        <?php } else { ?>
                            <div style="font-size: 13px;">
                                <strong>Worker:</strong> <?= $row['worker']; ?><br>
                                <strong>Charge:</strong> <?= $row['service_charge']; ?> TK
                            </div>
                        <?php } ?>
                    </td>
                </tr>
            <?php 
                } 
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>No records found!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>