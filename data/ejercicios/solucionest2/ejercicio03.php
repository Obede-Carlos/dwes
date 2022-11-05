<?php
//ejercico para mostrar los numeros divisores de 3 

//bucle for desde 1 hasta 10 y que muestre los divisores de 3.
for ($num=1; $num <=10 ; $num++) { 
    if ($num % 3 == 0) {
        echo $num . "<br>";
    }
}