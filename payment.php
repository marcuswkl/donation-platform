<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/payment.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel='stylesheet'>
    <title>Payment</title>
  </head>
  <body>
  <?php include "head.php"?>
    <?php
        require_once 'DbController.php';

        $query = "SELECT * FROM donation_history";
        $result  = $pdo->query($query);

        foreach($result as $row){
            $amount = $row['amount'];
        }

    ?>
    <!-- Title -->
    <div class="text-center m-5">
      <h1 class="display-2 ">Donation Amount: RM<?php echo $amount ?></h1>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                            </ul>
                        </div> <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form role="form" onsubmit="event.preventDefault()">
                                    <div class="form-group"> <label for="username">
                                            <h6>Card Owner</h6>
                                        </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> 
                                    </div>
                                    <div class="form-group"> 
                                        <label for="cardNumber">
                                            <h6>Card number</h6>
                                        </label>
                                        <div class="input-group"> 
                                            <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                            <div class="input-group-append"> 
                                                <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>Expiration Date</h6>
                                                    </span></label>
                                                <div class="input-group"> 
                                                    <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer"> 
                                        <button type="button" class="subscribe btn btn-primary btn-block shadow-sm m-2"> 
                                            <a href="loading.php" class="text-dark btn">Proceed</a> 
                                        </button>
                                        <button type="button" class="subscribe btn btn-primary btn-block shadow-sm m-2">
                                            <a href="donation.php" class="text-dark btn">Cancel</a> 
                                        </button>
                                    </div>    
                                </form>
                            </form>
                        </div> <!-- End -->
                        
                        <!-- bank transfer info -->
                        <div id="net-banking" class="tab-pane fade pt-3">
                            <div class="form-group "> <label for="Select Your Bank">
                                    <h6>Select your bank</h6>
                                </label> <select class="form-control" id="ccmonth">
                                    <option value="" selected disabled>--Please select your bank--</option>
                                    <option>Affin Bank</option>
                                    <option>Alliance Bank</option>
                                    <option>Ambank</option>
                                    <option>Bank Islam</option>
                                    <option>BSN</option>
                                    <option>CIMB Bank</option>
                                    <option>Hong Leong Bank</option>
                                    <option>HSBC</option>
                                    <option>Maybank</option>
                                    <option>UOB</option>
                                </select> 
                            </div>
                            <button type="button" class="subscribe btn btn-primary btn-block shadow-sm m-2"> 
                                <a href="loading.php" class="text-dark btn">Proceed</a> 
                            </button>
                            <button type="button" class="subscribe btn btn-primary btn-block shadow-sm m-2">
                                <a href="donation.php" class="text-dark btn">Cancel</a> 
                            </button>
                            <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your donation. </p>
                        </div> <!-- End -->
                        <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/payment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <?php include "foot.php"?>

</body>

</html>