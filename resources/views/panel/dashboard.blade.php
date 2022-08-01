<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="icon" href="{{URL('/images/t.png')}}" type="image/icon type">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>tiuk &#183; Dashboard</title>
    <style>
        .body{
            background-color: whitesmoke;
            color: #2E4053;
        }
        .table{
            color: #2E4053;
            font-family: verdana;
        }
        .table tr td{
            font-size: small;
            cursor: pointer;
        }
        .table tr td a{
            text-decoration: none;
            color: #2E4053;
        }
        .logout{
            text-decoration: none;
            background-color: #2E4053;
            color: whitesmoke;
            float: right;
            right: 15px;
            margin: 0px;
            padding: 03px;
            font-size: medium;
        }
        .logout:hover{
            background-color: whitesmoke;
            color: #2E4053;
            border-radius: 05px;
        }
        .container{
             /* display: inline; */
             display: block;
            top: 0px;
        }
        .container h4{
            background-color: #2E4053;
            color: whitesmoke;
            margin: 05px;
            padding: 05px;
        }
        
    </style>
</head>
<body class="body">
    <span class="container">
        <h4>Welcome <i style="color: red;">{{ $information->name }}</i> to dashboard <a class="logout" href="logout">logout</a></h4>
       
    </span>
    @include('feedback.layout')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>