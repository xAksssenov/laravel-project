@extends('layout')
@section('content')
    <h3>
        Contact
    </h3>
    <p>
        Name: {{$contact['name']}}
    </p>
    <p>
        Address: {{$contact['address']}}
    </p>
    <p>
        Phone: {{$contact['phone']}}
    </p>
    <p>
        Email: {{$contact['email']}}
    </p>
@endsection