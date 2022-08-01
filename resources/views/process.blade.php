@php
        error_reporting(0);
        $filename = $_FILES["uploadfile"]["name"];
        $tempname= $_FILES["uploadfile"]["tmp_name"];
        $lr = $_POST["para-lr"];
        $tb = $_POST["para-tb"];
        $blr = $_POST["blr"];
        $blrPX=$blr.'px';
        $folder = 'photos/'.$filename;
        $url = $folder;
        move_uploaded_file($tempname,$folder);
        echo "
        <h1>Your New Blur Image</h1><hr>
        <br><center>
        <div class='nameMe'>
        <div class='can'><center>
        <br><br><img src='$folder' class='blrMe' height='$tb' width='$lr'/></center>
        </div>
        </div></center>
        ";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result on Blur</title>
    <style>
        * {
            box-sizing: border-box;
            }
            h1{
            text-align: center;
            color: whitesmoke;
            text-shadow: 03px 02px 04px chocolate;
        }
        body{
            background-color: bisque;
            font-family: ubuntu;
            font-size: medium;
            color: black;
            padding: 05px;
            border-style: dotted;
            border-width: 01px;
            overflow: hidden;
        }
        
          .nameMe{
            padding: 04px;
            margin: 04px;
            width: 450px;
            height: 450px; 
            position: relative;
          }
        
        .can::before{
            content: '';
            background-image: url({{ $url; }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
            filter: blur( {{ $blrPX; }});
            -webkit-filter: blur({{ $blrPX; }});  
            position:absolute;
            top:0px;
            right: 0px;
            bottom: 0px;
            left: 0px; 
                        
        }
       
        .blrMe{
            position:absolute;
            border-color: white;
            border-style: solid;
            border-width: 01px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -45%);
        }
       
    </style>
</head>
<body>
    
</body>
</html>