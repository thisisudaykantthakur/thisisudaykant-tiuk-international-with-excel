<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Watch:HTML5,CSS3 and JS</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: verdana;
            background-color: cornsilk;
        }
        .container{
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px;
            background-color:wheat;
            width: fit-content;
            height: 35px;
            top: 70px;
            left: 05px;
            position: relative;
            border-radius: 24px;
            border-bottom-color: #F6DB6F;
            border-width: 02px;
            border-style: solid;
            border-style: unset;
            box-shadow: 04px 04px 03px #F6DB6F;
        }
        button{
            background-color: black;
            color: aliceblue;
            padding: 10px;
            width: 100px;
            height: 40px;
            margin: 10px;
            font-family: verdana;
            border-style:unset;
            box-shadow: 04px 04px 03px #F6DB6F;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 24px;
        }
        button:hover,:disabled{
            background-color:aliceblue;
            color: black;
            font-family: verdana;
            border-style:unset;
            box-shadow: 04px 04px 03px #F6DB6F;
            cursor: pointer;
            border-radius: 24px;
        }
        .timer{
            background-color: blanchedalmond;
            height: 100px;
            padding: 10px;
            line-height: 100px;
            font-family: verdana;
            font-weight: bold;
            font-size: 30px;
            box-shadow: 02px 02px 02px #F6DB6F;
            border-radius: 50%;
            cursor: pointer;   
            width:100px;
            text-align:center;      
        }
        .cross{
            position: fixed;
            top:0px;
            left: 10px;
            padding: 10px;
            font-family: verdana;
            font-size: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            background-color: #F6DB6F;
            color: aliceblue;
            font-weight: bold;
            text-align: center;
            border-bottom-style: dotted;
            border-bottom-width: 02px;
            cursor: pointer;
            box-shadow: 02px 02px 02px aliceblue;
        }
        .cross:hover{
            background-color: aliceblue;
            color:  #F6DB6F;
        }
        .titlebar h1{
            width: fit-content;
            height: fit-content;
            padding-bottom: 05px;
            padding-top: 05px;
            padding-left: 08px;
            padding-right: 05px;
            position: fixed;
            left: 160px;
            top: 0px;
            z-index: 0;
            font-size: 10px;
            background-color:wheat;
            border-bottom-color: #F6DB6F;
            border-width: 02px;
            border-style: solid;
            border-style: unset;
            box-shadow: 04px 04px 03px #F6DB6F;
            border-radius: 24px;
            color:#2E4053;
           
        }
        
        
    </style>

</head>
<body>
    <div class="titlebar">
        <h1>#ti<i style="color: orangered;font-size: 15px;">uk</i> Timer</h1>
    </div>
    <br>
    <div class="container">
        <span class="firstBTN">
            <button onclick="start()" id="strt">Start</button>
        </span>
        <div class="timer" id="timer"> 00:00 </div>
        <span class="stopBTN">
            <button onclick="stop()" id="stp">Stop</button>
        </span>
    </div>
    <div class="cross" onclick="refresh()">&#8635;</div>
    <script>
        var id=0;
        var sec=0;
        function msg(){
            if(sec<=9)
            {
                document.getElementById("timer").innerHTML=" 00:0"+sec;
                    sec++;
                    
            }
            else if(sec>=10)
            {
                document.getElementById("timer").innerHTML=" 00:"+sec;                   
                    if(sec==30)
                    {
                        document.getElementById("timer").innerHTML=" 00:"+sec;
                        window.clearInterval(id);                        
                        document.getElementById("timer").style.color="red";
                        document.getElementById("timer").style.backgroundColor="black";
                        document.getElementById("timer").style.boxShadow="02px 02px 02px red";  
                        document.getElementById("strt").disabled="true"; 
                        document.getElementById("strt").backgroundColor="aliceblue";
                        document.getElementById("strt").color="#F6DB6F";
                        document.getElementById("stp").disabled="true"; 
                        document.getElementById("stp").backgroundColor="aliceblue";
                        document.getElementById("stp").color="#F6DB6F";

                    }
                    sec++;  
            }           
        }

        function start(){           
                id=window.setInterval(msg,1000);
        }

        function stop(){
            window.clearInterval(id);
        }
        
        function refresh(){
           location.reload();  
        }
       
    </script>
</body>
</html>