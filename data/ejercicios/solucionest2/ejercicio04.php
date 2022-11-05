<?php
//para hacer un fibonacci hacemos un array de 0 y 1 dado que son los primeros numeros.
$fibonacci = array(0,1);

//hacemos un for que vaya desde dos que es donde empieza hasta los 10 primeros numeros.
for ($i=2; $i <=10 ; $i++) { 
    //para mostar el siguiente numero hacemos que se sume el ultimo numero del array con el penultimo.
    echo $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2] . "<br>";
}