<?php
if (isset($_GET['envio'])) {
    if (!empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        echo "<br>Holaa ". $nombre; 
    } else {
        echo "el campo nombre es obligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

