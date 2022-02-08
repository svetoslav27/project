@extends('layouts.app')
@section('content')
<h1 style="text-align: center">Genres</h1>
<section class="posts">
@foreach ($allGenres as $genre)
    <article>
        <header>
            <h2>Genre Name:</h2>
            <em><p style="text-align: center; font-size: 24px;">{{$genre->name}}</p></em>
        </header>
    </article>
    @endforeach
</section>

@endsection