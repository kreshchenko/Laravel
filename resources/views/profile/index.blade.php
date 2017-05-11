@extends('app')

@section('content')

    @foreach($profiles as $profile)
        <article>
            <h2>{{ $profile->name }} {{ $profile->fathername }} {{ $profile->surname }}</h2>
            <h3>{{ $profile->date }} | {{ $profile->email }} | {{ $profile->telephone }}</h3>
            <p>{{ $profile->other }}</p>
        </article>
    @endforeach
@stop