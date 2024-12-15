@extends('layouts/app')


@section('titolo')
Homepage della mia app di Laravel
@endsection


{{-- devo dire a Laravel che dentro questa pagina c'è una sezione di codice,
    le do un nome
    e poi dal layout indico dove quella sezione deve essere inserita
--}}
@section('content')
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla labore harum magnam magni nisi vel, mollitia dolor illo exercitationem libero amet, sit, laborum facilis reiciendis omnis voluptatum impedit. Repellendus, omnis!
</p>
@endsection


@section('sotto-footer')
<div>
    Parte di codice sotto il footer
    
</div>
@endsection