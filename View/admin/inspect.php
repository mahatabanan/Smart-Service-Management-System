<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPECTION</title>
    <style>
        
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Arial, sans-serif;
}


        .dashboard-tiles {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin: 30px 20px;
}

/* Common tile style */
.tile {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tile:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.12);
}

.tile h3 {
    font-size: 18px;
    color: #374151;
    margin-bottom: 12px;
}

.tile .amount {
    font-size: 32px;
    font-weight: bold;
}

/* Individual tile colors */
.tile.revenue .amount {
    color: #16a34a; /* green */
}

.tile.completed .amount {
    color: #2563eb; /* blue */
}

.tile.worker .amount {
    color: #f97316; /* orange */
}

/* Table container */
.managers {
    margin: 30px 20px;
    background: #ffffff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

/* Table */
.managers table {
    width: 100%;
    border-collapse: collapse;
    font-size: 16px;
}

/* Header */
.managers th {
    background: #005f73; /* teal header */
    color: #ffffff;
    padding: 14px 16px;
    text-align: left;
    border: 1px solid #4ea8de;
}

/* Table data */
.managers td {
    padding: 14px 16px;
    border: 1px solid #6ca0ff; /* blue grid lines */
}



/* Hover effect */
.managers tr:hover td {
    background: #e0f2fe;
}

.mtitle
{

   
    background: #005f7a;
    border-radius: 8px;
    padding: 12px;
    margin: 0 60px;
    font-weight: 600;
    text-align: center;
    color: #E6F6FB;
}

    </style>

</head>
<body style=" background-color: #e6eef0;">

<div class="dashboard-tiles">

    <div class="tile revenue">
        <h3>Total Revenue</h3>
        <p class="amount">৳ <?php echo $totalRevenue; ?></p>
    </div>

    <div class="tile completed">
        <h3>Total Work Done</h3>
        <p class="amount"><?php echo $count; ?></p>
    </div>

    <div class="tile worker">
        <h3>Total Worker</h3>
        <p class="amount"><?php echo $workercount; ?></p>
    </div>

</div>
     <h3 class="mtitle">Managers</h3>

    <div class="managers">
<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Role</th>
    
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['mobile']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['role']; ?></td>
           
</tr>
            <?php } ?>
</table>
     

    
</body>
</html>