@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>PAGINA SHOW</h1>

 <!--contenitore immagine e info start-->   
  <div class="post-info d-flex gap-4">
    <img src="{{$post->Immagine_di_copertina}}" alt="">

    <ul class="list-group">
      <li class="list-group-item"><span><strong>Nome File : </strong></span>{{$post->Nome}}</li>
      <li class="list-group-item"><span><strong>Descrizione File : </strong></span>{{$post->Descrizione}}</li>
      <li class="list-group-item"><span><strong>Tecnologie Utilizzate : </strong></span>{{$post->Tecnologie_utilizzate}}</li>
      <li class="list-group-item"><span><strong>Link GitHub : </strong></span><a href="{{$post->Link_repo_GitHub}}">{{$post->Link_repo_GitHub}}</a></li>
    </ul>
  </div>
<!--contenitore immagine e info end-->
      
 
    <!--contenitore pulsanti start-->
    <div class="py-5 d-flex gap-4">
      <!--pulsante di modifica-->
     <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
      
     <!--il moi pulsante per l'eliminazione deve essere dentro un mini form-->
    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
   <!--serve questo commando -->
   @csrf
   <!--serve questo commando -->
   @method("DELETE")
   <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Elimina</button>
  </form>
   </div>
<!--contenitore pulsanti end-->


</div>
@endsection
