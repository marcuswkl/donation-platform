<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/donation.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <title>Donation</title>
  </head>
  <body>
    <!-- Title -->
    <div class="text-center m-5">
      <h1 class="display-2">You Are Supporting EDUCATION</h1>
    </div>
    <!-- Donation Amount Form -->
    <form>  
      <div class="row m-2 justify-content-md-center">
        <label for="colFormLabelLg" class="col-sm-auto col-form-label col-form-label-lg">Enter amount: </label>
          <div class="col-sm-auto">
            <div class="input-group input-group-lg " >
              <span class="input-group-text" id="inputGroup-sizing-lg">RM</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="0.00">
            </div>
          </div>
      </div>

      <div class="checkboxes">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          You will be donating anonymously
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          You are aware that the donation is contributed to a random project within the selected category.
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          By continuing, you agree with our Terms of Use
          </label>
        </div>
      </div>

      <div class="text-center"> 
        <button type="submit" class="btn btn-primary m-3">
          <a href = "payment.php" class="text-dark btn">Donate</a>
        </button>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>