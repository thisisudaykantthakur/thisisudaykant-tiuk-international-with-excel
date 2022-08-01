<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            margin:0px;
            padding:0px;
            position: absolute;
            left:40%;
            top:20%;
        }
        ul li{
            display:block;
            width: 240px;
            height: 280px;
            background: #FFF;
            position: absolute;
            box-shadow: 10px 10px 20px rgba(0,0,0,0.5);
            top: 0;
            left: 0;
            transform-origin: bottom center;
            transform: rotate(10%) skew(-30deg);
            transition: .5s;
        }
        ul li span{
            display: block;
            color: #CCC;
            text-align: center;
            font-size: 2em;
            line-height: 280px;
        }
        ul li:nth-child(1){
            transform: rotate(10deg)skew(-30deg)translate(15px,15px);
        }
        ul li:nth-child(2){
            transform: rotate(10deg)skew(-30deg)translate(0px,0px);
        }
        ul li:nth-child(3){
            transform: rotate(10deg)skew(-30deg)translate(-15px,-15px);
        }
        ul:hover li:nth-child(1){
            transform: rotate(5deg)skew(0deg)translate(200px,0);
        }
        ul:hover li:nth-child(2){
            transform: rotate(0deg)skew(0deg)translate(0,0);
        }
        ul:hover li:nth-child(3){
            transform: rotate(-5deg)skew(0deg)translate(-200px,0);
        }
        ul li::before{
            content: '';
            position: absolute;
            width: 50%;
            height: 10px;
            left: 0;
            bottom: 0;
            background: #262626;
            transition: .5s;
        }
        ul li:hover::before{
            left: 50%;
        }
        ul li:hover::after{
            right: 50%;
        }
       
    </style>
</head>
<body>
  <ul>
      <li><span><img src="{{URL('/images/dp.jpg')}}" alt="" height="200" width="200"></span></li>
      <li><span><img src="{{URL('/images/bg-tiuk.jpg')}}" alt="" height="200" width="200"></span></li>
      <li><span><img src="{{URL('/images/ukt.jpg')}}" alt="" height="200" width="200"></span></li>
  </ul>
</body>
</html>