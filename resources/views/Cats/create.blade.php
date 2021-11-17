@extends ('layout')

@section ('title')
All Categiores
@endsection

@section('body')

    @include('error')
    <div class="w-50 bg-light mt-4">
        <h3> Create Category</h3>
    <form action="{{url('cats/store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <input type="text" placeholder="name" name="name" class="form-control">
        <br>
        <input type="text" placeholder="desc.." name="desc" class="form-control">
        <br>
        <input type="file" name="img" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary"> Add</button>



    </form>
</div>
    @endsection
