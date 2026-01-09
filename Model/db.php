<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "ssms";        
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " );
}


?>
