

<link href="{{asset('assets/css/login.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<section>
    <div class="imgBx">
        <img src="{{asset('assets/img/bg_wikrama.jpg')}}" alt="">
    </div>
    <div class="contentBx">
        <div class="formBx">
            <h2>Login</h2>
            <form action="{{route('login.auth')}}" method="post">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
            <div class="inputBx">
                <span>email</span>
                <input type="email" name="email">
                </div>
                <div class="inputBx">
                    <span>password</span>
                    <input type="text" name="password">
                    </div>
                    <div class="inputBx">
                        <input type="submit" name="submit" value="Login" />
                        </div>
                        <div class="inputBx">
                            <p>dont have an account? <a href="/register">sign up</a></p>
                            </div>
            </form>
    </div>