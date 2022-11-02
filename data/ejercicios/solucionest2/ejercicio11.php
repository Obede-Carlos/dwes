<?php

//comprobamos que el campo envio no esta vacio de manera que si esta vacio devolvera un mensaje de error.
if (isset($_GET['envio'])) {

    //comprobacion empty del campo titulo.
    if (!empty($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
        echo "<br> titulo introducido: ". $titulo; 
    } else {
        echo "<br><h3> No has introducido ningun titulo</h3>";
    }

    //comprobacion empty del campo autor
    if (!empty($_GET['autor'])) {
        $autor = $_GET['autor'];
        echo "<br> Autor introducido: ". $autor; 
    } else {
        echo "<br><h3> No has introducido ningun nombre de autor</h3>";
    }

    //comprobacion empty del campo editorial
    if (!empty($_GET['editorial'])) {
        $editorial = $_GET['editorial'];
        echo "<br> editorial introducida: ". $editorial; 
    } else {
        echo "<br><h3> No has introducido ningun nombre de editorial</h3>";
    }

    //comprobacion empty del campo paginas.
    if (!empty($_GET['paginas'])) {
        $paginas = $_GET['paginas'];
        echo "<br> Numero de paginas introducidas: ". $paginas; 
    } else {
        echo "<br><h3> No has introducido ningun numero de paginas</h3>";
    }
   
} else {
    echo "<br> Error: no has enviado los datos al servidor."
}