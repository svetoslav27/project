@extends('layouts.app')

@section('content')

<form action="/search" method="GET" role="search">
    <input class="input" type="text" name="query" placeholder="Search" id="query"> 
            <button type="submit" title="Find Movie" style="margin:1rem 45%;">
                <span>Find Now</span>
            </button>
</form>
<section class="posts">
    @foreach ($allMovies as $movie)
        <article>
            <header>
                <span class="date">{{$movie->releaseDate}}</span>
                <h2>{{$movie->name}}</h2>
            </header>
            <a href="#" class="image fit"><img src="{{$movie->image}}" alt="" /></a>
             <p>Genres: <em>{{ $movie->genres[0]->name}}</em></p>
            <ul class="actions special">
                <li><a href="https://yts-subs.com/" class="button">Download Subtitles</a></li>
            </ul>
        </article>
    @endforeach
</section>
@endsection