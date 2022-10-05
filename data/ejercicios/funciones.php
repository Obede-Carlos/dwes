<?php

$var1 = 6;
$var2 = 7;

function suma($a, $b){
    global $var1, $var2;
    $var1 = 100;
    $var2 = 200;
    echo "<br> dentro la variable var1 y var2 son: ". $var1 . "y" . $var2;
    static $varestatica = 0;
    echo "<br> El valor de la var estatica es: ". $varestatica;
    $varestatica ++;
    return $a + $b;
}

//las variables normales pierden su valor cuando salen de la funcion.
//las varibles estaticas mantienen su valor cuando salen de la funcion.
echo "<br> la variable a y b son: ". $a . "y" . $b;
echo "<br> fuera la variable var1 y var2 son: ". $var1 . "y" . $var2;
echo "<br> La suma es: ". suma(3,5);
echo "<br> La suma es: ". suma(3,5);
echo "<br> La suma es: ". suma(3,5);

//paso de parametros por valor o por referencia(variable);
function restar($op1, $op2){
    $op1 = $op1 -$op2;
    return $op1;
}

echo "<br> LLamada por valor: ". restar(8,3);