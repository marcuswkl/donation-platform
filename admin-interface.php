<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href = "../css/admin-interface.css" type = "text/css" rel = "stylesheet">
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

<!--Fundraiser Description -->
    <!--One Fundraiser Description -->
    <div class="container-md mt-3 d-flex">
        
        <img src="../resources/img/placeholder.png" alt="image" class = "fundraiser ">
        <div class = "my-auto">
            <ul>
                <ol>Fundraiser Name: Derek Edmonds Foundation</ol>
                <ol>Current Status: <span class = "fw-bold">Pending</span> </ol>
                <ol>Fundraising Goal: RM 5000</ol>
            </ul>
        </div>
        

        <div class="d-flex flex-column my-auto mx-auto">
            <p class = "fw-bold text-decoration-underline text-center">Change Status</p>
            <button type="button" class="btn btn-outline-success mb-2"> Accept </button>
            <button type="button" class="btn btn-outline-success mb-2"> Reject </button>
        </div>
    </div>
    <!--End -->

    <div class="container-md mt-3 d-flex">
        
        <img src="../resources/img/placeholder.png" alt="image" class = "fundraiser ">
        <div class = "my-auto">
            <ul>
                <ol>Fundraiser Name: Derek Edmonds Foundation</ol>
                <ol>Current Status: <span class = "fw-bold">Pending</span></ol>
                <ol>Fundraising Goal: RM 5000</ol>
            </ul>
        </div>

        <div class="d-flex flex-column my-auto mx-auto">
            <p class = "fw-bold text-decoration-underline text-center">Change Status</p>
            <button type="button" class="btn btn-outline-success mb-2" > Accept </button>
            <button type="button" class="btn btn-outline-success mb-2"> Reject </button>
        </div>
    </div>

    <div class="container-md mt-3 d-flex">
        
        <img src="../resources/img/placeholder.png" alt="image" class = "fundraiser ">
        <div class = "my-auto">
            <ul>
                <ol>Fundraiser Name: Derek Edmonds Foundation</ol>
                <ol>Current Status: <span class = "fw-bold">Pending</span></ol>
                <ol>Fundraising Goal: RM 5000</ol>
            </ul>
        </div>

        <div class="d-flex flex-column my-auto mx-auto">
            <p class = "fw-bold text-decoration-underline text-center">Change Status</p>
            <button type="button" class="btn btn-outline-success mb-2"> Accept </button>
            <button type="button" class="btn btn-outline-success mb-2"> Reject </button>
        </div>
    </div>

    <?php include "foot.php"?>

<!-- End Of Fundraiser Description -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</div>
</body>

</html>
