<?php

require_once 'DbController.php';   

$query = "SELECT * FROM donation_history ORDER BY date DESC LIMIT 1";
$query = $pdo->query($query);
$result  = $query->fetch();
$projectID = $result['projectId'];

$projectQuery = "SELECT projectName FROM project WHERE projectId = $projectID";
$projectQuery = $pdo->query($projectQuery);
$projectResult  = $projectQuery->fetch();
?>