<link href="css/head.css" type="text/css" rel="stylesheet">

<?php
session_start();
?>

<nav class="navbar navbar-expand-md navbar-light head">
    <div class="container topnav-container">
        <a href="donor-home.php"> <img src="resources/img/Logo.png" alt="logo" class="mx-2 logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>


<!-- If user is type donor display HOME link -->
<?php if (($_SESSION['type'] == "donor") || ($_SESSION['type'] == "fundraiser")){?>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="d-flex navbar-nav me-auto">
                <li class="nav-item menu">
                    <a href="donor-home.php" class="nav-link">Home</a>
                </li>
            </ul>
        </div>

        <?php }?>
<!-- End of HOME link -->

<?php if(isset($_SESSION['name'])){?>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="d-flex navbar-nav ms-auto">
                <li class="nav-item menu ">
                    <a href="form-handlers/session_logout.php" class="nav-link"><i class="bi bi-box-arrow-left"></i>&nbsp;Log Out</a>
                </li>
<?php }else{?>
                    <a href="login.php" class="nav-link" style="color:black;"><i></i>&nbsp;Login</a>
    <?php }?>
                <!-- If user is type donor display PROFILE link -->
                <?php if ($_SESSION['type'] == "donor"){?>
                <li class="nav-item menu">
                    <a href="donor-profile.php" class="nav-link"><i class="bi bi-person-fill"></i>&nbsp;Profile</a>
                </li>
                <?php }?>
                <!-- End of PROFILE link -->

                <!-- If user is type donor display PROFILE link -->
                <?php if ($_SESSION['type'] == "fundraiser"){?>
                <li class="nav-item menu">
                    <a href="fundraiser-profile.php" class="nav-link"><i class="bi bi-person-fill"></i>&nbsp;Fundraiser Profile</a>
                </li>
                <?php }?>
                <!-- End of PROFILE link -->
            </ul>
        </div>
    </div>
</nav>