@extends('layout')
@section('content')
<form action="/article" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Date public</label>
        <input name="datePublic" type="date" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label> 
        <input name="title" type="text" class="form-control" id="" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Short description</label>
        <input name="shortDesc" type="text" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="desc" type="text" class="form-control" id=""></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection