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
        margin:0;
        position:absolute;
        top:50%;
        left:50%;
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%)
    }
    </style>
    
</head>
<body class="body">
    <h3>Click on the Project Name to edit!</h3>
    <table class="table table-bordered border-white">
        <tr class="tableheader">
            <th>Project Name</th>
            <th>Description</th>
            <th>Donation Status</th>
            <th>Category</th>
            <th>Fund Raised (%)</th>
        </tr>
        <tr class="tabledata">
            <td><a href="ProjectName1.php">PN1</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Education</td>
            <td>2%</td>
        </tr>
        <tr class="tabledata">
            <td><a href="ProjectName2.php">PN2</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Covid-19</td>
            <td>50%</td>
        </tr>
        <tr class="tabledata">
            <td><a href="ProjectName3.php">PN3</a></td>
            <td>...</td>
            <td>On hold</td>
            <td>Natural Disaster</td>
            <td>60%</td>
        </tr>
        <tr class="tabledata">
            <td><a href="ProjectName4.php">PN4</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Education</td>
            <td>100%</td>
        </tr>
        <tr class="tabledata">
            <td><a href="ProjectName5.php">PN5</a></td>
            <td>...</td>
            <td>Active</td>
            <td>Food Security</td>
            <td>10%</td>
        </tr>
        
    </table>
    <a href="project-dashboard.php" class="btn btn-primary buttoncenter" role="button">Dashboard</a>
</body>
</html>
<stop offset="0%" stop-color="#e91e63" />
               <stop offset="100%" stop-color="#673ab7" />