<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../css/categories.css" rel="stylesheet">
    <script src="../js/categories.js"></script>
    <title>Category Selection</title>
</head>

<body>
    <?php include '../head-nested.php'; ?>
    <div class="py-2">
        <!-- Categories -->
        <div class="h1 text-center">Categories</div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <a href="covid-19.php" class="text-decoration-none" style="overflow:hidden">
                        <div class="d-flex align-items-center justify-content-center text-light full-height bg-img-1">
                            <div class="overlay">
                                <div class="text">Covid-19</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="education.php" class="text-decoration-none" style="overflow:hidden">
                        <div class="d-flex align-items-center justify-content-center text-light full-height bg-img-2">
                            <div class="overlay">
                                <div class="text">Education</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="food-supply.php" class="text-decoration-none" style="overflow:hidden">
                        <div class="d-flex align-items-center justify-content-center text-light full-height bg-img-3">
                            <div class="overlay">
                                <div class="text">Food Supply</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <a href="natural-disaster.php" class="text-decoration-none" style="overflow:hidden">
                        <div class="d-flex align-items-center justify-content-center text-light full-height bg-img-4">
                            <div class="overlay">
                                <div class="text">Natural Disaster</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <?php include '../foot-nested.php'; ?>
</body>

</html>