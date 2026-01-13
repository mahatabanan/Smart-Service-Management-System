<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Profile</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #eef3f4; }
        .top-header { background-color: #006680; padding: 20px 40px; color: white; font-size: 22px; font-weight: bold; }
        .profile-container { width: 60%; margin: 60px auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 6px 18px rgba(0,0,0,0.1); }
        .profile-container h1 { font-size: 20px; margin-bottom: 15px; color: #003d4d; }
        .profile-container span { color: #444; font-weight: normal; }
        .divider { margin: 25px 0; border-bottom: 1px solid #ddd; }
        input[type="text"] { width: 70%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; outline: none; }
        input[type="submit"] { padding: 10px 25px; margin-left: 10px; background-color: #006680; color: white; border: none; border-radius: 6px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #004d61; }
    </style>
</head>
<body>

<div class="top-header">Profile Update</div>

<div class="profile-container">
    <h1>CURRENT NAME: <span><?php echo htmlspecialchars($user['name']); ?></span></h1>
    <h1>ADDRESS: <span><?php echo htmlspecialchars($user['address']); ?></span></h1>

    <div class="divider"></div>

    <h3>Edit Information:</h3>
    <form method="POST" action="../Controller/userupdatecontroller.php" required>
        <input type="text"  id="uname" name="uname"  placeholder="Enter new name">
        <br><br>
        <input type="text"  id="pass" name="pass"  placeholder="Enter new Password"><br><br>
        <input type="submit" value="Change Now">
    </form>

</div>

</body>
</html>