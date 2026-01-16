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

function updateuser($name,$mobile,$password)
{
     global $conn;
    $sql = "UPDATE users SET name = '$name' ,password='$password' WHERE mobile = '$mobile'";
    $result=mysqli_query($conn,$sql);
   return true;

}

function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM users where role='manager'or role='customer'";
    $result= mysqli_query($conn, $sql);
    return $result;

}

function deleteUserByMobile($mobile)
{
    global $conn;
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $sql = "DELETE FROM users WHERE mobile='$mobile'";
    return mysqli_query($conn, $sql);
}

function insertcustomer($name,$password,$mobile,$address,$role)
{
    global $conn;
    $sql = "INSERT INTO users (name, mobile, password, address,role)
    VALUES ('$name', '$mobile', '$password', '$address','$role')";
    $result=mysqli_query($conn,$sql);
    return $result;

}


function insertmanager($name,$password,$mobile,$address,$role)
{
    global $conn;
    $sql = "INSERT INTO users (name, mobile, password, address,role)
    VALUES ('$name', '$mobile', '$password', '$address','$role')";
    $result=mysqli_query($conn,$sql);
    return $result;

} 

// this sql for customer servive request.php  page er 
function insertservicerequest(
    $mobile,
    $fullname,
    $servicetype,
    $serviceaddress,
    $description,
    $date,
    $time,
    $urgency,
    $status
) {
    global $conn;

    $sql = "INSERT INTO servicerequest
            (mobile, fullname, servicetype, serviceaddress, description, date, time, urgency, status)
            VALUES
            ('$mobile', '$fullname', '$servicetype', '$serviceaddress', '$description', '$date', '$time', '$urgency', '$status')";

    return mysqli_query($conn, $sql);
}


?>