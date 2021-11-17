@extends ('layout')

@section ('title')
search
@endsection

@section('body')

<form action="{{url('search/cat')}}" method="get">
<input placeholder="Search Category ..." type="text" name="keyword" value=" {{$keyword}}">
<button class="btn btn-danger">Search</button>
<br>
<a type="button" href="{{url('cats')}}" >back to all categories </a>
</form>
@foreach ($cats as $cat )
<h2>{{$cat->name}}</h2>
<div >
    <img  src='{{ asset("uploads/$cat->img") }}' />
</div>
<p>{{$cat->desc}}</p>
  @endforeach


    </form>

    @endsection
