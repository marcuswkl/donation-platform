<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../css/project1.css" rel="stylesheet" type="text/css">
  <link href="../css/theme.css" rel="stylesheet" type="text/css">
  <title>Project Info</title>

  <?php include_once "../DbController.php"; ?>
</head>

<?php
if (!isset($_GET["id"])) {
  $error = "No project ID found, please check the URL!\\nRedirecting you back to home page.";
  echo "<script type='text/javascript'>
          alert('$error');
          window.location.href='../donor-home.php';
          </script>";
}

$query = $pdo->prepare("SELECT * from project WHERE projectID = ?");
$query->execute(array($_GET["id"]));
$project = $query->fetchAll();
//Information
$id             = $project[0]['projectId'];
$name           = $project[0]['projectName'];
$desc           = $project[0]['projectDescription'];
$location       = $project[0]['projectLocation'];
$photo          = $project[0]['projectPhoto'];
$goalMax        = $project[0]['projectGoalAmt'];
$goalNow        = $project[0]['projectCurrentAmt'];
$category       = $project[0]['projectCategory'];
$goalMaxStr     = number_format($goalMax, 2);
$goalNowStr     = number_format($goalNow, 2);
$progress       = $goalNow / $goalMax * 100;
$fundrasierID   = $project[0]['fundraiserId'];
$query = $pdo->prepare("SELECT `name` FROM user WHERE userId = ?");
$query->execute(array("$fundrasierID"));
$user = $query->fetchAll();
$fundraiserName = $user[0]["name"];
$query = $pdo->prepare("SELECT `profileImage`, `fundraiserDescription`, `fundraiserWebsite` FROM fundraiser WHERE userId = ?");
$query->execute(array("$fundrasierID"));
$fundraiser = $query->fetchAll();
$fundraiserPhoto = $fundraiser[0]["profileImage"];
$fundraiserDesc = $fundraiser[0]["fundraiserDescription"];
$fundraiserSite = $fundraiser[0]["fundraiserWebsite"];
?>


