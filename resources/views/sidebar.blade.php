<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/createpage.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
<body>
<nav>
    <ul>
        <li>
            <a href="/" class="logo">
                <img src="{{asset('assets/img/wikrama.png')}}"  alt=''>
                <span class="nav-item">Pinjaman</span>
            </a>
        </li>
        <li>
            <li><a href="{{route('take.create')}}">
                <i  class=" fas fa-solid fa-user"></i>
                <span class="nav-item">Daftar</span></a></li>
        </li>
        <li><a href="/take/dashboard" >
            <i  class=" fas fa-solid fa-chart-bar"></i>
            <span class="nav-item">Dashboard</span></a></li>
    </li>
        <li><a href="{{route('take.data')}}">
            <i  class="fas fa-window-maximize"></i>
            <span class="nav-item">Data</span></a></li>
    </li> 
    <li><a href="{{route('take.index')}}" class="home">
        <i class="fas fa-home"></i>
        <span class="nav-item">return</span></a></li>
</li>

    
    </ul>
</nav>

    @yield('content')
</body>
</html>