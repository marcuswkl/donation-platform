<?php
session_start();
$connection = mysqli_connect("localhost","forall","forall123");
$db = mysqli_select_db($connection,'anonym_us');

if(isset($_POST['update'])){
    $name  = $_POST['newName'];
    $loggedInUser = $_SESSION['name'];
    echo "$name";
    echo "$loggedInUser";
    $query = "UPDATE `user` SET name='$_POST[newName]' WHERE name='$loggedInUser'";
    echo "$query";
    $query_run = mysqli_query($connection,$query);
    echo "";
    if($query_run){
        echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
        echo "<script type='text/javascript'>window.location.href = './donor-profile.php';</script>";
        exit;
    }
    else {
        echo "<script type='text/javascript'>alert('No Change');</script>";
        echo "<script type='text/javascript'>window.location.href = './donor-profile.php';</script>";
        exit;
    }
}
?>