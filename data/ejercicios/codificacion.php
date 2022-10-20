<?php

$capitales = [
    "españa" => "Madrid",
    "Francia" => "Paris"
];

$infotrans = ""; //informacion trans.
$infonotrans = ""; //informacion de vuelta a la original

$infotrans = serialize($capitales);
echo "<br> inforamcion serializada: ";
var_dump($infotrans);

$infonotrans = unserialize($infotrans);
echo "<br> inforamcion desserializada: ";
var_dump($infonotrans);

$infotrans = json_encode($capitales);
echo "<br> inforamcion en json encode: ";
var_dump($infotrans);

$infonotrans = json_decode($infotrans);
echo "<br> inforamcion original: ";
var_dump($infonotrans);