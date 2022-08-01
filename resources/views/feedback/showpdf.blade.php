<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>All Feedback</title>
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
            
    </style>
</head>
<body>
            @php
                $QR='Name: '.$data[0]->name.', Email:'.$data[0]->email.', Subject:'.$data[0]->subject.', Message:'.$data[0]->msg.'. Thank You for scanning.';
            @endphp  
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
            
                <tr style="height: 50px;">
                    <th style="background-color:gainsboro;">Subject</th>
                    <td colspan="2" style="font-size: small;">{{ $item->subject }}</td>                    
                </tr>

                <tr>
                    <th style="background-color:gainsboro;">Message</th>
                    <td colspan="2" style="font-size: small; width:120px;">{{ $item->msg }}</td>
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