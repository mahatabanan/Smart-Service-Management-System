

  <?php
session_start();
include "../Model/cuddoperation.php"; // মডেল ফাইল ইনক্লুড করা

/* Access control */
if (!isset($_SESSION['mobile']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../View/login.html");
    exit();
}

/* Delete Worker Logic */
if (isset($_GET['wid'])) {
    $wid = $_GET['wid'];
    
    // মডেল থেকে ডিলিট ফাংশন কল করা
    $status = deleteWorker($wid);

    if ($status) {
        // ডিলিট হওয়ার পর ভিউ পেজে ফেরত পাঠানো
        header("Location: ../View/Manager/manage_worker.php?msg=deleted");
        exit();
    } else {
        echo "Error: Delete failed!";
    }
}
?>