<?php

include_once "asignatura.php";
include_once "modulo.php";
echo "<h1> WEB DE ASIGNATURAS <h1>";
$bbdd = new Asignatura("BBDD", 6);
Asignatura::setCliclo("DAM");
echo "<br> ". $bbdd;
echo "<br> la asignatura pertenece a: ". Asignatura::getCiclo();
$dwes = new Modulo("DWES", 9, "IFC3014");
Asignatura::setCliclo("DAW");
echo "<br> ". $dwes;
echo "<br> el modulo pertenece a: ". Asignatura::getCiclo();
