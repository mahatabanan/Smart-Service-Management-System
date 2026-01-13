<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="../View/css/updatestyle.css">
</head>
<body>

<div class="top-header">Profile Update</div>

<div class="profile-container">
    <h1>CURRENT NAME: <span><?php echo htmlspecialchars($user['name']); ?></span></h1>
    <h1>ADDRESS: <span><?php echo htmlspecialchars($user['address']); ?></span></h1>

    <div class="divider"></div>

    <h3>Edit Information:</h3>
    <form method="POST" action="../Controller/userupdatecontroller.php"onsubmit="return validateuserform(); " required>
        <input type="text"  id="uname" name="uname"  placeholder="Enter new name">
        <br><br>
        <input type="text"  id="pass" name="pass"  placeholder="Enter new Password"><br><br>
        <input type="submit" value="Change Now">
    </form>

</div>
<script src="../View/js/userupdatevalidation.js"></script>
</body>
</html>