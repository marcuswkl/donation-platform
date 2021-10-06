<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fundraiser Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <style>
    .center{
        text-align: center;
    }
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
        width: 50%;
        background-color:#D8F3DC;
        border-color:#D8F3DC;
        border-radius:25px;
        
    }
    .buttoncenter{
        background-color:#52B788;
        margin:0;
        position:absolute;
        top:50%;
        left:50%;
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%)
    }
    .body{
        background-color:#ECFDEF;
    }
    </style>
    
</head>
<body class="body">
<div class="center">
    <h2><u>Fundraiser Information</u></h2>
    <div style="padding-left:260px;">
        <label class="font sline">SSM Registration Number:</label>
        <input class="sline2" type="text" aria-label="SSM Registration Number" class="form-control">
    </div>
</div>
<div class="center" style="padding-left:323px;">
    <label class="font sline">Phone Number:</label>
    <input class="sline2" type="text" aria-label="Phone Number" class="form-control">
</div>
<div class="center">
    <h2><u>Bank Account Information</u></h2>
    <div style="padding-left:283px;">
        <label class="font sline">Bank Account Number:</label>
        <input class="sline2" type="text" aria-label="Bank Account Number" class="form-control">
    </div>
</div>
<div class="center" style="padding-left:285px;">
    <label class="font sline">Account Holder Name:</label>
    <input class="sline2" type="text" aria-label="Account Holder Name" class="form-control">
</div>
<div class="center" style="padding-left:348px;">
    <label class="font sline">Bank Name:</label>
    <input class="sline2" type="text" aria-label="Bank Name" class="form-control">
</div>
<input class="buttoncenter" type="submit" value="Submit">    
</body>
</html>