<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS:
1-Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
2-Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
 */

require './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  </head>
<body data-bs-theme="dark">

<!-- navbar start-->
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Prodotti Per Animali</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
<!-- navbar end-->




    <!--container start-->
    <div class="container " >

    <div class="row row-cols-2  ">   
  
  <!-- iterazione arry cibo start-->  
   <?php
   
   foreach($foodItems as  $item){
    ?>

    <div class=" col d-flex justify-content-center  mt-3">
    <div class="card" style="width:500px">
        <img src = "<?= $item->immagine ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <span><i class="fa-solid <?= $item->categoria->icon ?>"></i></span>
        <span><?= "(".$item->categoria->name.")" ?></span>

            <h5 class="item-name"><?="Tipo prodotto : ". $item->nome ?></h5>
            <h5 class="item-price "><?= "Prezzo prodotto : ".$item->prezzo ?></h5>

            <h5 class="item-price "><?= "peso prodotto : ".$item->peso ?></h5>
            <h5 class="item-price "><?= "ingredeienti prodotto : ".$item->ingedienti ?></h5>

            <div>
            <button type="button" class="btn btn-primary">Acquista</button>
            </div>
            
        </div>
    </div>
</div>

<?php
   }
   ?>
 <!-- iterazione arry cibo end-->  


<!-- iterazione arry giochi start-->
<?php
   
   foreach($toyItems as  $item){
    ?>

    <div class=" col d-flex justify-content-center  mt-3">
    <div class="card" style="width:500px">
        <img src = "<?= $item->immagine ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <span><i class="fa-solid <?= $item->categoria->icon ?>"></i></span>
        <span><?= "(".$item->categoria->name.")" ?></span>

            <h5 class="item-name"><?="Tipo prodotto : ". $item->nome ?></h5>
            <h5 class="item-price "><?= "Prezzo prodotto : ".$item->prezzo ?></h5>

            <h5 v-show="$item->materiale =! null" class="item-price "><?= "materiale prodotto : ".$item->materiale ?></h5>

            <div>
            <button type="button" class="btn btn-primary">Acquista</button>
            </div>
            
        </div>
    </div>
</div>

<?php
   }
   ?>
<!-- iterazione arry giochi end-->


    </div>   

    </div>
    <!--container end-->
   
<!--bootstrap-->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

