<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .container{
            text-align: center;
            justify-content: center;
        }
        h1{
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin-bottom: 50px;
            font-weight: bold;
        }
        .detail li {
            list-style-type: none;
            font-size: 1.25em;
            margin-bottom: 10px;
        }
        .img{
            display: inline-block;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #4a5568;
            margin-bottom: 20px;
        }
        .detail li:nth-child(2){
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">PositronX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">All User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Back</a>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</nav>
<div class="container">
    @if(Auth::check())
        <h1>THÔNG TIN USERS</h1>
        <ul class="detail">
            <li><div class="img"></div></li>
            <li>{{Auth::user()->name}}</li>
            <li>Email: {{Auth::user()->email}}</li>
            <li>Ngày Tạo: {{Auth::user()->created_at}}</li>
            <li>Số Điện Thoại: {{Auth::user()->phone}}</li>
            <li>Tuổi: {{Auth::user()->Age}}</li>
        </ul>
    @else
    @endif
</div>
@yield('content')
</body>
</html>
