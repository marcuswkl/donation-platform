<?php 

require_once './DbController.php';
require_once 'login_backend.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['amt'])){
    $amount = sanitise($pdo,$_POST['amt']);
    $date = date("Y-m-d H:i:s");
    $date2 = sanitise($pdo,$date);
    $tbl_name = 'donation_history';
    $id = $_SESSION['id'];
    $category = $_GET['category'];

    $idQuery    = "SELECT projectId,fundraiserId FROM project WHERE projectCategory = '$category' ORDER BY RAND()";
    $idQuery    = $pdo->query($idQuery);
    $idTable    = $idQuery->fetch();
    $projectID  = $idTable["projectId"];
    $fundraiserID  = $idTable["fundraiserId"];

    $query = "INSERT INTO $tbl_name (donationId, date, amount, projectId, userId, fundraiserId) 
    VALUES(NULL, $date2, $amount, $projectID, $id, $fundraiserID)";

    echo $query;
    $result = $pdo->query($query);

    echo "<script type='text/javascript'>window.location.href = './payment.php';</script>";
}

?>
