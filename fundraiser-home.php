<!DOCTYPE html>
<html>
<head>
    <title>Fundraiser Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        .tableheader{
            background-color:#52B788;
            text-align:center;
        }
        .tabledata{
            background-color:#B2E1CC;
            text-align:center;
        }
        .body{
            background-color:#ECFDEF; 
        }
        .buttoncenter{
        color:#000000;
        background-color:#52B788;
    }
    </style>
    
</head>
<body class="body">
    <?php include "../head.php"?>
    <h3>Click on the Project Name to edit!</h3>
    <table class="table table-bordered border-white">
        <tr class="tableheader">
            <th>ID</th>
            <th>Project Name</th>
            <th>Description</th>
            <th>Donation Status</th>
            <th>Category</th>
            <th>Fund Raised (%)</th>
        </tr>
        <tr class="tabledata">
            <td>1</td>
            <td><a href="ProjectName1.php">Bachelor of Computer Science</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Education</td>
            <td>2%</td>
        </tr>
        <tr class="tabledata">
            <td>2</td>
            <td><a href="ProjectName2.php">Medical Supply</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Covid-19</td>
            <td>50%</td>
        </tr>
        <tr class="tabledata">
            <td>3</td>
            <td><a href="ProjectName3.php">Rebuild after earthquake</a></td>
            <td>...</td>
            <td>On hold</td>
            <td>Natural Disaster</td>
            <td>60%</td>
        </tr>
        <tr class="tabledata">
            <td>4</td>
            <td><a href="ProjectName4.php">Master of Computer Science</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Education</td>
            <td>100%</td>
        </tr>
        <tr class="tabledata">
            <td>5</td>
            <td><a href="ProjectName5.php">Food Bank</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Food Security</td>
            <td>10%</td>
        </tr>
        
    </table>
    <div style="display:flex;align-items:center;justify-content:center;">
    <a href="project-dashboard.php" class="btn btn-primary buttoncenter" role="button">Dashboard</a>
    </div>
    <?php include "../foot.php"?>
</body>
</html>
