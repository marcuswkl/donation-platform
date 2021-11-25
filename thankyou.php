<?php require_once 'donation-confirmation.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/thankyou.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <title>Thank you</title>
  </head>

  <body>
  <?php include "head.php"?>
    <div class="text-center p-5">
        <h1 class="display-2">Thank you for your donation</h1>
    </div>
    <div class="text-center p-4 ">
        <h3>
            <ul class="list-unstyled">
                <li>RM<?php echo $result['amount'] ?> is contributed to <p><strong><?php echo $input_array[$rand_keys[0]] ?></strong></p> </li>
                <li>An email receipt and token of appreciation will be sent to your email.</li>
                <li>Click on the button to find out which project you are supporting.</li>
            </ul>        
        </h3>
    </div>

    <?php 
      $project  = $input_array[$rand_keys[0]];
      $query1   = "SELECT projectId FROM project WHERE projectName = '$project'";
      $query1   = $pdo->query($query1);
      $result1  = $query1->fetch();
    ?>

    <div class="text-center">
      <button class="btn btn-primary m-5 rounded-pill border-dark" onclick = "window.location.href='project-info/project1.php?id=<?php echo $result1['projectId'] ?>'">
        <a class="text-dark btn">Learn more</a>
      </button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include "foot.php"?>
  </body>
</html>