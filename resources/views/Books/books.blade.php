@extends ('layout')

@section ('title')
All mobiles
@endsection

@section('css-section')
@endsection

@section('body')

@section('nav')
@endsection

<h1>All {{$cat->name}}</h1>


{{-- <a href="{{ url('book/create',$cat->id) }}"> add new book </a> --}}
@foreach($books as $book)
<a href="{{url('books',$book->id)}}">
    <h3>{{$book->id}}-{{$book->name}}</h3>

</a>
<p>{{$book->desc}}</p>
<img src='{{asset("uploads/$book->img")}}' />
<a href="{{url('books/edit',$book->id)}}"> Edit</a>
<a href="{{url('books/delete',$book->id)}}"> Delete</a>
@endforeach


@endsection
