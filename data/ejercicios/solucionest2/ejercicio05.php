<?php

const NUMERO = 169;

for ($i=0; $i < NUMERO ; $i++) { 
    if (NUMERO % $i == 0) {
        echo $i . "<br>";
        $divisor ++;
        
    }
}

if ($divisor == 1) {
    echo "<br> El numero ". NUMERO ."es primo";
} else {
    echo "<br> El numero ". NUMERO ."no es primo";
}