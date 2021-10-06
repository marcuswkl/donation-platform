<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="project-info.css">
    <title>Project Info</title>
  </head>

<body>


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
              <img src="img/showcase1.png" class="img-fluid d-block w-100" alt="Children Picture 1">
            </div>
            <div class="carousel-item">
              <img src="img/showcase2.png" class="img-fluid d-block w-100" alt="Children Picture 2">
            </div>
            <div class="carousel-item">
              <img src="img/showcase3.png" class="img-fluid d-block w-100" alt="Children Picture 3">
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
          <h1 class="d-flex location"><img src="img/location-icon.png" class="img-fluid d-block mx-3 location-icon" alt="Location Icon"><strong>Kajang, Selangor</strong></h1>
          <h1 class="lead showcase-title">Empower Children Through Education</h1>
          <p class="fundraiser">Fundraiser >> Bunway</p>
          <div class="d-flex">
            <img src="img/goal-icon.png" class="img-fluid d-block mx-3 goal-icon" alt="Goal Icon">
            <div class="d-flex flex-column">
              <div>
                <p class="align-items-left funds"><strong>RM3,000 raised</strong> of RM 5,000</p>
              </div>
              <div class="d-flex">
                <div class="goal-progress"></div>
                <div class="goal-bar"></div>
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
          <button class="btn btn-light btn-md btn-donate" type="button">DONATE</button>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Story Section -->
  <section id="story" class="p-5">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-md">
          <img src="img/story.png" class="img-fluid" alt="Children writing on boards" />
        </div>
        <div class="col-md p-3 small-sized">
          <h2><u>THEIR STORY</u></h2>
          <p class="justify">
          <br>
            The children did not have chance to attend school since they are young. They are all passionate children who have their own dream.
          <br><br>
            The children, who were earlier averse to basic learning, are now showing incremental improvement and are able to read their regional language and English textbooks.
          </p>
        </div>
      </div>
  </section>

   <!-- Organisation Section -->
   <section id="organisation" class="p-5 bg-lightgreen ori-organisation">
      <div class="row align-items-center justify-content-between  g-4">
        <div class="col-md p-3 small-sized">
          <h2><u>ABOUT BUNWAY</u></h2>
          <p class="justify">
            <br>
            A 10 years organisation who always supported children homes, old folks home, etc. The team consists of 50 volunteers who are very kind.
          </p>
          <p>Website: <a href="#">bunway.com</a></p>
        </div>
        <div class="col-md">
          <img src="img/organisation.png" class="img-fluid" alt="Bunway Committees" />
        </div>
      </div>
  </section>

</body>
</html>
