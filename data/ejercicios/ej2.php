<?php

echo "soy un fichero php";

$var1 = 5;
$var2 = "7";
$var3 = (String)8;

echo "Var1 es del tipo: ". gettype($var1);
echo "<br>La variable 2 esta definida: ? " . isset($var2);
echo "<br>La variable 3 esta vacia: ? " . empty($var3);
const MICONST = 1200;
echo "<br>La constante es: " . MICONST;

$num1 = 3;
$num2 = "3";

if ($num1 <=> $num2 ) {
    echo "<br> Son iguales.";
} else {
    echo "<br> Son diferentes.";
}


// control + shift + 7 para comentar automaticamente.
// comentario de una linea.
// constantes es con const
// getttype para ver de que tipo es la variable.
/*
IMPORTANTE: documentar simpre el codigo.
variables. [A-Z,a-z,0-9]
---------------------

Tipos de datos:
    int ,string, boolean, float,
    arrays, objetos, ficheros 
    
    Tipado de lenguaje programacion:
        -Fuerte: Java
        -Debil: Php

OPERADORES:
-------------------
    +, -, ===, <>, <=>, !=, !==
        
    
    
    
*/