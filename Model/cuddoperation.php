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

function updateuser($name, $mobile, $password)
{
    global $conn;

    $sql = "UPDATE users 
            SET name = '$name', password = '$password' 
            WHERE mobile = '$mobile'";

    mysqli_query($conn, $sql);

    //  check if any row actually updated
    if (mysqli_affected_rows($conn) > 0) {
        return true;   // mobile found & updated
    } else {
        return false;  // wrong mobile OR no change
    }
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

// this sql for customer's service_request 
function insertservicerequest(
    $mobile,
    $fullname,
    $servicetype,
    $serviceaddress,
    $description,
    $date,
    $time,
    $urgency,
    $status,
    $worker

) {
    global $conn;

    $sql = "INSERT INTO servicerequest
            (mobile, fullname, servicetype, serviceaddress, description, date, time, urgency, status,worker)
            VALUES
            ('$mobile', '$fullname', '$servicetype', '$serviceaddress', '$description', '$date', '$time', '$urgency', '$status','$worker')";

    return mysqli_query($conn, $sql);
}

function getallfromservicereq($mobile)
{
    global $conn;
    $sql = "SELECT * FROM servicerequest where mobile='$mobile'";
    $result= mysqli_query($conn, $sql);
    return $result;

}



//// This function retrieves logged-in user data from users table


// Count total pending service requests for showing manager dashboard 
function countPendingRequests()
{
    global $conn;
    $sql = "SELECT COUNT(*) AS total FROM servicerequest WHERE status='Pending'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

function deleterequest($requestid)
{
    global $conn;
    $sql = "DELETE FROM servicerequest WHERE requestid='$requestid'";
    
    return mysqli_query($conn, $sql);
}




      // this part stating work when manager assign worker for service 
     // Count total completed service requests

   function countCompletedRequests()
    {
    global $conn;
    $sql = "SELECT COUNT(*) AS total FROM servicerequest WHERE status='Accepted'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
       }


    function updatepass($mobile, $newPassword)
{
    global $conn;

    $sql = "UPDATE users SET password='$newPassword' WHERE mobile='$mobile'";
    mysqli_query($conn, $sql);

    //  IMPORTANT: check affected rows
    if (mysqli_affected_rows($conn) > 0) {
        return true;   // mobile found & password updated
    } else {
        return false;  // mobile not found OR no change
    }
}



   // add worker 



   // 1. new korker insert function 
function insertWorker($name, $skills, $phone) {
    global $conn;
    $sql = "INSERT INTO worker_info_tabel (workername, workerskills, workerphone) 
            VALUES ('$name', '$skills', '$phone')";
    return mysqli_query($conn, $sql);
}

//  see th worker 
function getAllWorkers() {
    global $conn;
    $sql = "SELECT * FROM worker_info_tabel";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// delete worker by id 
function deleteWorker($wid) {
    global $conn;
    $sql = "DELETE FROM worker_info_tabel WHERE wid = '$wid'";
    return mysqli_query($conn, $sql);
}

?>