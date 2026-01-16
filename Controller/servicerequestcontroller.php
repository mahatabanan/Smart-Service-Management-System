<?php
session_start();
require "../Model/cuddoperation.php";

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'customer') {
    header("Location: ../View/login.html");
    exit();
}

//$mobile=session
/////postif rexcds 
//$

//!empty
 // $status=function()
//
//if($status)
/*{
    req
    header (""   )
}*/

?>