<!DOCTYPE html>
<html>
<head>
    <title>Fundraiser Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        .tableheader{
            background-color:#52B788;
            text-align:center;
        }
        .tabledata{
            background-color:#B2E1CC;
            text-align:center;
        }
        .body{
            background-color:#ECFDEF; 
        }
        .buttoncenter{
        color:#000000;
        background-color:#52B788;
    }
    .body-container{
            height:80vh;

    }
    </style>
    
</head>
<?php include "head.php"?>
<body class="body">
<div class="body-container">
    <h3>Click on the Project Name to edit!</h3>
    <?php
    $servername = "localhost";
    $username = "forall";
    $password = "forall123";
    $dbname = "anonym_us";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT projectId, projectName, projectDescription, projectCategory, projectGoalAmt, projectCurrentAmt, projectStartDate, projectEndDate FROM project";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo "<table class=table table-bordered border-white><tr class=tableheader><th>ID</th><th>Project Name</th><th>Description</th><th>Donation Status</th><th>Category</th><th>Fund Raised (%)</th></tr>";
        while($row = $result->fetch_assoc()) {
            $x = $row["projectCurrentAmt"];
            $y = $row["projectGoalAmt"];
            $z = ($x/$y)*100;
            $date_now = new DateTime();
            $date2    = new DateTime($row["projectStartDate"]);
            $date3    = new DateTime($row["projectEndDate"]);

            if ($date_now > $date2 && $date2 < $date3) {
                $a = "Active";
            }else{
                $a = "Expired";
}
            echo "<tr class=tabledata><td>".$row["projectId"]."</td><td><a href=project-info/project1.php>".$row["projectName"]."</a></td><td>".$row["projectDescription"]."</td><td>".$a."</td><td>".$row["projectCategory"]."</td><td>".number_format((float)$z, 2, '.', '')."</td></tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <br>
    <div style="display:flex;align-items:center;justify-content:center;">
    <a href="project-dashboard.php" class="btn btn-primary buttoncenter rounded-pill border-dark" role="button">Dashboard</a>
    </div>
    </div>
    <?php include "foot.php"?>
</body>
</html>
