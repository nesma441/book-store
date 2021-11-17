@if($errors->any()) 
 <!-- btrg3li fadi wal l2  -->
<div class="alert alert-danger">

<ul>
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
</ul>
</div>

@endif