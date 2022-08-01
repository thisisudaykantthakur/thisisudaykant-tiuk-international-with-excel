<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>All Feedback</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .container-one{
            width: 450px;
            margin: 03px;
            padding: 10px;
        }
        button{
            border-style: none;
            box-shadow: 02px 02px 02px #2E4053;
        }
        button a{
            border-style: none;
            text-decoration: none;
        }
        .del-btn:hover{
            background-color: red;
            color: whitesmoke;
        }
        .blk-btn:hover{
            background-color: black;
            color: whitesmoke;
        }
        button a:hover{           
            color: whitesmoke;
        }
        button:hover{
            background-color: #2E4053;
            color: whitesmoke;
        }
        .w-5{
            display:none;
        }
        .btn-page{
            font-size: small;
            padding: 04px;
            background-color: #2E4053;
        }
        .btn-page nav{
            display: inline;
            padding: 04px;
        }
        .btn-page nav p{
            padding-top: 10px;
        }
        .btn-page nav div span{
            width: 100%;
            height: 50px;
        }
    </style>
</head>
<body>
        <h1 align="center">All Message</h1>
        @php
            $count=0;
        @endphp
        <center>
        <div class="container-one">
            <table class="table table-bordered table-hover" align="center">
                <thead style="background-color:gainsboro;">
                <tr>
                    <th style="width: 80px;text-align: center;">No.</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>     
                @foreach ($data as $item)
                <tr>
                    <td style="background-color:gainsboro;text-align:center;width: 80px;">{{ $count=$count+1 }}</td>
                    <td style="text-transform: uppercase;color:navy;">{{$item->name}}</td>
                    <td align="center" style="background-color:wheat;"><a href="/show/{{$item->id}}"><button>Show</button></a> <a href="/delete/{{$item->id}}"><button class="del-btn"> Delete</button></a> </td>
                </tr>
                @endforeach
                    <tr>
                        <td colspan="3" class="btn-page"><center>{{ $data->links() }}</center></td>
                        {{-- 'pagination::bootstrap-4' --}}
                    </tr>
                    <tr>
                        <td colspan="3" align="center" style="background-color:gainsboro;cursor: pointer;font-weight:bold;"><h6 style="font-size: x-small;font-weight:normal;">https://www.thisisudaykant.com | tiuk&trade;</h6></td>
                    </tr>
               
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>