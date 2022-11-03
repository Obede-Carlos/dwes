<?php

const NUMERO = 169;

for ($i=0; $i < NUMERO; $i++) { 
    if (primo($i)) {
        echo "EL numero: " . $i . "es primo";
    } else {
        echo "EL numero: " . $i . "no es primo";
    }
}

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