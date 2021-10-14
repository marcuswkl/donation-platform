<!doctype html>
<html lang="en">
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
  <div class="text-center p-5">
        <h1 class="display-2">Edit Profile</h1>
  </div>

  <div class="text-center">
        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 m-3 bg-primary" width="110">
          <button class="btn btn-primary">Upload Image</button>
          <form>
            <div class="row mb-3 justify-content-sm-center">
              <label for="fullName" class="col-sm-2 col-form-label">Full Name:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="fullName" placeholder="Lim Lee Hong">
              </div>
            </div>
            <div class="row mb-3 justify-content-sm-center">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
              <div class="col-sm-3">
              <input class="form-control" id="disabledInput" type="text" placeholder="limleehong@gmail.com" disabled>
              </div>
            </div>    
            <button class="btn btn-primary m-2">
              <a href = "donor-profile.php" class="text-dark btn">Cancel</a>
            </button>
            <button class="btn btn-primary m-2">
            <a href = "donor-profile.php" class="text-dark btn">Save</a>  
            </button> 
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>