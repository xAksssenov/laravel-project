@extends('layout')
@section('content')
<form action="/article/{{$article->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputPassword1">Date public</label>
        <input name="datePublic" type="date" class="form-control" id="" value="{{$article->datePublic}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label> 
        <input name="title" type="text" class="form-control" id="" aria-describedby="emailHelp" value="{{$article->title}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Short description</label>
        <input name="shortDesc" type="text" class="form-control" id="" value="{{$article->shortDesc}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="desc" type="text" class="form-control" id="">{{$article->desc}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection