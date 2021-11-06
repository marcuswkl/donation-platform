<?php 

require_once './DbController.php';

if(isset($_POST['ssmRegNo']) && isset($_POST['bankNumber'])){

$ssmRegNo = sanitise($pdo,$_POST['ssmRegNo']);
$phoneNumber = sanitise($pdo,$_POST['phoneNumber']);
$bankNumber = sanitise($pdo,$_POST['bankNumber']);
$tbl_name = 'fundraiser';
$acc_holder_name    = sanitise($pdo,$_POST['acc_holder_name']);  
$bank_name    = sanitise($pdo,$_POST['bank_name']);  

if($validation==""){
    $query = "INSERT INTO $tbl_name (fundraiserId, userId, ssmRegNo, phoneNumber, bankNumber, acc_holder_name, bank_name, verifiedStatus, profileImage) 
    VALUES(NULL,'', $ssmRegNo, $phoneNumber, $bankNumber , $acc_holder_name , $bank_name ,'verified', NULL)";

  $result = $pdo->query($query);

if (! $result){
   die('Error: ');
}
echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
echo "<script type='text/javascript'>window.location.href = './fundraiser-home.php';</script>";
}
else{
}
}

function sanitise($pdo, $str)
{
$str = htmlentities($str);
return $pdo->quote($str);
}	

function data_validation($data, $data_pattern, $data_type)
{
if(preg_match($data_pattern, $data)) {
    return "";
}
else {
echo "<script type='text/javascript'>alert('invalid data for $data_type');</script>";
    return "location:./fundraiser-register.php";
}
}
?>
