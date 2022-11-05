<?php

//constante numero 169.
const NUMERO = 169;

//bucle for que vaya desde 0 hasta la constante y que compruebe que el numero es primo o no.
for ($i=0; $i < NUMERO; $i++) { 
    if (primo($i)) {
        echo "EL numero: " . $i . "es primo";
    } else {
        echo "EL numero: " . $i . "no es primo";
    }
}

//funcion para saber si es primo: un numero divisible entre 1 y el mismo.
function primo ($num){
    $cont = 0;
    for ($i=2; $i <= $num ; $i++) { 
        if ($num % $i == 0) {
            if (++$cont > 1) {
                return false;
            }
        }
    }
    return true;
}