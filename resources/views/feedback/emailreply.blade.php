<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL('/images/t.png')}}" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>{{ $data[0]->name }} ReplyMail</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .container-one{
            width: 600px;
            margin: 03px;
            padding: 10px;
            background-color: papayawhip;
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
        button{
            font-size: small;
            border-style: none;
            box-shadow: 02px 02px 02px #2E4053;
            margin-top: 05px;
            width: 100px;
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
        button:hover{
            background-color: #2E4053;
            color: whitesmoke;
        }
        .message-one{
            width: 100%;
            background-color: black;
            color: green;
            border-style: none;
            outline: none;
            padding: 04px;
        }
        .msgLabel{
            background-color: black;
            color: whitesmoke;
            padding: 03px;
            border-top-left-radius: 04px;
            border-top-right-radius: 04px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: normal;
        }     
    </style>
</head>
<body>
           
        <span class="container">
            <h4>Welcome <i style="color: red;">{{ $information->name }}</i> to dashboard <a class="logout" href="{{ URL('logout') }}">logout</a></h4>                
        </span>
<center>
        <div class="container-one">
            <h1 align="center">Reply Message</h1>
            <hr>
            <table class="table table-bordered table-hover" align="center">
                <h3><p style="float: left;">To</p></h3>
                <thead style="background-color:gainsboro;">
                <tr>                    
                    <th style="width: 200px;">To Name</th>
                    <th>To Email</th> 
                    <th>Message Date</th>
                    <th>Selected Subject</th>
                </tr>
            </thead>
            <tbody>                    
                <tr style="font-size:small;">
                    <td>
                        <p>{{ $data[0]->name }}</p>  
                    </td>
                    <td>
                        <p>{{ $data[0]->email }}</p>
                    </td>
                    <td>
                        <p>{{ $data[0]->created_at }}</p>
                    </td>
                    <td>
                        <p>{{ $data[0]->subject }}</p>
                    </td>
                </tr>
                <thead style="background-color:gainsboro;">
                    <td colspan="4">
                        <p>
                            Message
                        </p>
                    </td> 
                </thead>
                </center>              
                </tr>
                <tr>
                        <td colspan="4">
                            <p>
                                {{ $data[0]->msg }}
                            </p>
                        </td>               
                </tr>
                
            </tbody>
            </table>
            <hr>
            <table class="table table-bordered table-hover" align="center">
                <h3><p style="float: left;">From</p></h3>
                <thead style="background-color:gainsboro;">
                <tr>                    
                    <th style="width: 200px;">From Name</th>
                    <th>From Email</th> 
                    <th>Reply Message Date</th>
                </tr>
            </thead>
            <tbody>                    
                <tr style="font-size:small;">
                    <td>
                        <p>thisisudaykant</p>  
                    </td>
                    <td>
                        <p>abhithaks2@gmail.com</p>
                    </td>
                    <td>
                        <p>{{ date('Y/m/d') }}</p>
                    </td>
                </tr>
                <tr>
                    <form action="/FeedbackController/{{ $data[0]->id }}" method="post">
                        @csrf
                            <th colspan="4" style="background-color:gainsboro;"><label for="msg" class="msgLabel">Reply Message</label><br>
                                <textarea name="msgReplyData" cols="30" rows="5" class="message-one" required></textarea>
                            </th>                  
                </tr>

                <tr>
                    <th colspan="4" class="th">
                    <center>                        
                        <button type="submit"> Send </button></form>   <a href="/show/{{ $data[0]->id }}"><button> Back</button></a>
                    </center>
                    </th>
                    
                
                </tr>
            </tbody>
            </table>
            <hr>
            <h6 style="font-size: x-small;font-weight:normal;">https://www.thisisudaykant.com | tiuk&trade;</h6>
        </div>
</center>
</body>
</html>