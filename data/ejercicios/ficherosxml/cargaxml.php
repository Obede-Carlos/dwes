<?php
    $datos =simplexml_load_file("empleados.xml");
    if ($datos == false) {
        echo "<br> no se puede mostrar el fichero.";
        exit();
    }

    //var_dump($datos);
    echo "<br> Recorro el fichero: ";
    foreach($datos as $dato){
        print_r($dato);
    }