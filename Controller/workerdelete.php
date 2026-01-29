
  <?php
session_start();
require "../Model/cuddoperation.php"; // মডেল ফাইল ইনক্লুড করা

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

/* Delete Worker Logic */
if (isset($_GET['wid'])) {
    $wid = $_GET['wid'];
    
  
    $status = deleteWorker($wid);

    if ($status) {
      
        echo "<script>
                alert('Worker Deleted successfully!');
                window.location.href='addworkercontroller.php';
              </script>";
        exit();
    } else {
        echo "Error: Delete failed!";
    }
}
?>