<body>
  <?php include "../head-nested.php" ?>

  <!-- Showcase -->
  <section class="p-5">
    <div class="row text-left g-4">
      <div class="col-lg-7">
        <div id="carouselImage" class="carousel slide carousel-space" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselImage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselImage" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselImage" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../<?php echo explode(";", $photo)[0]; ?>" class="img-fluid d-block w-100" alt="Children Picture 1">
            </div>
            <div class="carousel-item">
              <img src="../<?php echo explode(";", $photo)[1]; ?>" class="img-fluid d-block w-100" alt="Children Picture 2">
            </div>
            <div class="carousel-item">
              <img src="../<?php echo explode(";", $photo)[2]; ?>" class="img-fluid d-block w-100" alt="Children Picture 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselImage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselImage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-lg-5 main-info">
        <h1 class="d-flex location"><img src="../resources/img/location-icon.png" class="img-fluid d-block mx-3 location-icon" alt="Location Icon"><strong>Kajang, Selangor</strong></h1>
        <h1 class="lead showcase-title"><?php echo $name; ?></h1>
        <p class="fundraiser">Fundraiser >>&nbsp;<?php echo $fundraiserName; ?></p>
        <div class="d-flex">
          <img src="../resources/img/goal-icon.png" class="img-fluid d-block mx-3 goal-icon" alt="Goal Icon">
          <div class="d-flex flex-column">
            <div>
              <p class="align-items-left funds"><strong>RM&nbsp;<?php echo $goalNowStr; ?>&nbsp;raised</strong> of RM&nbsp;<?php echo $goalMaxStr; ?></p>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress; ?>%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Secondary Navbar -->
  <nav class="navbar navbar-expand-md bg-mediumgreen navbar-light py-4 collapse-navbar">
    <div class="collapse navbar-collapse row text-center" id="navmenu">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item col-md">
          <a href="#story" class="nav-link">STORY</a>
        </li>
        <div class="d-none d-sm-block black-bar"></div>
        <li class="nav-item col-md">
          <a href="#organisation" class="nav-link">ORGANISATION</a>
        </li>
        <div class="d-none d-sm-block black-bar"></div>
        <li class="nav-item col-md">
          <a href="#messages" class="nav-link">MESSAGES</a>
        </li>
        <li class="nav-item col-md">
          <a href="../donation.php?category=<?php echo $category ?>">
            <button class="btn btn-light btn-md btn-donate rounded-pill" type="button">DONATE</button>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Donate Button -->
  <div class="navbar row text-center donate-button bg-mediumgreen navbar-light py-4" id="navmenu">
    <ul class="navbar-nav ms-auto">
      <li>
        <a href="../donation.php?category=<?php echo $category ?>">
          <button class="btn btn-light btn-md btn-donate donate" type="button">DONATE TO <?php echo strtoupper($category) ?></button>
        </a>
      </li>
    </ul>
  </div>

  <!-- Story Section -->
  <section id="story" class="p-5">
    <div class="row align-items-center justify-content-between g-4">
      <div class="col-md">
        <img src="../<?php echo explode(";", $photo)[2]; ?>" class="img-fluid" alt="Children writing on boards" />
      </div>
      <div class="col-md p-3 small-sized">
        <h2><u>THEIR STORY</u></h2>
        <p class="justify" style="white-space:pre-line">
          <?php echo $desc; ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Organisation Section -->
  <section id="organisation" class="p-5 bg-lightgreen ori-organisation">
    <div class="row align-items-center justify-content-between  g-4">
      <div class="col-md p-3 small-sized">
        <h2><u>ABOUT <?php echo strtoupper($fundraiserName); ?></u></h2>
        <p class="justify" style="white-space:pre-line">
          <?php echo $fundraiserDesc; ?>
        </p>
        <p>Website: <a href="<?php echo $fundraiserSite; ?>"><?php echo $fundraiserSite; ?></a></p>
      </div>
      <div class="col-md">
        <img src="../<?php echo $fundraiserPhoto; ?>" class="img-fluid" alt="Bunway Committees" />
      </div>
    </div>
  </section>

  <!-- Organisation Section Reversed -->
  <section id="organisation" class="p-5 bg-lightgreen resized-organisation">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img src="../<?php echo $fundraiserPhoto; ?>" class="img-fluid" alt="Bunway Committees" />
      </div>
      <div class="col-md p-3">
        <h2><u>ABOUT <?php echo strtoupper($fundraiserName); ?></u></h2>
        <p class="lead justify" style="white-space:pre-line">
          <?php echo $fundraiserDesc; ?>
        </p>
        <p>Website: <a href="<?php echo $fundraiserSite; ?>"><?php echo $fundraiserSite; ?></a></p>
      </div>
    </div>
  </section>

  <!-- Messages Section -->
  <section id="messages" class="p-4 bg-mediumgreen">
    <h1 class="text-center message">Not convinced? Hear from the other donors!</h1>
    <div id="carouselText" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner carousel-height">
        <div class="carousel-item active text-center">
          <p class="carousel-size">We love children very much and they always inspire us in many ways. We will continue to do everything we can to support them.<br><br>- Marcus, Accountant -</p>
        </div>
        <div class="carousel-item text-center">
          <p class="carousel-size">It is our duty to help those who are vunerable and in need, and I do my part by donating.<br><br>- Wais, Engineer -</p>
        </div>
        <div class="carousel-item text-center">
          <p class="carousel-size">I believe with my donation, I can make a dent, and collectively, we will bring a greater change for the better<br><br>- Wen Jun, Professor -</p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselText" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselText" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Explore More Section -->
  <section id="explore" class="p-5">
    <h2 class="text-center text-dark mb-4">EXPLORE OTHER PROJECTS</h2>
    <div class="row g-4">

      <?php
      $query = $pdo->prepare("SELECT * FROM project");
      $query->execute();
      $projects = $query->fetchAll();
      $count = 0;
      foreach ($projects as $project) {
        if (($project['projectId'] != $_GET["id"]) && $count < 3) {
          $id             = $project['projectId'];
          $name           = $project['projectName'];
          $photo          = explode(";", $project['projectPhoto'])[0];
          $fundraiserID   = $project['fundraiserId'];
          $query = $pdo->prepare("SELECT `name` FROM user WHERE userId = ?");
          $query->execute(array($fundraiserID));
          $fundraiser = $query->fetchAll();
          $fundraiserName = $fundraiser[0]["name"];

          echo <<<_END
              <div class="col-md-6 col-lg-4 cards">
                  <a href="project1.php?id=$id" class="card-links">
                      <div class="card bg-mediumgreen">
                      <div class="card-body text-center">
                          <h3 class="card-title mb-1"><strong>$name</strong></h3>
                          <p class="card-text">
                            by&nbsp;$fundraiserName
                          </p>
                          <img src="../$photo" class="mb-1"/>
                      </div>
                      </div>
                  </a>
              </div>
_END;
          $count++;
        }
      }
      ?>

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <?php include "../foot-nested.php" ?>

</body>

</html>