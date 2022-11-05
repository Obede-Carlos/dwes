<?php

//crear un array asociativo: array con clave y valor.
$array = array(
    "base" => "Los Angeles Lakers",
    "escolta" => "Chicago Bulls",
    "alero" => "Memphis Grizziles",
    "alapivor" => "Miami Heat",
    "pivot" => "Detroit Pistons"
);

//mostrar el array en pantalla con for each: clave y valor.
foreach ($array as $key => $value) {
    echo "<br> Clave: " . $key . " Valor: " . $value;
}