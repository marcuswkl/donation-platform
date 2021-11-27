<?php
require_once "../DbController.php";

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if ($_GET["type"] == "create") {

    $createProjectQuery   = "INSERT INTO `project` (`projectName`, `projectDescription`, `projectLocation`, `projectPhoto`, `projectGoalAmt`, `projectCurrentAmt`, `projectGoalStatus`, `projectCategory`, `projectStartDate`, `projectEndDate`, `fundraiserId`) VALUES
    ('$_POST[projectName]', '$_POST[projectDesc]', '$_POST[projectLocation]', '$_POST[projectPhoto]', $_POST[projectGoalAmt], 0, $_POST[projectGoalStatus], '$_POST[projectCategory]', '$_POST[projectStartDate]', '$_POST[projectEndDate]', '$_SESSION[id]');";
    $pdo->query($createProjectQuery);

} else if ($_GET["type"] == "edit") {

    $updateProjectNameQuery = "UPDATE project SET projectName='$_POST[projectName]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectNameQuery);

    $updateProjectDescQuery = "UPDATE project SET projectDescription='$_POST[projectDesc]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectDescQuery);

    $updateProjectLocationQuery = "UPDATE project SET projectLocation='$_POST[projectLocation]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectLocationQuery);

    $updateProjectPhotoQuery = "UPDATE project SET projectPhoto='$_POST[projectPhoto]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectPhotoQuery);

    $updateProjectGoalAmtQuery = "UPDATE project SET projectGoalAmt='$_POST[projectGoalAmt]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectGoalAmtQuery);

    $updateProjectGoalStatusQuery = "UPDATE project SET projectGoalStatus='$_POST[projectGoalStatus]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectGoalStatusQuery);

    $updateProjectCategoryQuery = "UPDATE project SET projectCategory='$_POST[projectCategory]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectCategoryQuery);

    $updateProjectStartDateQuery = "UPDATE project SET projectStartDate='$_POST[projectStartDate]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectStartDateQuery);

    $updateProjectEndDateQuery = "UPDATE project SET projectEndDate='$_POST[projectEndDate]' WHERE projectId=$_GET[id]";
    $pdo->query($updateProjectEndDateQuery);

} else {
    echo "<script type='text/javascript'>alert('Invalid project dashboard type.');</script>";
}

echo "<script>window.location = '../fundraiser-home.php'</script>";
?>