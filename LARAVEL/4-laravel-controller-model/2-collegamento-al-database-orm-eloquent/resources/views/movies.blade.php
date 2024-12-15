
@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>CONTENUTI MOVIES</h1>

    <ul class="">
         <!--passo attraverso tutti gli elementi della mia tabella "$moviesTable" impotata dal database -->
        @foreach($moviesTable as $movie) 
            <li>
                <span>Titolo : </span> {{$movie->title}}
                <p>
                  <span>Titolo originale : </span>  {{$movie->original_title}}
                </p>
            </li>
        @endforeach

    </ul>
</div>
@endsection