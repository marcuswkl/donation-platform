<?php

require_once 'DbController.php';
require_once 'form-handlers/login_backend.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$servername = "localhost";
    $username = "forall";
    $password = "forall123";
    $dbname = "anonym_us";
    $conn = new mysqli($servername, $username, $password, $dbname);

$input_array = array("Mask up against Covid", "Mask up against Covid 2.0", "Mask up against Covid 3.0"); 
$rand_keys = array_rand($input_array , 2);
$project = $input_array[$rand_keys[0]];
$id = $_SESSION['id'];

// $sql = "UPDATE donation_history
//         SET fundraiserId, projectId = (
//             SELECT projectId, fundraiserId 
//             FROM project 
//             WHERE projectName = '$project')
//         WHERE fundraiserId, projectId IS NULL";
echo $input_array[$rand_keys[0]];

$sql = "WITH id AS (
            SELECT projectid,fundraiserid FROM project WHERE projectName = '$project' )
UPDATE donation_history
SET fundraiserId = fundraiserid
AND projectId = projectid
WHERE userId = '$id'
AND fundraiserId, projectId IS NULL
";       
    
$result1 = $conn->query($sql);    

$query = "SELECT * FROM donation_history";
$query = $pdo->query($query);
$result  = $query->fetch();

?>