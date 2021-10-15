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
    <section class="container my-5 fr-project1-edit">
        <div class="fr-project1-edit-top text-center">
            <h1 class="fr-project1-edit-title fw-bold text-decoration-underline">Manage Project</h1>
            <!-- Progress Group -->
            <div class="my-5 fr-project1-edit-progress-group">
                <div class="progress" style="height: 2rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated fr-project1-edit-progress-bar" role="progressbar" style="width: 67%">RM2000 (67%)</div>
                </div>
                <div class="d-flex flex-row justify-content-between fr-project1-edit-progress-labels">
                    <span>RM0</span>
                    <span>Ends in 1 week</span>
                    <span>RM3000</span>
                </div>
            </div>
        </div>

        <form class="fr-project1-edit-form">
            <div class="row mb-4">
              <label for="inputProjectName" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Project Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectName" value="Derek Edmonds Scholarship Fund">
              </div>
            </div>

            <div class="row mb-4">
                <label for="textAreaProjectDescription" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Project Description:</label>
                <textarea class="form-control form-control-lg form-control-fr-project1-edit fr-project1-edit-textarea" id="textAreaProjectDescription" rows="3">The Derek Edmonds Scholarship Fund seeks to provide financial aid to deserving students to pursue further education in Malaysia. Scholarship applications will be opened in November 2021 for January 2022 intake students.</textarea>
            </div>
            
            <div class="row mb-4">
                <label for="inputProjectLocation" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Project Location:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectLocation" value="Klang Valley, Malaysia">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-sm-3">
                    <label for="inputProjectPhotos" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Project Photos:</label>
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-9 input-group input-group-lg fr-project1-edit-input-group">
                        <input type="text" class="form-control form-control-lg form-control-fr-project1-edit" id="inputProjectPhotos" value="de-scholarship-fund.jpg">
                        <button class="btn border border-dark border-start-0" type="button" id="input-group-button-upload">
                            <i class="bi bi-upload"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="inputGoalAmount" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Goal Amount:</label>
                </div>

                <div class="col">
                    <div class="col-sm-9 input-group input-group-lg fr-project1-edit-input-group">
                        <span class="input-group-text border border-dark border-end-0 input-group-text-currency" style="    border-radius: 1.5rem 0rem 0rem 1.5rem;">RM</span>
                        <input type="number" class="form-control form-control-lg border-start-0 form-control-fr-project1-edit" id="inputGoalAmount" value="3000">
                    </div>
                </div>

                <div class="col">
                    <label for="inputStartingAmount" class="col-sm-3 col-form-label col-form-label-lg w-100 form-label-fr-project1-edit">Starting Amount:</label>
                </div>

                <div class="col">
                    <div class="col-sm-9 input-group input-group-lg fr-project1-edit-input-group">
                        <span class="input-group-text border border-dark border-end-0 input-group-text-currency" style="    border-radius: 1.5rem 0rem 0rem 1.5rem;">RM</span>
                        <input type="number" class="form-control form-control-lg border-start-0 form-control-fr-project1-edit" id="inputStartingAmount" value="0">
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <label for="selectGoalStatus" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Goal Status:</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-lg form-select-fr-project1-edit" id="selectGoalStatus">
                        <option value="active" selected>Active</option>
                        <option value="completed">Completed</option>
                        <option value="on-hold">On Hold</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <label for="selectCategory" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Category:</label>
                <div class="col-sm-4 mb-3">
                    <select class="form-select form-select-lg form-select-fr-project1-edit" id="selectCategory">
                        <option value="covid-19">COVID-19</option>
                        <option value="education" selected>Education</option>
                        <option value="food-supply">Food Supply</option>
                        <option value="natural-disaster">Natural Disaster</option>
                    </select>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-3">
                    <label for="inputDate1" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit">Date:</label>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control form-control-lg form-control-fr-project1-edit" id="inputDate1" value="2021-10-01">
                </div>

                <div class="col d-none">
                    <label for="inputDate2" class="col-sm-3 col-form-label col-form-label-lg form-label-fr-project1-edit"></label>
                </div>

                <div class="col-sm-1">
                    <i class="bi bi-arrow-right"></i>
                </div>

                <div class="col-sm-4">
                    <input type="date" class="form-control form-control-lg form-control-fr-project1-edit" id="inputDate2" value="2021-10-31">
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