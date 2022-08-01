<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL('/images/t.png')}}" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>{{ $data[0]->name }} FeedbackDetails</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .container-one{
            width: fit-content;
            margin: 03px;
            padding: 10px;
            background-color: papayawhip;
        }
        button{
            font-size: small;
            border-style: none;
            box-shadow: 02px 02px 02px #2E4053;
            margin-top: 05px;
        }

        button a{
            border-style: none;
            text-decoration: none;
            margin-top: 05px;
            color: black;
        }
         
        button a:hover{           
            color: whitesmoke;
            text-decoration: none;
        }        
        .del-btn:hover{
            background-color: red;
            color: whitesmoke;
        }
        button:hover{
            background-color: #2E4053;
            color: whitesmoke;
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
        
      
    </style>
</head>
<body>
            @php
                $QR='Name: '.$data[0]->name.', Email:'.$data[0]->email.', Subject:'.$data[0]->subject.', Message:'.$data[0]->msg.'. Thank You for scanning.';
            @endphp  
        
        
        <span class="container">
            <h4>Welcome <i style="color: red;">{{ $information->name }}</i> to dashboard <a class="logout" href="{{ URL('logout') }}">logout</a></h4>                
        </span>
<center>
        <div class="container-one">
            <h1 align="center">Message Information</h1>
            <hr>
            <table class="table table-bordered table-hover" align="center">
                <thead style="background-color:gainsboro;">
                <tr>                    
                    <th style="width: 200px;">Name</th>
                    <th>Email</th> 
                    <th>Date</th>
                    <th style="text-align:center;">QR CODE</th>
                </tr>
            </thead>
            <tbody>                    
                    @foreach ($data as $item)
                <tr>                    
                    <td style="text-transform: uppercase;font-weight:bold;text-align:center;color:coral;text-shadow:02px 02px 02px gainsboro;">{{$item->name}}</td>
                    <td style="font-size: small;line-height:40px;">{{ $item->email }}</td>
                    <td style="font-size: small;line-height:40px;">{{ (new \DateTime($item->created_at))->format("Y/m/d") }}</td>
                    <td rowspan="3" align="center"><img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(140)->color(46,64,83)->generate($QR)) }} "></td>
                </tr>
                
                <tr>
                    <th style="background-color:gainsboro;">Action</th>
                    <td align="center" colspan="2"><a href="/pdf/{{$item->id}}"><button>PDF</button></a> <a href="/delete/{{$item->id}}" ><button class="del-btn">Delete</button></a> <a href="/emailreply/{{ $item->id }}"><button>Reply</button></a>  <a href="{{  URL::to('panel.dashboard') }}"><button> Dashboard</button></a> <a href="/excel/{{$item->id}}"><button> Excel</button></a> </td>  
                                     
                </tr>

                <tr style="height: 50px;">
                    <th style="background-color:gainsboro;">Subject</th>
                    <td colspan="2" style="font-size: small;">{{ $item->subject }}</td>                    
                </tr>

                <tr>
                    <th style="background-color:gainsboro;">Message</th>
                    <td colspan="3" style="font-size: small;">{{ $item->msg }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <h6 style="font-size: x-small;font-weight:normal;">https://www.thisisudaykant.com | tiuk&trade;</h6>
        </div>
</center>
</body>
</html>