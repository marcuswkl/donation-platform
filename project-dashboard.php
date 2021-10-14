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
        padding-top:100px;
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
        @keyframes anim{
            100%{
                stroke-dashoffset:146.32;
            }
        }
        .circle2{
            fill:none;
            stroke:url(#GradientColor);
            stroke-width: 20px;
            stroke-dasharray: 472;
            stroke-dashoffset:472;
            animation: anim2 2s linear forwards;
        }
        @keyframes anim2{
            100%{
                stroke-dashoffset:316.24;
            }
        }
        .circle3{
            fill:none;
            stroke:url(#GradientColor);
            stroke-width: 20px;
            stroke-dasharray: 472;
            stroke-dashoffset:472;
            animation: anim3 2s linear forwards;
        }
        @keyframes anim3{
            100%{
                stroke-dashoffset:283.2;
            }
        }
        
        hr{
            border:4px solid #2D6A4F;
            border-radius: 5px;
            
        }
        .buttoncenter{
        color:#000000;
        background-color:#52B788;

    }
        
    </style>
</head>
<body class="body">
<?php include "admin-login/php/head.php"?>
    <table style="display: flex;text-align: center; align-items:center;justify-content:center;">
        <tr>
            <td style="padding-right:100px;">
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number">
                                
                            </div>
                        </div>
                    </div>
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                    <defs>
                        <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#2D6A4F" />
                        
                        </linearGradient>
                    </defs>
                    <circle class="circle" cx="80" cy="80" r="70" stroke-linecap="round" />
                    </svg>
                    
                </div>
            </td>
            <td style="padding-right:100px;">
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number2">
                            
                            </div>
                        </div>
                    </div>
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                    <defs>
                        <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#2D6A4F" />
                    
                        </linearGradient>
                    </defs>
                    <circle class="circle2" cx="80" cy="80" r="70" stroke-linecap="round" />
                    </svg>
                    
                </div>
            </td>
            <td style="padding-right:100px;">
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number3">
                                2/5
                            </div>
                        </div>
                    </div>
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                    <defs>
                        <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#2D6A4F" />
                        
                        </linearGradient>
                    </defs>
                    <circle class="circle3" cx="80" cy="80" r="70" stroke-linecap="round" />
                    </svg>
                    
                    
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding-right:100px;">Total Funds Raised(%)</td>
            <td style="padding-right:100px;">Goals Achieved</td>
            <td style="padding-right:100px;">Projects Ending Soon</td>
        </tr>
        
        
    </table>
    <div>
        <br>
        <br>    
        <hr>    
    </div>
    <div style="display:flex;justify-content:space-around">
    <a href="ShowProject.php" class="btn btn-primary buttoncenter" role="button">Show Projects</a>
    <a href="StartProject.php" class="btn btn-primary buttoncenter" role="button">Start Project</a>
    </div>    
    

    <script>
        let number = document.getElementById("number");
        let counter=0;
        setInterval(()=>{
            if(counter == 69){
                clearInterval();
            }else{
                counter+=1;
                number.innerHTML=counter+"%";
            }
            
        },20);
    </script>
    <script>
            let number2 = document.getElementById("number2");
            let counter2=0;
            setInterval(()=>{
                if(counter2 == 33){
                    clearInterval();
                }else{
                    counter2+=1;
                    number2.innerHTML=counter2+"%";
                }
            },20);
    </script>
    <script>
            
    </script>
    <?php include "admin-login/php/foot.php"?>
</body>
</html>