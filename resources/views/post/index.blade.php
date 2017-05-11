@extends('app')

@section('content')

    @foreach($profiles as $profile)
        <article>
            <h2>{{ $profiles->name }}</h2>
        </article>
    @endforeach
@stop