<?php

require_once 'DbController.php';

$input_array = array("Empower Children Through Education", "Mask up against Covid", "Mask up against Covid 2.0", "Mask up against Covid 3.0"); 
$rand_keys = array_rand($input_array , 2); 

$query = "SELECT * FROM donation_history";
$result  = $pdo->query($query);

foreach($result as $row){
    $amount = $row['amount'];
}

?>