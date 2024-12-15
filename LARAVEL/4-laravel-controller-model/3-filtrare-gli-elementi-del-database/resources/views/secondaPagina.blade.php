@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>CONTENUTI SECONDA PAGINA</h1>
     <h2>Qui metto anche i films filtrati</h2>

    <div>
        <span> 1-nella tabella o model Movie filtro prendendo solo il film con id 2 : </span> {{$movieElement->title}} 
    </div>
    
    <br>

   <span>2-nella tabella o model Movie filtro prendendo solo i film con id maggiori o uguali a tre : </span>
   <ul class="">
   @foreach($movieElements as $movie) 
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