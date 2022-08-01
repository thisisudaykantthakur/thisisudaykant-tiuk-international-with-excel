<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blur Frame</title>
    <style>
        .post{
            background-color: bisque;
            font-family: ubuntu;
            font-size: medium;
            color: black;
            padding: 05px;
            border-style: dotted;
            border-width: 01px;
            overflow: hidden;

        }
        input[type="number"],input[type="file"]{
            outline: none;
            width: 95%;
            margin: 02px 10px;
            padding: 05px;
            background-color: aliceblue;
            color: black;
            border-style: none;
            font-size: medium;
            border-radius: 05px;
        }
        input[type="checkbox"]{
            padding: 05px;
            height: 15px;
            width: 20px;
        }

        label{
            padding: 13px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 04px;
            font-family: ubuntu;
            font-weight: bold;
            text-transform: uppercase;
            background-color: cadetblue;
            border-style: solid;
            border-radius: 04px;
            border-color: black;
            border-width: 0.5px;
        }
        input[type="submit"]:hover{
            background-color: whitesmoke;
            color: cadetblue;
        }
        h1{
            text-align: center;
            color: whitesmoke;
            text-shadow: 03px 02px 04px chocolate;
        }
    </style>
</head>
<body>

<div class="post">
    <h1>Blur My Image</h1>
    <form action="{{ url('/process')  }}" method="post" enctype="multipart/form-data">    
        @csrf     
        <label for="image">Select your image files </label>
            <input type="file" name="uploadfile" required><br>   
        <label> Left-Right width for New Frame</label>
            <input type="number" name="para-lr" value="32" min="0" max="400" required><br>
        <label> Top-Bottom width for New Frame</label>
            <input type="number" name="para-tb" value="32" min="0" max="400" required><br>
        <label for="frame">Frame Blurrness</label>
            <input type="number" name="blr" value="15" min="0" max="100" required><br>
        <input type="submit" value="Process">
    </form>
</div>
   
</body>
</html>