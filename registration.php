<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel = "stylesheet" href = "./CSS/registration.css">
    <title>Registration</title>
</head>

<body>
<?php include "head.php"?>

<div class="content">
    
        <div class="mb-4">
            <br><br>
            <h1>Registration</h1>
        </div>

    
        <div class="d-block text-center">

                <div class="mb-3">
                    <input type="text" id="name" name="name" placeholder = " Name"><br>
                </div>
                
                <div class="mb-3">
                    <input type="text" id="mail" name="mail" placeholder = " Email Address"><br>
                </div>

                <div class="mb-3">
                    <input type="text" id="password" name="password" placeholder = " Password"><br>
                </div>
                
                <div class="mb-3">
                    <input type="text" id="confirm" name="confirm" placeholder = " Confirm Password"><br>
                </div>
                

                <div class="d-flex flex-row justify-content-center mb-3">
                    
                    <label class="form-check">Select User Type:</label>
                
                    <div class="form-check">
                        <input type="radio" class = "form-check-input" name = "type" id = "donor" checked>
                        <label class = "form-check-label" for="donor">Donor</label>
                    </div>

                    <br>
                    
                    <div class="form-check">
                        <input type="radio" class = "form-check-input" name = "type" id = "fundraiser">
                        <label class = "form-check-label" for="fundraiser">Fundraiser</label>
                    </div>
                </div>
                <input type="submit" class = "submit" onclick="display()"><br>
        </div>

        
    <br><br><br>


    
</div>

    <?php include "foot.php"?>
    <script src="js/registration.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>