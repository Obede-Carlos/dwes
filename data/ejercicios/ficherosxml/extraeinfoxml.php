<?php
    $datos = simplexml_load_file("empleados.xml");
    $edades = $datos->xpath("//edad");
    foreach($edades as $edad){
        echo "<br>Edad: ". $edad;
    }