<?php
require "db.php";
function getUserByMobile($mobile)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE mobile = $mobile";
    $result = mysqli_query($conn,$sql);
    $user=mysqli_fetch_assoc($result);
    return $user;
}



?>