<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
           <link href="{{asset('css/style.css')}}" rel="stylesheet">

@yield('css-section')
</head>
<body >
    @yield('nav')
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary  ">
        <div class="container">
            <a class="navbar-brand" href="{{url('/cats')}}">Book Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto px-5">
                    @guest
                    <a class="nav-link active" href="{{url('/register')}}">Register</a>
                    <a class="nav-link active" href="{{url('/login')}}">Login </a>
                    @endguest
                    @auth
             <a class="nav-link active" href="{{url('myacc')}}">Hi,{{Auth::user()->name}}</a>
             <a class="nav-link active" href="{{url('/logout')}}">logout</a>
             @endauth
            
            </div>
            </div>
        </div>
    </nav>
</header>
    <div class="container ">
          @yield('body')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('js-section')

</body>
</html>
