<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            width: 100%;
            margin: 0 auto;
            font-family: arial;
        }
        h1{
            display: inline;
        }
        .container{
            width: 360px;
        }
        #input{
            width: 300px;
            height: 46px;
            border: 1px solid black;
            outline: none;
            font-size: 25px;
            vertical-align: middle;
        }
        #addToDo{
            height: 50px;
            width: 50px;
            border: 1px solid black;
            vertical-align: middle;
            font-size: 30px;
        }
        .to-dos{
            margin-top: 25px;
        }
        p{
            margin: 0;
            
            cursor: pointer;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1>To do list</h1>
    <div class="container">
        <input type="text" id="input"><button type="submit" id="addToDo">+</button>
        <div class="to-dos" id="toDoContainer"></div>
    </div>

    <script>
     let addBtn = document.getElementById("addToDo");
     let input = document.getElementById("input");
     let output = document.getElementById("toDoContainer");

     addBtn.addEventListener('click',function(){
         var paragraph = document.createElement('p');
         paragraph.innerText =input.value;
         paragraph.style.backgroundColor="#2E4053";
         paragraph.style.color="white";
         output.appendChild(paragraph);
         input.value="";
         paragraph.addEventListener('click',function(){
             paragraph.style.textDecoration= "line-through";
             paragraph.style.textDecorationColor="red";
             
         });
         paragraph.addEventListener('dblclick',function(){
             output.removeChild(paragraph);
         });

     });

    </script>
</body>
</html>