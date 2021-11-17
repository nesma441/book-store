
@extends('layout')

<link href="{{asset('css/login.css')}}" rel="stylesheet">

@section('title')
 Login
@endsection


@section('body')

@section('nav')
@endsection
 @include('error')

 <div class="login-form text-center mb-2 bg-light">
 <form action="{{url('login')}}" method="post">
     @csrf
     <h2 class="text-center text-dark">Login</h2>
            <div class="form-group">
     <input type="text" name="email" class="form-control mb-2">
            </div>


            <div class="form-group">
     <input type="password" name="password" class="form-control mb-2" >
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block ">Log in</button>
            </div>
            <a href="{{url('/register')}}" class="text-dark mb-2 "> I don't have account! Sign Up</a>
        </form>

 </form>
</div>
@endsection
