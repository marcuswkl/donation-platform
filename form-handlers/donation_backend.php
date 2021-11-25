<?php 

require_once './DbController.php';
require_once 'login_backend.php';
session_start();


if(isset($_POST['amt'])){
    $amount = sanitise($pdo,$_POST['amt']);
    $date = date("Y-m-d H:i:s");
    $date2 = sanitise($pdo,$date);
    $tbl_name = 'donation_history';
    $id = $_SESSION['id'];

    $query = "INSERT INTO $tbl_name (donationId, date, amount, projectId, userId, fundraiserId) 
    VALUES(NULL, $date2, $amount, NULL, $id, NULL)";

    echo $query;
    $result = $pdo->query($query);

    echo "<script type='text/javascript'>window.location.href = './payment.php';</script>";
    
}

?>
