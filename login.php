<?php require_once 'form-handlers/login_backend.php';?>
 <!DOCTYPE html>
<html lang="en">
<?php require_once "DbController.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel = "stylesheet" href = "./CSS/registration.css">
    <title>Login</title>
</head>

<body>
<?php include "head.php"?>

<div class="content">
        <br><br><br>
        <div class="mb-4">
            <h1>Login</h1>
        </div>
    
        <div class="d-block text-center">
            <form action="" method="post" style = "height: 55vh;">

                <div class="mb-3">
                    <input type="text" id="email" name="email" placeholder = " Email"><br>
                </div>
                
                <div class="mb-3">
                    <input type="password" id="pwd" name="pwd" placeholder = " Password"><br>
                </div>


                <div class="d-flex flex-row justify-content-center mb-3">
                   
                <input type="submit" class = "submit" value = "Log In"><br>
            </form>    
        </div>

        
        
    <?php include "foot.php"?>

</div>



    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>