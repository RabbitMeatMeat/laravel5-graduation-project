@extends('layout')

@section('content')

    <h1>Person:</h1>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>


@stop