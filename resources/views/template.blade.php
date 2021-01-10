<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <script src="{{ asset('js/navbar.js') }}" type="text/javascript"></script>


    @yield('style')
    @yield('javascript')
</head>
    
<body>
<center><img src="{{ url('/img/header.png') }}" width = 100%><center>
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">PWEB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">WEB</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/pegawai')}}">Data Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/absen')}}">Absen Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/mobil')}}">Data Mobil</a>
                </li>
            </ul>
        </div>
    </nav>   
<div class="container">
    <div class="card">
        <div class="card-body">
            <h2  style="color:black;" class="text-center">@yield('judulhalaman')</h2>
            

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
