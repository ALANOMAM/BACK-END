@extends('layouts.app')

@section('content')

<div id="single-product">

    <div class="container">
        <header>
            <h1>
                {{$singlePasta['titolo']}}
            </h1>
    
            <img src="{{$singlePasta['src']}}" alt="">
        </header>

        <p>
            {{$singlePasta['descrizione']}}
        </p>
    </div>

</div>

@endsection