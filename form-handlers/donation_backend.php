<?php 
$connection = mysqli_connect("localhost","forall","forall123");
$db = mysqli_select_db($connection,'anonym_us');

if(isset($_POST['donate'])){
    if(!empty($_POST['disclaimer'] && ($_POST['amount'])) ){
    $amount  = $_POST['amount'];
    $date = date("Y-m-d H:i:s");
    
    $query = "INSERT `donation_history` (`amount`, `date`) VALUE ($amount,$date)";
    echo "$query";
    $query_run = mysqli_query($connection,$query);
    echo "";
    if($query_run){
        echo "<script type='text/javascript'>window.location.href = './payment.php';</script>";
        exit;
    }
    else {
        echo "<script type='text/javascript'>window.location.href = './donation.php';</script>";
        exit;
    }

}
else{
    echo "<script type='text/javascript'>alert('Tick all the checkboxes before proceed');</script>";
}

}




?>
