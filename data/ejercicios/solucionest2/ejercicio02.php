<?php
//varable constante: en este caso el numero ocho.
const NUMERO1 = 8;

//bucle for deonde va recoriendo los numero del 0 al 10 para mostrar la tabla entera del ocho
for ($numero2=1; $numero2 <= 10 ; $numero2++) { 
    $result = $numero2 * NUMERO1;
    echo NUMERO1 . " x " . $numero2 . " = " . $result . "<br>";
}