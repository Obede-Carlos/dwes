<?php
if (isset($_GET['envio'])) {
    if (!empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        echo "<br>Holaa ". $nombre; 
    }  
}

