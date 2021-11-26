<?php require_once "DbController.php"; ?>
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
    <link rel="stylesheet" href="css/fundraiser-profile-edit.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');</style>
    <title>Fundraiser Edit Profile</title>
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
    $bankAccNo  = $frRow['bankNumber'];
    $accHolderName  = $frRow['acc_holder_name'];
    $bankName  = $frRow['bank_name'];
    ?>
    <section class="container my-5 fr-profile-edit">
        <div class="fr-profile-edit-top text-center">
            <h1 class="fr-profile-edit-title fw-bold text-decoration-underline">Edit Profile</h1>
            <img src="resources/img/fr-profile.png" class="fr-profile-image img-fluid m-5" alt="Fundraiser Profile">
            <button class="btn-lg border-dark fr-profile-edit-upload">Upload Image</button>
        </div>

        <form class="fr-profile-edit-form" action="form-handlers/fundraiser_profile_backend.php" method="POST">
            <div class="row mb-4">
              <label for="inputFullName" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Full Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control form-control-lg form-control-fr-profile-edit" id="inputFullName" name="fullName" value="<?php echo $name ?>">
              </div>
            </div>

            <div class="row mb-3">
                <label for="inputSSMRegNo" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">SSM Registration Number:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control form-control-lg form-control-fr-profile-edit" id="inputSSMRegNo" name="ssmRegNo" value="<?php echo $ssmRegNo ?>" disabled>
                </div>
            </div>

            <div class="row mb-4">
                <label for="textAreaDescription" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Description:</label>
                <textarea class="form-control form-control-lg form-control-fr-profile-edit fr-profile-edit-textarea" id="textAreaDescription" name="frDesc" rows="3"><?php echo $frDesc ?></textarea>
            </div>
            
            <div class="row mb-4">
                <label for="inputEmail" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Email:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control form-control-lg form-control-fr-profile-edit" id="inputEmail" name="email" value="<?php echo $email ?>">
                </div>
            </div>

            <div class="row mb-4">
                <label for="inputPhoneNo" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Phone Number:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg form-control-fr-profile-edit" id="inputPhoneNo" name="phoneNo" value="<?php echo $phoneNo ?>">
                </div>
            </div>

            <div class="row mb-4">
                <label for="inputWebsite" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Website:</label>
                <div class="col-sm-9">
                <input type="url" class="form-control form-control-lg form-control-fr-profile-edit" id="inputWebsite" name="frWebsite" value="<?php echo $frWebsite ?>">
                </div>
            </div>

            <div class="row mb-4">
                <label for="inputBankAccNo" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Bank Account Number:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control form-control-lg form-control-fr-profile-edit" id="inputBankAccNo" name="bankAccNo" value="<?php echo $bankAccNo ?>">
                </div>
            </div>
            
            <div class="row mb-4">
                <label for="inputAccHolderName" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Account Holder Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg form-control-fr-profile-edit" id="inputAccHolderName" name="accHolderName" value="<?php echo $accHolderName ?>">
                </div>
            </div>

            <div class="row mb-4">
                <label for="inputBankName" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-profile-edit">Bank Name:</label>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control form-control-lg form-control-fr-profile-edit" id="inputBankName" name="bankName" value="<?php echo $bankName ?>">
                </div>
            </div>

            <div class="fr-profile-edit-form-buttons text-center">
                <a class="btn-lg border border-dark link-dark text-decoration-none m-5 fr-profile-edit-cancel" href="fundraiser-profile.php">Cancel</a>
                <button type="submit" class="btn-lg border-1 border-dark fr-profile-edit-submit">Save</button>
            </div>
        </form>
    </section>
    <?php include 'foot.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>