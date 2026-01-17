<?php
session_start();
// Model folder theke database functions gula ana hocche
require_once "../Model/cuddoperation.php";

// Jodi manager "Assign" batone click kore thake
if (isset($_POST['update_btn'])) {
    
    // Form theke data gulo variable-e rakha hocche
    $requestid = $_POST['requestid'];
    $workername = $_POST['workername'];
    $service_charge = $_POST['service_charge'];

    // Model-er function call kore database update kora hocche
    $result = updateManagerAssignment($requestid, $workername, $service_charge);

    if ($result) {
        // Update hoye gele abar Manager page-ei firot jabe
        header("Location: ../View/Manager/view_service_request.php?msg=success");
    } else {
        // Jodi kono karone database update na hoy
        echo "Error: Could not update the assignment.";
    }
} else {
    // Keu jodi direct ei file-e dhukte chay, take firot pathiye dibe
    header("Location: ../View/Manager/view_service_request.php");
}
exit();
?>