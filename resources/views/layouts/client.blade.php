@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>this is clients dashboard</h1>
        @foreach ($clients as $client)
            <h5>{{ $client->name }}</h5>
        @endforeach
    </div>


@stop
