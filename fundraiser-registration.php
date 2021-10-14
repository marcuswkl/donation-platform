<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fundraiser Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <style>
    .font{
        font-size:20px;
    }
    .sline{
        display:inline-block;
        margin-right:10px;
        padding: 10px;
    }
    .sline2{
        display:inline-block;
        width: 200%;
        background-color:#D8F3DC;
        border-color:#D8F3DC;
        border-radius:25px;
        
    }
    .buttoncenter{
        background-color:#52B788;
    }
    .body{
        background-color:#ECFDEF;
        
        
    }
    .body-container{
            height:80vh;

    }
    </style>
    
</head>
<body class="body">
    <?php include "head.php"?>
    <div class="container body-container">
    <table class="mt-5" style="display: flex;text-align: center; align-items:center;justify-content:center;">
        <tr style="text-align:center;"><td colspan="2"><h2><u>Fundraiser Information</u></h2></td></tr>
    
        <tr>
            <td>
                <label class="font sline">SSM Registration Number:</label>
            </td>
            <td>
            <input class="sline2" type="text" aria-label="SSM Registration Number" class="form-control">
            </td>
            
        </tr>
        <tr>
            <td>
            
                <label class="font sline">Phone Number:</label>
            
            </td>
            <td>
                <input class="sline2" type="text" aria-label="Phone Number" class="form-control">
            </td>
        </tr>
        <tr style="text-align:center;"><td colspan="2"><h2><u>Bank Account Information</u></h2></td></tr>
    
        <tr>
            <td>
                <label class="font sline">Bank Account Number:</label>
            </td>
            <td>
                <input class="sline2" type="text" aria-label="Bank Account Number" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
            <label class="font sline">Account Holder Name:</label>
            </td>
            <td>
            <input class="sline2" type="text" aria-label="Account Holder Name" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
            <label class="font sline">Bank Name:</label>
            </td>
            <td>
            <input class="sline2" type="text" aria-label="Bank Name" class="form-control">
            </td>
        </tr>
    </table>

<br>
<div style="display:flex;align-items:center;justify-content:center;">
<input class="buttoncenter btn btn-primary rounded-pill border-dark" type="submit" value="Submit">    
</div>
</div>
<?php include "foot.php"?>

</body>
</html>