<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Worker</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .skills {
            margin-bottom: 15px;
        }

        .skills label {
            font-weight: normal;
            display: block;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th {
            background: #007bff;
            color: #fff;
            padding: 10px;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        table tr:hover {
            background: #f1f1f1;
        }

        .delete-btn {
            color: #fff;
            background: #dc3545;
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
        }

        .delete-btn:hover {
            background: #b52a37;
        }

        hr {
            margin: 30px 0;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Add Worker</h2>

    <form action="/SMART-SERVICE-MANAGEMENT-SYSTEM/Controller/addworkercontroller.php" method="post">

        <label>Worker Name</label>
        <input type="text" name="worker_name" required>

        <label>Worker Phone</label>
        <input type="text" name="worker_phone" required>

        <label>Worker Skills</label>
        <div class="skills">
            <label><input type="checkbox" name="skills[]" value="AC Repair"> AC Repair</label>
            <label><input type="checkbox" name="skills[]" value="Electric Work"> Electric Work</label>
            <label><input type="checkbox" name="skills[]" value="Washing Machine Repair"> Washing Machine Repair</label>
            <label><input type="checkbox" name="skills[]" value="Fridge Repair"> Fridge Repair</label>
            <label><input type="checkbox" name="skills[]" value="General Repair"> General Repair</label>
        </div>

        <input type="submit" name="add_worker" value="Add Worker">
    </form>

    <hr>

    <h2>Worker List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Skills</th>
            <th>Action</th>
        </tr>

        <?php 
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['wid'] ?></td>
                    <td><?= $row['workername'] ?></td>
                    <td><?= $row['workerphone'] ?></td>
                    <td><?= $row['workerskills'] ?></td>
                    <td>
                        <a href="../Controller/workerdelete.php?wid=<?= $row['wid'] ?>" 
                   class="delete-btn" onclick="return confirm('Are you sure?')">
                   Delete
                </a>
                    </td>
                </tr>
        <?php }
        } else {
            echo "<tr><td colspan='5'>No workers found</td></tr>";
        } ?>
    </table>

</div>

</body>
</html>
