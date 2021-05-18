<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



<?php

$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];

var_dump($email);
var_dump($name);
var_dump($age);

$risultato = 'Accesso negato';

if( strlen($name) > 3  ) {

    if( strpos($email, '@') >= 0 && strpos($email, '.') >= 0 )  {

        if( is_numeric($age) ) {

            $risultato = 'Accesso riuscito';            
        }
    } 
}

echo $risultato;
?>

