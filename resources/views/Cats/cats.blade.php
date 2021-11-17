<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@extends ('layout')

@section('title')
    All Categiores
@endsection

@section('css-section')
@endsection

@section('body')
@section('nav')
@endsection
{{-- <h1>All Categiores</h1>
@if (request()->session()->has('loggedMessage'))
    <div class="alert alert-success">
        <p>
            {{ request()->session()->get('loggedMessage') }}
        </p>
    </div>
@endif --}}
{{-- form execute this route "search/cat" by executing search method in controller --}}
{{-- <form action="{{ url('search/cat') }}" method="get">
    <input placeholder="Search Category ..." type="text" name="keyword">
    <button class="btn-danger" type="submit">Search</button>
</form>
<br>
<a href="{{ url('create/cat') }}"> add new category </a> --}}

{{-- @foreach ($cats as $cat)
    <a href="{{ url('cats', $cat->id) }}">
        <h3>{{ $cat->id }}-{{ $cat->name }}</h3>
    </a>
    <p>{{ $cat->desc }}</p>
    <img src='{{ asset("uploads/$cat->img") }}' />
    <a href="{{ url('cats/edit', $cat->id) }}"> Edit</a>
    <a href="{{ url('cats/delete', $cat->id) }}"> Delete</a>
@endforeach --}}
{{-- {{ $cats->links() }} --}}
{{-- {{$cats->links('pagination::bootstrap-5')}} --}}


<section id="services">
    <div class="row">
        <div class="head text-center col-sm-12 ">
            @if (request()->session()->has('loggedMessage'))
                <div class="alert alert-success">
                    <p>
                        {{ request()->session()->get('loggedMessage') }}
                    </p>
                </div>
            @endif
            <form action="{{ url('search/cat') }}" method="get">
                <input class="form-control mt-3" placeholder="Search Category ..." type="text" name="keyword">
                <button class="btn btn-danger mt-2" type="submit">Search</button>
            </form>
            <br>
            <h1>All Categiores</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit </p>
            <a type="button" class="btn btn-outline-info" href="{{ url('create/cat') }}"> add new category </a>

        </div>
    </div>
    <div class="container">


        <div class="row">

            @foreach ($cats as $cat)
                <div class="item col-xl-4 col-l-4 col-md-6 col-sm-12 text-center my-3  ">
                    <div class=" hambozo">
                        <div>
                            <img src='{{ asset("uploads/$cat->img") }}' />
                        </div>
                        <div class="itemcontent text-center py-2">
                            <a class="text-danger" href="{{ url('books', $cat->id) }}">
                                <h3>{{ $cat->name }}</h3>
                            </a>
                            <p>{{ $cat->desc }}</p>

                            <a type="button" class="btn btn-primary" href="{{ url('books', $cat->id) }}"> Show</a>

                            @auth

                                <a type="button" class="btn btn-warning" href="{{ url('cats/edit', $cat->id) }}">
                                    Edit</a>
                                <a type="button" class="btn btn-danger" href="{{ url('cats/delete', $cat->id) }}">
                                    Delete</a>

                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $cats->links() }}

        </div>

    </div>
</section>
@endsection
