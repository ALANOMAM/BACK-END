@extends('layouts/app')

@section('content')

<main>

    <div class="container">
        

        <div class="pasta-type">
            <h2>Le lunghe</h2>
            <div id="pasta-list" class="">
                @foreach($pastaLunga as $pastaItem)
                <a href="{{route('prodotto')}}" class="pasta">
                    <img class="pasta-img" src="{{$pastaItem['src']}}" alt="">
                    <div class="pasta-title">{{ $pastaItem['titolo'] }}</div>
                </a>
                @endforeach
    
            </div>
        </div>

        <div class="pasta-type">
            <h2>Le corte</h2>
            <div id="pasta-list" class="">
                @foreach($pastaCorta as $pastaItem)
                <div class="pasta">
                    <img class="pasta-img" src="{{$pastaItem['src']}}" alt="">
                    <div class="pasta-title">{{ $pastaItem['titolo'] }}</div>
                </div>
                @endforeach
    
            </div>
        </div>

        <div class="pasta-type">
            <h2>Le cortissime</h2>
            <div id="pasta-list" class="">
                @foreach($pastaCortissima as $pastaItem)
                <div class="pasta">
                    <img class="pasta-img" src="{{$pastaItem['src']}}" alt="">
                    <div class="pasta-title">{{ $pastaItem['titolo'] }}</div>
                </div>
                @endforeach
    
            </div>
        </div>
        

    </div>


</main>

@endsection