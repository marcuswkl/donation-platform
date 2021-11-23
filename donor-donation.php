<?php require_once 'form-handlers/login_backend.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/donor-donation.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <title>Donor Donation</title>
  </head>
  <body>
  <?php include "head.php"?>
  <?php
    $servername = "localhost";
    $username = "forall";
    $password = "forall123";
    $dbname = "anonym_us";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $email = $_SESSION['email'];
    $query   = "SELECT * FROM user WHERE email='$email'";
    $result  = $pdo->query($query);
  
    if (!$result->rowCount()){
      echo "<script type='text/javascript'>alert('Please enter your email and password');</script>";
    }
  
    $row = $result->fetch();
    $un  = $row['name'];
    
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "WITH fundraisers AS ( 
                      SELECT name, userId FROM user WHERE type = 'fundraiser'), 
                 donors AS ( 
                      SELECT name, userId FROM user WHERE type = 'donor') 
            SELECT donation_history.donationId, fundraisers.name AS fundraiserName, project.projectName, donation_history.amount, donation_history.date 
            FROM donation_history, fundraisers, donors, project 
            WHERE donation_history.projectId = project.projectId 
            AND donation_history.fundraiserId = fundraisers.userId 
            AND donation_history.userId = donors.userId 
            AND donors.name =  '$un'
            ";

//  $query = $pdo->prepare($sql);
//  $query->execute(array("Data"));
//  $list = $query->fetchAll();

$result = $conn->query($sql);
    // $sql_statement = $conn->prepare($sql);
    // $sql_statement->execute();
    // $result = $sql_statement->get_result();
    ?><br><br><br><?php
    if (($result->num_rows) > 0){
        echo "<table class= table table-bordered border-white><tr class=tableheader><th>ID</th><th>Fundraiser</th><th>Project</th><th>Amount (RM)</th><th>Date</th></tr>";
        
        while($row = $result->fetch_assoc()) {
          $donationId  = $row['donationId'];
          $fundraiserName = $row['fundraiserName'];
          $projectName = $row['projectName'];
          $amount = $row['amount'];
          $date  = $row['date'];
          echo "<tr class=tabledata><td>".$donationId."</td><td>".$fundraiserName."</a></td><td>".$projectName."</td><td>".$amount."</td><td>".$date."</td></tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <br>
    <div class="text-center">
      <button class="btn btn-primary m-3 rounded-pill border-dark">
        <a href = "donor-profile.php" class="text-dark btn">Back</a>
      </button>
    </div>
    <br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
    <?php include "foot.php"?>
  </body>
</html>