<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                @guest()

                    <li class="nav-item">
                        <a class="nav-link" href="/login">Sign in</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/">Sign Up</a>
                    </li>
                @endguest

                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="/user">Profile</a>
                    </li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        @method('post')
                        <input type="submit" value="Logout">
                    </form>
                @endauth


            </ul>
        </div>
    </div>
</nav>
