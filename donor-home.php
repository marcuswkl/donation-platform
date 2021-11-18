<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Donor Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="css/donation-home.css" rel="stylesheet" type="text/css">
</head>

<body style= "background-color:#ECFDEF;">
  <?php include "head.php" ?>
<section class="mt-5" id = "top">
    <div class="container inner_section text-center">
      <div class="row">
        <div class="col-md-8 my-auto">
          <h2>Anonym-us Angel</h2>
          <h3>A fundraising platform which allows you to donate to an anonymous project under a selected category so that every project is supported.</h3>
        </div>

        <div class="col-md-4"> <img class="img-responsive  img-fluid" id="donor-home-img-angel" src="resources/img/angel.png">
        </div>
      </div>
    </div>
</section>
  <!--Aboutus-->

  
  <section class="mb-5" id="gallery">
      <div class="container">
        <br><br><br><br><br><br>
              <h2>Categories</h2>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-3">
                <a style = "text-decoration:none; color:black" href="categories/covid-19.php">
                  <figure>
                    <img src="resources/img/donor-home-covid1.png" class="img-fluid" alt="image">
                      <div class="service_block">
                        <h3 class="animated fadeInUp wow" style="color:black">Covid 19 </h3>
                        <p class="animated fadeInDown wow">Buy them Mask and Supplies</p>
                      </div>  
                  </figure>
                </a> 
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                <a style = "text-decoration:none; color:black" href="categories/education.php">
                  <figure>
                    <img src="resources/img/donor-home-education.png" class="img-fluid" alt="image">
                      <div class="service_block">
                        <h3 class="animated fadeInUp wow"style="color:black">Education </h3>
                        <p class="animated fadeInDown wow">Kids Deserve to go to School</p>
                      </div>  
                  </figure>
                </a> 
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                <a style = "text-decoration:none; color:black" href="categories/food-supply.php">
                  <figure>
                    <img src="resources/img/donor-home-food.png" class="img-fluid" alt="image">
                      <div class="service_block">
                        <h3 class="animated fadeInUp wow"style="color:black">Food Supply </h3>
                        <p class="animated fadeInDown wow">Dont Let them Starve</p>
                      </div> 
                  </figure>
                </a>  
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                <a style = "text-decoration:none; color:black" href="categories/natural-disaster.php">
                  <figure>
                    <img src="resources/img/donor-home-natural2.png" class="img-fluid" alt="image">
                      <div class="service_block">
                        <h3 class="animated fadeInDown wow" style="color:black">Natural Disaster </h3>
                        <p class="animated fadeInDown wow">Save the Earth and our People</p>
                      </div>   
                  </figure>
                </a>              
                </div>
            </div>
            <div class="center">
              <button type="button" class="btn btn-success toolbar-child">Browse Categories</button>
            </div>
        </div>
  </section>
  <br>

  <!--Service-->
  <section id="service">
    <div class="container">
      <h2 style="color:black">How To Be An Anonym-Us Angel?</h2>
      <div class="service_wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="delay-03s animated wow  zoomIn"><img src="resources/img/donor-home-1.png" alt="1" style="padding-bottom: 5px;"> </div>
            <div class="service_block">
              <br>
              <h3 class="animated fadeInDown wow" style="color:black" >Choose a category </h3>
              <p class="animated fadeInDown wow">Which has the project that you would like to support</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="delay-03s animated wow zoomIn"><img src="resources/img/donor-home-2.png" alt="2" style="padding-bottom: 10px;"> </div>
            <div class="service_block">
              <h3 class="animated fadeInDown wow"style="color:black">Donate</h3>
              <p class="animated fadeInDown wow">and make payment </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="delay-03s animated wow zoomIn"><img src="resources/img/donor-home-3.png" alt="3"></div>
            <div class="service_block">
              <br>
              <h3 class="animated fadeInDown wow"style="color:black">Get Appreciated</h3>
              <p class="animated fadeInDown wow">by receving a Thank You note truly by us and a receipt</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 text-center">
            <div class="delay-03s animated wow zoomIn"><img src="resources/img/donor-home-4.png" alt="4"></div>
            <div class="service_block">
              <br><br>
              <h3 class="animated fadeInDown wow"style="color:black">Understand</h3>
              <p class="animated fadeInDown wow">more about the project that you chose to donate</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--Service-->

  <section class="accordionqna">
    <div class="container">
      <h2>Frequently Asked Questions </h2>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Who am I donating to?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">You'll be donating to a random NGO/Companies dedicated to the categories that you have chosen previously. All the donations done will be anonymous as information of the donors will not be exposed to anyone.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Who is the team behind Anonym-Us Angels?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">The team behind Anonym-Us Angels consists of 7 members which are Marcus (Leader), Chin Wai Siong, Darren, Wen Jun, Jia Xin, Amber and also Javier.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              What are the categories of the donations?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">There are FOUR donation categories in total which are Covid-19, Natural Disaster, Education, and lastly, Food Supply.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              Why is the donation being done anonymously?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">The donation is being done anonymously is to protect our client's identity(donors) so that the donors can donate freely and without any disturbance or external issues.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
               Who designed this wonderful homepage?
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Totally not Wai Siong</div>
          </div>
        </div>
      </div>
    </div>
  </section>
<br><br>
  <?php include "foot.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>

</html>
