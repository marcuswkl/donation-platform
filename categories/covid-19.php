<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../css/covid-19.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <title>Covid-19</title>

    <?php include_once "../DbController.php"; ?>
</head>

<?php
$query = $pdo->prepare("SELECT * FROM project WHERE projectCategory = ?");
$query->execute(array("Covid-19"));
$list = $query->fetchAll();
?>

<body>
    <?php include '../head-nested.php'; ?>
    <div class="d-flex top-banner align-items-center">
        <div class="banner-text">
            <h1>COVID-19</h1>
            <p>Help those who are most vulnerable in the pandemic.</p>
        </div>
        <div class="float-right align-self-end">
            <!-- Illustration by <a href="https://icons8.com/illustrations/author/60896eeb088aa7001087bb4d">Rosina Gavrilash</a> from <a href="https://icons8.com/illustrations">Ouch!</a> -->
            <img class="banner-img" src="../resources/img/covid-19-banner.png" alt="Cvoid-19 illustration">
        </div>
    </div>

    <div class="d-flex toolbar justify-content-end align-items-center">
        <div class="search">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="toolbar-child">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                States - All
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item active" href="#">All</a></li>
                <li><a class="dropdown-item" href="#">Johor</a></li>
                <li><a class="dropdown-item" href="#">Kedah</a></li>
                <li><a class="dropdown-item" href="#">Kelantan</a></li>
                <li><a class="dropdown-item" href="#">Melaka</a></li>
                <li><a class="dropdown-item" href="#">Negeri Sembilan</a></li>
                <li><a class="dropdown-item" href="#">Pahang</a></li>
                <li><a class="dropdown-item" href="#">Penang</a></li>
                <li><a class="dropdown-item" href="#">Perak</a></li>
                <li><a class="dropdown-item" href="#">Perlis</a></li>
                <li><a class="dropdown-item" href="#">Sabah</a></li>
                <li><a class="dropdown-item" href="#">Sarawak</a></li>
                <li><a class="dropdown-item" href="#">Klang Valley (Selangor &amp; Kuala Lumpur)</a></li>
                <li><a class="dropdown-item" href="#">Terengganu</a></li>
            </ul>
        </div>
        <a href="../donation.php?category=Covid-19">
            <button type="button" class="btn btn-success toolbar-child">DONATE</button>
        </a>
    </div>

    <div class="container-fluid project-list">
        <div class="row justify-content-center">

            <?php
            $count = 0;
            foreach ($list as $row) {
                $id             = $row['projectId'];
                $name           = $row['projectName'];
                $desc           = $row['projectDescription'];
                $location       = $row['projectLocation'];
                $photo          = explode(";", $row['projectPhoto'])[0];
                $goalMax        = $row['projectGoalAmt'];
                $goalNow        = $row['projectCurrentAmt'];
                $goalMaxStr     = number_format($row['projectGoalAmt'], 2);
                $goalNowStr     = number_format($row['projectCurrentAmt'], 2);
                $progress       = $goalNow / $goalMax * 100;
                $fundrasierID   = $row['fundraiserId'];
                $query = $pdo->prepare("SELECT `name` FROM user WHERE userID = ?");
                $query->execute(array("$fundrasierID"));
                $fundraiser = $query->fetchAll();
                $fundraiserName = $fundraiser[0]["name"];
                echo <<<_END
                    <div class="col-md px-5 py-2">
                        <a href="../project-info/project1.php?id=$id">
                            <div class="d-flex align-items-center pt-3">
                                <img src="../$photo" class="project-list-image">
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <img src="../resources/img/location_icon.png" class="project-list-icon">
                                <div class="project-list-location">$location</div>
                            </div>
                            <div class="project-list-title h3">$name</div>
                            <div class="project-list-fundraiser">Fundraiser:&nbsp;$fundraiserName</div>
                            <div class="project-list-description">$desc</div>
                            <div class="d-inline-flex align-items-center">
                                <div class="project-list-funds-raised">RM&nbsp;$goalNowStr&nbsp;raised</div>
                                <div class="project-list-funds-raised-total">&nbsp;of RM&nbsp;$goalMaxStr</div>
                            </div>
                            <div class="progress project-list-progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="$progress" aria-valuemin="0" aria-valuemax="100" style="width: $progress%"></div>
                            </div>
                        </a>
                    </div>
_END;
                $count++;
            }

            if (($count % 2) == 0) {
                echo '<div class="w-100"></div>';
            } elseif (($count % 2) == 1) {
                echo '<div class="col-md"></div>';
            }

            if (empty($list)) {
                echo <<<_END
                    <div class="row">
                        <div class="col-md">
                            <div class="d-flex justify-content-center my-4 project-list-fundraiser">
                                No projects at the moment :<
                            </div>
                        </div>
                    </div>
_END;
            } else {
                echo <<<_END
                    <div class="row">
                        <div class="col-md">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-success load-more-btn" type="button">Load more...</button>
                            </div>
                        </div>
                    </div>
_END;
            }
            ?>
        </div>

        <div class="d-flex info-tab text-center justify-content-evenly">
            <div class="info">
                <p id="info-weeks" class="info-number h1">2</p>
                <p class="info-label h4">Weeks</p>
            </div>

            <div class="info">
                <p id="info-funds-raised" class="info-number h1">RM696,969.69</p>
                <p class="info-label h4">Funds Raised</p>
            </div>

            <div class="info">
                <p id="info-countries" class="info-number h1">1</p>
                <p class="info-label h4">Country</p>
            </div>

            <div class="info">
                <p id="info-organizations" class="info-number h1">18</p>
                <p class="info-label h4">Organizations</p>
            </div>
        </div>

        <div class="container-fluid bottom-banner">
            <div class="row">
                <div class="col-md container my-auto">
                    <div class="d-inline-flex justify-content-center ">
                        <img src="../resources/img/motto_icon.png" alt="Motto icon" class="bottom-banner-motto-icon">
                        <div class="bottom-banner-title">OUR MOTTO</div>
                    </div>
                    <div class="bottom-banner-motto">Every organization should be noticed as everyone is playing their part in helping the society.</div>

                </div>

                <div class="col-md container bottom-banner-accordion">
                    <div class="accordion-title h3">Itching to help more people? Or is it that nothing here piques your interest? Take a look at some other categories below!</div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Education
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <a href="education.php" class="text-decoration-none">
                                    <div class="accordion-body">
                                        Break the barriers to education with your donation.
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Food Supply
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <a href="food-supply.php" class="text-decoration-none">
                                    <div class="accordion-body">Send a warm meal and aid food security in poverty-stricken areas.</div>
                                </a>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Natural Disaster
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <a href="natural-disaster.php" class="text-decoration-none">
                                    <div class="accordion-body">Natural disasters sucks, so help those less fortunate rebuild houses and regain homes.</div>
                                </a>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                                    View all...
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <a href="categories.php" class="text-decoration-none">
                                    <div class="accordion-body">Come visit our exquisitely designed categories page (Spoiler alert: It's the same as the accordion menu)</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <?php include '../foot-nested.php'; ?>
</body>

</html>