@extends ('layout')

@section ('title')
All Categiores
@endsection

@section('body')
    <form action="{{url('cats/update',$cat->id)}}" method="post" enctype="multipartform-data">
    @csrf
        <input type="text" name="name" value="{{$cat->name}}">
        <br>
        <input type="text" name="desc" value="{{$cat->desc}}">
        <br>
        <input type="file" name="img">
        <br>
        <button type="submit"> Add</button>
        
   

    </form>
    @endsection