<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/stylist.css')}}" rel="stylesheet" type="text/css">
    
    
    

    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <title>Pinjaman</title>
</head>
<body>
    <header>
    
        <a   href="/todo/" class="logo">SMK<span>Wikrama</span></a>
        <div class="bx-menu"  id="menu-icon"></div>
    
        <ul class="navlist">
            <li><a id="home" href="#">Home</a></li>
            <li><a  href="#about">about</a></li>
            <li><a  href="#contact">contact</a></li>
            <li><a  href="#other">Laptop</a></li>
            <li><a  href="#rules">Rules</a></li>

        </ul>
       
        <div> 
            
            
            <p style="color: white"> <i class="fas fa-user"></i> ({{ Auth::user()->username}})    <a class="logout"  href="{{route('logout')}}"> logout</a><p>

        </div> 
    </header> 
    @yield('content')
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>
</body>
</html>