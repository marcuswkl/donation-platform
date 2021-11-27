<?php require_once "DbController.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/project1-dashboard.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');</style>
    <title>Edit Project1</title>
</head>

<body>
    <?php include 'head.php';?>
    <?php
    $date = date_create();
    if ($_GET["type"] == "create") {
        $projectName = $projectDesc = $projectLocation = $projectPhoto = $projectGoalAmt = $projectCurrentAmt =
         $projectGoalStatus = $projectCategory = $projectStartDate = $projectEndDate = null;
        $backendParameter = "?type=create";

    } else if ($_GET["type"] == "edit") {
        $projectQuery   = "SELECT * FROM project WHERE projectId='$_GET[id]'";
        $projectResult  = $pdo->query($projectQuery);
        $projectRow = $projectResult->fetch();

        $projectName = $projectRow['projectName'];
        $projectDesc = $projectRow['projectDescription'];
        $projectLocation = $projectRow['projectLocation'];
        $projectPhoto = $projectRow['projectPhoto'];
        $projectGoalAmt = $projectRow['projectGoalAmt'];
        $projectCurrentAmt = $projectRow['projectCurrentAmt'];
        $projectGoalStatus = $projectRow['projectGoalStatus'];
        $projectCategory = $projectRow['projectCategory'];
        $projectStartDate = $projectRow['projectStartDate'];
        $projectEndDate = $projectRow['projectEndDate'];

        $backendParameter = "?type=edit&id=$_GET[id]";

    } else {
        echo "<script type='text/javascript'>alert('Invalid project dashboard type.');</script>";
    }
    ?>
    <section class="container my-5 fr-project1-edit">
        <div class="fr-project1-edit-top text-center">
            <h1 class="fr-project1-edit-title fw-bold text-decoration-underline">Manage Project</h1>
            <!-- Progress Group -->
            <div class="my-5 fr-project1-edit-progress-group">
                <div class="progress" style="height: 2rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated fr-project1-edit-progress-bar" role="progressbar" style="width: 67%"><?php
                     if (is_null($projectGoalAmt)) {
                         echo "Goal amount is not set";
                     } else {
                        echo "RM" . $projectCurrentAmt . " (" . round(($projectCurrentAmt / $projectGoalAmt) * 100, 2) . "%)";
                     }
                     ?></div>
                </div>
                <div class="d-flex flex-row justify-content-between fr-project1-edit-progress-labels">
                    <span>RM0</span>
                    <span><?php 
                        if (is_null($projectEndDate)) {
                            echo "Duration is not set";
                        } else {
                            $date2 = date_create($projectEndDate);
                            $dateDiff = date_diff($date, $date2);
                            if ($dateDiff->format("%R") == "+") {
                                echo $dateDiff->format("%a days");
                            } else {
                                echo "Ended";
                            }
                        }
                    ?></span>
                    <span>RM<?php echo $projectGoalAmt ?></span>
                </div>
            </div>
        </div>

        <form class="fr-project1-edit-form" action="form-handlers/project1_dashboard_backend.php<?php echo $backendParameter ?>" method="post">
            <div class="row mb-4">
              <label for="inputProjectName" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Project Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectName" name="projectName" value="<?php echo $projectName ?>" required>
              </div>
            </div>

            <div class="row mb-4">
                <label for="textAreaProjectDescription" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Project Description:</label>
                <textarea class="form-control form-control-lg form-control-fr-project1-edit fr-project1-edit-textarea" id="textAreaProjectDescription" name="projectDesc" rows="3"><?php echo $projectDesc ?></textarea>
            </div>
            
            <div class="row mb-4">
                <label for="inputProjectLocation" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Project Location:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectLocation" name="projectLocation" value="<?php echo $projectLocation ?>" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-sm-3">
                    <label for="inputProjectPhotos" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Project Photos:</label>
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-9 input-group input-group-lg fr-project1-edit-input-group">
                        <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectPhotos" name="projectPhoto" value="<?php echo $projectPhoto ?>">
                        <button class="btn border border-dark border-start-0" type="button" id="input-group-button-upload">
                            <i class="bi bi-upload"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-sm-3">
                    <label for="inputGoalAmount" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Goal Amount:</label>
                </div>

                <div class="col-sm-4">
                    <div class="col-sm-4 input-group input-group-lg fr-project1-edit-input-group">
                        <span class="input-group-text border border-dark border-end-0 input-group-text-currency" style="    border-radius: 1.5rem 0rem 0rem 1.5rem;">RM</span>
                        <input type="number" class="form-control form-control-lg border-start-0 form-control-fr-project1-edit" id="inputGoalAmount" name="projectGoalAmt" value="<?php echo $projectGoalAmt ?>" required>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <label for="selectGoalStatus" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Goal Status:</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-lg form-select-fr-project1-edit" id="selectGoalStatus" name="projectGoalStatus">
                        <?php
                        if (is_null($projectGoalStatus) || $projectGoalStatus == 0) {
                            echo '<option value="0" selected>Active</option>';
                            echo '<option value="1">Completed</option>';
                            echo '<option value="2">On Hold</option>';
                        } else if ($projectGoalStatus == 1) {
                            echo '<option value="0">Active</option>';
                            echo '<option value="1" selected>Completed</option>';
                            echo '<option value="2">On Hold</option>';
                        } else if ($projectGoalStatus == 2) {
                            echo '<option value="0">Active</option>';
                            echo '<option value="1">Completed</option>';
                            echo '<option value="2" selected>On Hold</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <label for="selectCategory" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Category:</label>
                <div class="col-sm-4 mb-3">
                    <select class="form-select form-select-lg form-select-fr-project1-edit" id="selectCategory" name="projectCategory">
                        <?php
                        if (is_null($projectCategory) || $projectCategory == "Covid-19") {
                            echo '<option value="Covid-19" selected>COVID-19</option>';
                            echo '<option value="Education">Education</option>';
                            echo '<option value="Food Supply">Food Supply</option>';
                            echo '<option value="Natural Disaster">Natural Disaster</option>';
                        } else if ($projectCategory == "Education") {
                            echo '<option value="Covid-19">COVID-19</option>';
                            echo '<option value="Education" selected>Education</option>';
                            echo '<option value="Food Supply">Food Supply</option>';
                            echo '<option value="Natural Disaster">Natural Disaster</option>';
                        } else if ($projectCategory == "Food Supply") {
                            echo '<option value="Covid-19">COVID-19</option>';
                            echo '<option value="Education">Education</option>';
                            echo '<option value="Food Supply" selected>Food Supply</option>';
                            echo '<option value="Natural Disaster">Natural Disaster</option>';
                        } else if ($projectCategory == "Natural Disaster") {
                            echo '<option value="Covid-19">COVID-19</option>';
                            echo '<option value="Education">Education</option>';
                            echo '<option value="Food Supply">Food Supply</option>';
                            echo '<option value="Natural Disaster" selected>Natural Disaster</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-3">
                    <label for="inputDate1" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Date:</label>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control form-control-lg form-control-fr-project1-edit" id="inputDate1" name="projectStartDate" value="<?php echo $projectStartDate ?>" required>
                </div>

                <div class="col d-none">
                    <label for="inputDate2" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit"></label>
                </div>

                <div class="col-sm-1">
                    <i class="bi bi-arrow-right"></i>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control form-control-lg form-control-fr-project1-edit" id="inputDate2" name="projectEndDate" value="<?php echo $projectEndDate ?>" required>
                </div>
            </div>

            <div class="fr-project1-edit-form-buttons text-center">
                <a class="btn-lg border border-dark link-dark text-decoration-none m-5 fr-project1-edit-cancel" href="fundraiser-home.php">Cancel</a>
                <button type="submit" class="btn-lg border-1 border-dark fr-project1-edit-submit">Save</button>
            </div>
        </form>
    </section>
    <?php include 'foot.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>