@extends ('layout')

@section ('title')
All Categiores
@endsection

@section('css-section')
@endsection

@section('body')
@section('nav')
@endsection
<h1>All users</h1>
@foreach ($users as $user)
<h4>{{$user->name}}</h4>
@endforeach
@endsection
