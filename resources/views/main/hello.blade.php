@extends('layout')
@section('content')
<table class="table">
    <thead> <tr> <th scope="col">date</th>
        <th scope="col">name</th>
        <th scope="col">shortDesc</th>
        <th scope="col">desc</th>
        <th scope="col">image</th>
        </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article['date']}}</th>
                <td>{{$article['name']}}</td>
                <td>{{$article['shortDesc']}}</td>
                <td>{{$article['desc']}}</td>
                <td><a href="/galery/{{$article['full_image']}}"><img src="{{URL::asset('/images/'.$article['preview_image'])}}" alt="" height="100" width="100"></a></td>
            </tr>
            @endforeach
        </tbody>
</table>
@endsection