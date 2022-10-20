<?php

//definir una cookie.

$miarray = ["hola",25,[1,2,3]];
$infoguardar = serialize($miarray);

setcookie("primeracookie","aceptado",time()+60);
setcookie("segundacookie",$infoguardar,time()+600);

echo "<h1> Mi primera cookie </h1>";
echo "<br> el valor de la cookie uno: ". $_COOKIE["primeracookie"];
echo "<br> el valor de la cookie dos: ". $_COOKIE["segundacookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br> Numero de cookies creadas: ". count($_COOKIE);