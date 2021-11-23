<?php require_once 'form-handlers/login_backend.php';?>
 <!DOCTYPE html>
<html lang="en">
<?php require_once "DbController.php"; ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/donor-profile-edit.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <title>Edit Donor Profile</title>
  </head>
  <body>
  <?php include "head.php"?>
  <div class="text-center p-5">
        <h1 class="display-2">Edit Profile</h1>
  </div>
  <div class="text-center">
        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 m-3 bg-primary" width="110">
          <!-- <button class="btn btn-primary rounded-pill border-dark">Upload Image</button> -->
          <div class="form-group">
          <input type="file" name="newImage" class="form-control btn btn-primary rounded-pill border-dark mb-5" style="width: 20%">
          </div>
          <form action="donor_profile_edit_backend.php"
                      method="POST"
                      enctype="multipart/form-data"
                >
            <div class="row mb-3 justify-content-sm-center">
              <label for="fullName" class="col-sm-2 col-form-label">Full Name:</label>
              <div class="col-sm-3">
                <input type="text" name="newName" class="form-control" id="fullName" placeholder=<?php echo $_SESSION['name'] ?>>
              </div>
            </div>
            <div class="row mb-3 justify-content-sm-center">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
              <div class="col-sm-3">
              <input class="form-control" id="disabledInput" type="text" placeholder=<?php echo $_SESSION['email'] ?> disabled>
              </div>
            </div>    
            
            <div class="form-group mb-5">
            <a href = "donor-profile.php" class="text-dark btn"><input type="submit" name="cancel"  class="btn btn-primary rounded-pill border-dark" value="Cancel">
            </a>
            <a href = "donor-profile.php" class="text-dark btn"><input type="submit" name="update"  class="btn btn-primary rounded-pill border-dark" value="Save">
            </a>
            </div>
                
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include "foot.php"?>
  </body>
</html>