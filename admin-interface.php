<?php
require_once('DbController.php');

if (!empty($_GET['action'])){
    switch($_GET['action']){
        case "accept": 
            $accept = $pdo->prepare("UPDATE `fundraiser` SET `verifiedStatus` = ? WHERE `fundraiserId` = ?");
            $accept->execute(array('verified', $_GET['fundraiderId']));
        break;

        case "reject":
            $reject = $pdo->prepare("UPDATE `fundraiser` SET `verifiedStatus` = ? WHERE `fundraiserId` = ?");
            $reject->execute(array('rejected', $_GET['fundraiderId']));
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href = "./css/admin-interface.css" type = "text/css" rel = "stylesheet">
    <title>Admin Interface</title>
</head>

<body>
<div class="content">
<?php include "head.php"?>
<!--Fundraiser Status Buttons -->

    <nav class="navbar navbar-expand-sm navbar-light mt-3">
        <div class="container">
            <p class = "mt-3 fw-bold">Fundraiser Status: </p>

            <button class="navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#status">
                <span class="navbar-toggler-icon"></span>
            </button>

            

            <div class="collapse navbar-collapse " id = "status">
                <ul class="navbar-nav flex-row ">
                    <li class="nav-item mx-2">
                        <a href="#" class="nav-link">
                        <button type="button" class="btn btn-outline-success">
                            Pending
                        </button>
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="#" class="nav-link">
                            <button type="button" class="btn btn-outline-success">
                                Accepted
                            </button>
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="#" class="nav-link">
                            <button type="button" class="btn btn-outline-success">
                                Rejected
                            </button>
                        </a>
                    </li>
                </ul>              
            </div>           
        </div>   
    </nav>
<!--End Of Fundraiser Status Buttons -->

<?php
    $query = "SELECT * FROM fundraiser";
    
    $result  = $pdo->query($query);

    
    foreach($result as $row){
        $fundId = $row['fundraiserId'];
        $userId = $row['userId'];
        $ssm = $row['ssmRegNo'];
        $phoneNum = $row['phoneNumber'];
        $bankNum = $row['bankNumber'];
        $accName = $row['acc_holder_name'];
        $bankName = $row['bank_name'];
        $verify = $row['verifiedStatus'];
        $profImg = $row['profileImage'];

/* Fundraiser Description */
echo <<<_END
<div class="container-md mt-3 d-flex">

<img src="./resources/img/placeholder.png" alt="image" class = "fundraiser ">
<div class = "my-auto">
<ul>
<ol>Fundraiser ID:&nbsp;$fundId </ol>
<ol>Fundraiser User ID:&nbsp;$userID </ol>
<ol>SSM Registration Number:&nbsp;$ssm </ol>
<ol>Phone Number:&nbsp;$phoneNum </ol>
<ol>Bank Number:&nbsp;$bankNum </ol>
<ol>Account Holder's Name:&nbsp;$accName </ol>
<ol>Bank Name:&nbsp;$bankName </ol>

<ol>Current Status: <span class = "fw-bold">$verify</span> </ol>

</ul>
</div>


<div class="d-flex flex-column my-auto mx-auto">
<form method = "GET">
<p class = "fw-bold text-decoration-underline text-center">Change Status</p>
<button type="button" class="btn btn-outline-success mb-2" onclick = "location.href = 'admin-interface.php?action=accept&fundraiderId=$fundId';"> Accept </button>
<button type="button" class="btn btn-outline-success mb-2" onclick = "location.href = 'admin-interface.php?action=reject&fundraiderId=$fundId';"> Reject </button>
</form>
</div>
</div>
_END;
/* End of Fundraiser Description */
    }

?>



    <div class = "foot">
    <?php include "foot.php"?>
    </div>


    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</div>
</body>

</html>
