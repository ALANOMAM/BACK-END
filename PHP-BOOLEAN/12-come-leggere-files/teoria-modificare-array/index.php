<!-- 
 CONSEGNA:
 partendo dall'array di stringhe lette nella lezione precedente e usando solo il secondo modo per accedere 
 ai dati (tramite file json) modificheremo l'array aggiungendo nuovi elementi. 
-->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <div id="app">

        <div class="container py-5">
    
            <h1>Todo</h1>

            <ul class="mb-4">
                <li v-for="todo in todoList">
                    {{todo}}
                </li>
            </ul>
             
            <!--tag input dove inserisco il mio nuovo elemento start-->
            <div class="p-3 border border-2 rounded-3 d-flex">
                <input class="w-100" type="text" placeholder="Nuovo todo" v-model="newTodoText">
                <button @click="addTodo">Aggiungi</button>
            </div>
            <!--tag input dove inserisco il mio nuovo elemento end-->
    
        </div>
    </div>


    
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>