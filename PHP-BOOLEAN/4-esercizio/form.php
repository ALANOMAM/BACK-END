<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>

<!--inizio stile-->
    <style>
   *{
    margin:0;
    padding:0;
    box-sizing:border-box;
   }

   body{
    font-family:sans-serif;
    font-size:20px;
    background-color:lightblue;
    display:flex;
    justify-content: center;
   }

   .container{
    margin-top:50px;
    padding: 20px;
    border: 1px solid black;
    border-radius:5px;
    background-color:lightpink;
    display: flex;
    flex-direction:column;
    align-items: center;
    gap:20px;
   }

  .container div:nth-child(1){
    display: flex;
    flex-direction:column;
    gap: 10px;
  }

  .container input{
    font-size:20px;
    padding: 10px;
    border-radius:5px;
    border: 1px solid lightpink;
  }

  .container textarea{
    font-size:20px;
    border-radius:5px;
    border: 1px solid lightpink;
  }
    </style>
 <!--fine stile-->
 
</head>
<body>

 <form action="results.php" class="container">

<div>
 <label for="">Inserisci il paragrafo : </label>   
 <textarea name="Paragraph" id="" cols="40" rows="5">
 </textarea>
</div>

<div>
 <label for="">Inserisci la parola da censurare : </label>   
 <input type="text" name="Word" placeholder="word">
 </div>

 <input type="submit">


 </form>
    
</body>
</html>