<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
    <style>
        .circular{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Poppins', sans-serif;
        }
        .body{
        background-color:#ECFDEF;
        
        }
        .skill{
            width:160px;
            height:160px;
            position:relative;
            

        }
        .outer{
            height:160px;
            width:160px;
            border-radius:50%;
            padding:20px;
            color:#B2E1CC;
            box-shadow:6px 6px 10px -1px rgba(0,0,0,0.15),
                        -6px -6px 10px -1px rgba(255,255,255,0.7)
        }
        .inner{
            height:120px;
            width:120px;
            color:#B2E1CC;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            box-shadow: inset 6px 6px 10px -1px rgba(0,0,0,0.15),
                        inset -6px -6px 10px -1px rgba(255,255,255,0.7),
                        -0.5px -0.5px 0px rgba(255,255,255,1),
                        0.5px 0.5px 0px rgba(255,255,255,1),
                        0px 12px 10px -10px rgba(0,0,0,0.05);
        }
        #number{
            font-weight:600px;
            color:#000000;
        }
        #number2{
            font-weight:600px;
            color:#000000;
        }
        #number3{
            font-weight:600px;
            color:#000000;
        }
        .circle{
            fill:none;
            stroke:url(#GradientColor);
            stroke-width: 20px;
            stroke-dasharray: 472;
            stroke-dashoffset:472;
            animation: anim 2s linear forwards;
            
        }
        .svg{
            position:absolute;
            top:0;
            left:0;
            

        }
        .label{
            padding-top: 30px;
            white-space:nowrap;
            vertical-align:middle;
            
        }
        
        .circle2{
            fill:none;
            stroke:url(#GradientColor);
            stroke-width: 20px;
            stroke-dasharray: 472;
            stroke-dashoffset:472;
            animation: anim2 2s linear forwards;
        }
        
        .circle3{
            fill:none;
            stroke:url(#GradientColor);
            stroke-width: 20px;
            stroke-dasharray: 472;
            stroke-dashoffset:472;
            animation: anim3 2s linear forwards;
        }

        .buttoncenter{
        color:#000000;
        background-color:#52B788;
        

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
    <?php
    $servername = "localhost";
    $username = "forall";
    $password = "forall123";
    $dbname = "anonym_us";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT projectGoalAmt, projectStartingAmt FROM project";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $totalx = null;
        $totaly = null;
        $totalprojects = null;
        while($row = $result->fetch_assoc()) {
            $x = $row["projectStartingAmt"];
            $totalx += $x;
            $y = $row["projectGoalAmt"];
            $totaly += $y;
            $z = ($totalx/$totaly)*100;
            $z1 = ($totalx/$totaly);
            $zz = ($x/$y)*100;
            if ($zz == 100){
                $counter+=1;
            }else{
                $counter=0;
            }
            if ($zz >= 80){
                $projects+=1;
            }else{
                $projects = 0;
            }
            $totalprojects+=1;
            $anim = (472-(472*number_format((float)$z1, 2, '.', '')));
            $anim2 = (472-(472*$counter));
            $anim3 = (472-(472*($projects/$totalprojects)));    
        }    
        echo "<style>@keyframes anim{
            100%{
                stroke-dashoffset:$anim;
            }
        }</style>";
        echo "<style>@keyframes anim2{
            100%{
                stroke-dashoffset:$anim2;
            }
        }</style>";
        echo "<style>@keyframes anim3{
            100%{
                stroke-dashoffset:$anim3;
            }
        }</style>";
        echo '<tr>';
        echo '<td style="padding-right:100px;"><div class="skill"><div class="outer"><div class="inner"><div id="number">'.intval($z).'%</div></div></div><svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px"><defs><linearGradient id="GradientColor"><stop offset="0%" stop-color="#2D6A4F" /></linearGradient></defs><circle class="circle" cx="80" cy="80" r="70" stroke-linecap="round" /></svg></div></td>';
        echo '<td style="padding-right:100px;"><div class="skill"><div class="outer"><div class="inner"><div id="number2">'.$counter.'%</div></div></div><svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px"><defs><linearGradient id="GradientColor"><stop offset="0%" stop-color="#2D6A4F" /></linearGradient></defs><circle class="circle2" cx="80" cy="80" r="70" stroke-linecap="round" /></svg></div></td>';
        echo '<td style="padding-right:100px;"><div class="skill"><div class="outer"><div class="inner"><div id="number3">'.$projects.'/'.$totalprojects.'</div></div></div><svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px"><defs><linearGradient id="GradientColor"><stop offset="0%" stop-color="#2D6A4F" /></linearGradient></defs><circle class="circle3" cx="80" cy="80" r="70" stroke-linecap="round" /></svg></div></td>';
        echo '</tr>';
        echo '<tr><td style="padding-right:100px;">Total Funds Raised(%)</td><td style="padding-right:100px;">Goals Achieved</td><td style="padding-right:100px;">Projects Ending Soon</td></tr>';             
        
    }else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </table>
    <br>
    <br>
    <div style="display:flex;justify-content:space-between"><a href="fundraiser-home.php" class="btn btn-primary buttoncenter rounded-pill border-dark" role="button">Show Projects</a><a href="project1-dashboard.php" class="btn btn-primary buttoncenter rounded-pill border-dark" role="button">Start Project</a></div></div>
    
    

    <?php include "foot.php"?>
</body>
</html>