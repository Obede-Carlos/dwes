<?php
if (isset($_GET['envio'])) {
    if (!empty($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
        echo "<br> titulo introducido: ". $titulo; 
    } else {
        echo "<br><h3> No has introducido ningun titulo</h3>";
    }
   
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['autor'])) {
        $autor = $_GET['autor'];
        echo "<br> Autor introducido: ". $autor; 
    } else {
        echo "<br><h3> No has introducido ningun nombre de autor</h3>";
    }
   
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['editorial'])) {
        $editorial = $_GET['editorial'];
        echo "<br> editorial introducida: ". $editorial; 
    } else {
        echo "<br><h3> No has introducido ningun nombre de editorial</h3>";
    }
   
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['paginas'])) {
        $paginas = $_GET['paginas'];
        echo "<br> Numero de paginas introducidas: ". $paginas; 
    } else {
        echo "<br><h3> No has introducido ningun numero de paginas</h3>";
    }
   
}