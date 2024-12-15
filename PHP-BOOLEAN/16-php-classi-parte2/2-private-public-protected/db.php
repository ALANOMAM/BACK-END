<?php
require './Models/User.php';
require './Models/PremiumUser.php';

// utenti standard
$user1 = new User("marioRossi", "mrossi@gmail.com");
//qui passo un valore alla mia priprietà password protetta tramite la funzione pubblica "setPassword"
$user1->setPassword("passwordit");
//con questo commando avrò il volore della password appena settata esposta nel layout finale, quello accessibile dall'utente.
 echo "password user: ". $user1->getPassword() ."<br>";



$premiumUser1 = new PremiumUser("premiumMario", "m@mail.com", 2023);
//qui passo un valore alla variabile "password" tramite il metodo "setPassword"
//tutto questo senza esplicitamente definire ne la variabile ne il metodo nella classe 
//questo perchè viene tutto ereditato.
$premiumUser1->setPassword("pass");
//anche qui avrò il volore della password appena settata esposta nel layout finale, quello accessibile dall'utente.
echo "password user premium: ".$premiumUser1->getPassword()."<br>";

//array utenti
$users = [
  $user1,
];
var_dump($users);

//array utenti premium
$premiumUsers = [
$premiumUser1,
];
var_dump($premiumUsers);

?>