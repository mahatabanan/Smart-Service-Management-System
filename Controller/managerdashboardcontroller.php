
<?php
session_start();
require "../Model/user.php";
require "../Model/cuddoperation.php";

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

$mobile = $_SESSION['mobile'];

/* Manager info load */
$user = getUserByMobile($mobile);



//eta tokon e customer count dekhate perbe jokon  session is ok 
  $count = countCustomers();

// count the pending request and show the table 
  $pendingRequests  = countPendingRequests();

//Count Complete pending request 
$completedRequests  = countCompletedRequests();

/* Load dashboard view */
require "../View/Manager/manager_dashboard.php";

?>