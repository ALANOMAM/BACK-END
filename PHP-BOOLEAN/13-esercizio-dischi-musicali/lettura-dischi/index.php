<!--
Descrizione:
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
-->


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--style-->
    <link rel="stylesheet" href="style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body data-bs-theme="dark">

    

    <div id="app">

<!-- As a heading -->
<nav class="navbar bg-body-tertiary p-3">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">DISCHI</span>
  </div>
</nav>

        <div class="container-fluid">

       

         <ul class="d-flex  flex-wrap   remove-dots">
            <li v-for="(disco , index) in listaDischi" class="one-third-space" @click="selctAlbum(index)">
            <div class="img-and-descriptions d-flex flex-column align-items-center content-gap">
            <div class="box-width">   
            <img  class="poster-img":src="disco.poster" alt="" class="">
              </div>
              <div class="d-flex flex-column align-items-center content-gap">
                <span> <strong>{{disco.title}}</strong></span>
              </div>
             </div>   
            </li>
         </ul>
    
       <!--parte legata al display start-->  
       
       <!--COME MOSTRO IL DISPLAY, si vede solo se l'array che contiene l'oggetto del mio elemento selezionato
      ha un titolo non undifined, il che è automatico dal momento che l'oggetto ha un titolo -->
         <div  class="display-container" v-if="elementoDisplay.title!= undefined">

              <div class="album">
           
              <div class="box2-width">
              <img class="display-img" :src="elementoDisplay.poster" alt="">
              </div>

              <div class="display-img-description">
              <span><strong>{{elementoDisplay.title}}</strong></span>
              <span>{{elementoDisplay.author}}</span>
              <span><strong>{{elementoDisplay.year}}</strong></span>

              <!--COME CHIUDO IL DISPLAY, al click vuoto l'array che contiene l'oggetto del mio elemento selezionato-->
              <button id="close-button" @click="elementoDisplay = []">&#9587; close</button>
              </div>

              
              </div>
             
         </div>
      <!--parte legata al display end-->
         


        </div>   

    
           
    </div>


    
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>