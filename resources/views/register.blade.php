@extends('layout')
<link href="{{asset('css/login.css')}}" rel="stylesheet">


@section('title')
 Login
@endsection


@section('body')
 @include('error')
<div class="bg-light w-50 text-center">
    <h3 class="text-center mt-3">Register </h3>
    <form  action="{{url('register')}}" method="post">
     @csrf
 <input  class="form-control  " type="text" placeholder="name" name="name" >
 <br>
 <input  class="form-control " type="text" name="email"  placeholder="email">
 <br>
 <input   class="form-control " type="password" name="password"  placeholder="password" >
 <br>
  <input  class="form-control " type="password"  placeholder="Confirm password" name="password_confirmation" id="">
 <br>
 <button  class="btn btn-danger btn-block txt-center " type="submit">Register</button>
</form>

</div>



@endsection
