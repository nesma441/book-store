@extends ('layout')

@section ('title')
All book
@endsection

@section('body')

    @include('error')
    <div class="w-50 bg-light mt-4">
        <h3> add book </h3>
    <form action="{{url('book/store')}}" method="post" enctype="multipart/form-data">
    @csrf

        <input type="text" placeholder="name" name="name" class="form-control">
        <br>
        <input type="text" placeholder="desc.." name="desc" class="form-control">

        <input type="text" placeholder="price" name="price" class="form-control">

        <input type="text" placeholder="cat_id" name="cat_id"  value="{{$cat_id}}"   class="form-control">
        <br>
        <input type="file" name="img" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary"> Add</button>



    </form>
</div>
    @endsection
