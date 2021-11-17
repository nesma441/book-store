@extends ('layout')

@section ('title')
All Categiores
@endsection

@section('body')
   <h3>Category</h3>

   <h4>{{$cat->name}}</h4>
   <h4>{{$cat->id}}</h4>
   <h2>{{$books}}</h2>
{{-- <h2>{{Book::where('cat_id',$cat->id)}}</h2> --}}
    {{-- @foreach($books as $book)
    <a href="{{url('books',$book->id)}}">
        <h3>{{$book->id}}-{{$book->name}}</h3>

    </a>
    <p>{{$book->desc}}</p>
    <img src='{{asset("uploads/$book->img")}}' />
    <a href="{{url('books/edit',$book->id)}}"> Edit</a>
    <a href="{{url('books/delete',$book->id)}}"> Delete</a>
    @endforeach --}}


   <a href="{{url('cats')}}">back</a>
   @endsection
