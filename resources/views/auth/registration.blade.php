<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="icon" href="{{URL('/images/t.png')}}" type="image/icon type">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        .container{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #2E4053;
            color: whitesmoke;
        }
        .container h4{
            font-weight: bold;
        }
        .form-group{
            text-align: left;
            width: 400px;
        }
        .form-group input[type="text"],[type="email"],input[type="password"]{
            border-style: none;
            outline: none;
            border-radius: 0px;
            margin: 04px;
        }
        .form-group button[type="submit"]{
            width: 100%;
            border-style: none;
            outline: none;
            border-radius: 0px;
            margin: 04px;
        }
        .link-a{
            float: right;
            text-decoration: none;
            color: whitesmoke;
        }
        .link-a:hover{
            text-shadow: 02px 02px 02px black;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <center>
        <div class="row">
            <div  style="margin-top:20px;">
                <h4><img src="{{URL('/images/t.png')}}" height="30" width="20"> | Registration for tiuk System</h4>
                <hr>
                <form action="{{ route('register-user') }}" method="POST">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-denger">{{Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{ old('name') }}" autocomplete="off" autofocus="off">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" value="{{ old('email') }}" autocomplete="off" autofocus="off">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value="" autocomplete="off" autofocus="off">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button><br>
                        <a href="auth.login" class="link-a">&#183;Already register? Login here</a>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <h6 style="font-size: x-small;font-weight:normal;padding-top:0px;padding-bottom: 10px;">https://www.thisisudaykant.com | tiuk&trade;</h6>
    </center>
    </div>


</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>