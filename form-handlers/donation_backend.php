<?php 

require_once './DbController.php';

if(isset($_POST['amt'])){
    $amount = sanitise($pdo,$_POST['amt']);
    $date = date("Y-m-d H:i:s");
    $date2 = sanitise($pdo,$date);
    $tbl_name = 'donation_history';

    $query = "INSERT INTO $tbl_name (donationId, date, amount, projectId, userId, fundraiserId) 
    VALUES(NULL, $date2, $amount, NULL, NULL, NULL)";
    $result = $pdo->query($query);

    echo "<script type='text/javascript'>window.location.href = './payment.php';</script>";
    
}

function sanitise($pdo, $str)
{
  $str = htmlentities($str);
  return $pdo->quote($str);
}	

?>
