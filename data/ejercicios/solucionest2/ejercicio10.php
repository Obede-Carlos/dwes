<?php

$array = array(
    "base" => "Los Angeles Lakers",
    "escolta" => "Chicago Bulls",
    "alero" => "Memphis Grizziles",
    "alapivor" => "Miami Heat",
    "pivot" => "Detroit Pistons"
);

foreach ($array as $key => $value) {
    echo "<br> Clave: " . $key . " Valor: " . $value;
}