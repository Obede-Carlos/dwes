<?php

//introducir los elementos de uno en uno al array.
$array[] = "Los Angeles Lakers";
$array[] =  "Chicago Bulls";
$array[] = "Memphis Grizziles";
$array[] = "Miami Heat";
$array[] = "Detroit Pistons";

//mostrarlo de manera que sea una lista de html.
foreach($array as $i){
    echo "<ul><li> " . $i . "<ul><li>";
}