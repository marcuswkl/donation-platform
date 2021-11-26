<?php
require_once "../DbController.php";

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

$email = $_SESSION['email'];
$userQuery   = "SELECT * FROM user WHERE email='$email'";
$userResult  = $pdo->query($userQuery);

if (!$userResult->rowCount()){
    echo "<script type='text/javascript'>alert('Invalid Session! Please login.');</script>";
}

$userRow = $userResult->fetch();
$userId = $userRow['userId'];

$updateFullNameQuery = "UPDATE user SET name='$_POST[fullName]' WHERE userId=$userId";
$pdo->query($updateFullNameQuery);

$updateEmailQuery = "UPDATE user SET email='$_POST[email]' WHERE userId=$userId";
$pdo->query($updateEmailQuery);
$_SESSION['email'] = $_POST["email"];

$updateFRDescQuery = "UPDATE fundraiser SET fundraiserDescription='$_POST[frDesc]' WHERE fundraiserId=$userId";
$pdo->query($updateFRDescQuery);

$updatePhoneNoQuery = "UPDATE fundraiser SET phoneNumber='$_POST[phoneNo]' WHERE fundraiserId=$userId";
$pdo->query($updatePhoneNoQuery);

$updateFRWebsiteQuery = "UPDATE fundraiser SET fundraiserWebsite='$_POST[frWebsite]' WHERE fundraiserId=$userId";
$pdo->query($updateFRWebsiteQuery);

$updateBankAccNoQuery = "UPDATE fundraiser SET bankNumber='$_POST[bankAccNo]' WHERE fundraiserId=$userId";
$pdo->query($updateBankAccNoQuery);

$updateAccHolderNameQuery = "UPDATE fundraiser SET acc_holder_name='$_POST[accHolderName]' WHERE fundraiserId=$userId";
$pdo->query($updateAccHolderNameQuery);

$updateBankNameQuery = "UPDATE fundraiser SET bank_name='$_POST[bankName]' WHERE fundraiserId=$userId";
$pdo->query($updateBankNameQuery);

echo "<script>window.location = '../fundraiser-profile.php'</script>";
?>