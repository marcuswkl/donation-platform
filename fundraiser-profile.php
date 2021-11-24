<?php require_once 'form-handlers/login_backend.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/fundraiser-profile.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');</style>
    <title>Fundraiser Profile</title>
</head>

<body>
    <?php include 'head.php';?>
    <?php
    $email = $_SESSION['email'];
    $userQuery   = "SELECT * FROM user WHERE email='$email'";
    $userResult  = $pdo->query($userQuery);

    if (!$userResult->rowCount()){
        echo "<script type='text/javascript'>alert('Invalid Session! Please login.');</script>";
    }

    $userRow = $userResult->fetch();
    $userId = $userRow['userId'];
    $name = $userRow['name'];
    $email = $userRow['email'];

    $frQuery   = "SELECT * FROM fundraiser WHERE fundraiserId='$userId'";
    $frResult  = $pdo->query($frQuery);

    if (!$frResult->rowCount()){
        echo "<script type='text/javascript'>alert('Invalid Session! Please login.');</script>";
    }

    $frRow = $frResult->fetch();
    $profileImg  = $frRow['profileImage'];
    $ssmRegNo  = $frRow['ssmRegNo'];
    $frDesc  = $frRow['fundraiserDescription'];
    $phoneNo  = $frRow['phoneNumber'];
    $frWebsite  = $frRow['fundraiserWebsite'];
    ?>
    <section class="container text-center my-5 fr-profile">
        <h1 class="fr-profile-title fw-bold text-decoration-underline">Profile</h1>
        <img src="https://picsum.photos/200" class="fr-profile-image img-fluid my-5" alt="Fundraiser Profile">
        <h2 class="fr-profile-name"><?php echo $name ?></h2>
        <h6 class="fr-profile-ssm">SSM: <?php echo $ssmRegNo ?></h6>
        <p class="fr-profile-description lead"><?php echo $frDesc ?></p>
        <div class="d-flex flex-row justify-content-around my-5 fr-profile-contact-icons">
            <a href="<?php echo 'mailto:' . $email ?>" target="_blank"><i class="bi bi-envelope"></i></a>
            <a href="<?php echo 'tel:' . $phoneNo ?>" target="_blank"><i class="bi bi-telephone"></i></a>
            <a href="<?php echo $frWebsite ?>" target="_blank"><i class="bi bi-globe"></i></a>
        </div>
        <a class="btn-lg border border-dark link-dark text-decoration-none fr-profile-button-edit" href="fundraiser-profile-edit.php">Edit Profile</a>
    </section>
    <?php include 'foot.php';?>
    
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>