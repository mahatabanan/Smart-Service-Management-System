<?php
require "db.php";
function countCustomers()
{
    global $conn;
    $sql = "SELECT COUNT(*) AS total_users FROM users WHERE role='customer'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total_users'];
}

function updatename($name,$mobile,$password)
{
     global $conn;
    $sql = "UPDATE users SET name = '$name' ,password='$password' WHERE mobile = '$mobile'";
    $result=mysqli_query($conn,$sql);
   return true;

}

?>