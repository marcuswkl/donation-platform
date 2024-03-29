<?php require_once 'form-handlers/login_backend.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/donor-profile.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <title>Donor Profile</title>
  </head>
  <body>
  <?php include "head.php"?>
  <?php
  $email = $_SESSION['email'];
  $query   = "SELECT * FROM user WHERE email='$email'";
  $result  = $pdo->query($query);

  if (!$result->rowCount()){
    echo "<script type='text/javascript'>alert('Please enter your email and password');</script>";
  }

  $row = $result->fetch();
  $un  = $row['name'];
  $pw  = $row['password'];
  $ty  = $row['type'];
  $em  = $row['email'];

  $_SESSION['name'] = $un;
  ?>
    <div class="text-center p-5">
        <h1 class="display-2">Profile</h1>
    </div>
    <div class="d-flex flex-column align-items-center text-center">
        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
        <div class="mt-3">
            <h4><?php echo $_SESSION['name'] ?></h4>
            <p class="text-secondary mb-3"><?php echo $_SESSION['email'] ?></p>
        </div>    
        <div class="d-flex flex-column bd-highlight mb-3">
            <button  class="btn btn-primary rounded-pill border-dark" >
              <a href = "donor-profile-edit.php" class="text-dark btn">Edit Profile</a>
            </button>
            <button  class="btn btn-primary rounded-pill border-dark">
              <a href = "donor-donation.php" class="text-dark btn">View Donations</a>
            </button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include "foot.php"?>
  </body>
</html>