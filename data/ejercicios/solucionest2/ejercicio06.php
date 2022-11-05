<?php

//un array con 5 equipos de baloncesto.
$array = array("Los Angeles Lakers", "Chicago Bulls", "Memphis Grizziles", "Miami Heat");

//metemos un elemnto mas 
$array[] = "Detroit Pistons";

//mostramos el array como si fuera una lista de html
foreach($array as $i){
    echo "<ul><li> " . $i . "<ul><li>";
}
