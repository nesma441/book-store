@extends ('layout')

@section ('title')
All Categiores
@endsection

@section('body')
  
     @foreach($cats as $cat)
       <a href="{{url('cats',$cat->id)}}">
           <h3>{{$cat->id}}-{{$cat->name}}</h3>
       </a>
       
         <p>{{$cat->desc}}</p>
         <img src='{{asset("uploads/$cat->img")}}'/>
         <a href="{{url('cats/edit',$cat->id)}}"> Edit</a>
         <a href="{{url('cats/delete',$cat->id)}}"> Delete</a>
     @endforeach
     @endsection