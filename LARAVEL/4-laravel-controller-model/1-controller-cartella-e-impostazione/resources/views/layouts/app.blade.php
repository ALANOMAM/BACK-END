<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titolo</title>
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>
<body data-bs-theme="dark" >
    
    <div class="container">
        <h1>TITOLO</h1>

        <div class="d-flex gap-4">
       <!--"seconda" qui è il nome che ho dato alla rotta che porta alla seconda pagina-->
       <a href="{{route('seconda')}}">link seconda pagina </a> 
       <!--"home" qui è il nome che ho dato alla rotta che riporta alla prima pagina-->
       <a href="{{route('home')}}">link home </a> 
        </div>
        
        @yield("content")
    </div>
</body>
</html>