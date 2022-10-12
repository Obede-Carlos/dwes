<?php
//mostrar el 
if (isset($_GET['envio'])) {
    if (!empty($_GET['usuario'])) {
        $usuario = $_GET['usuario'];
        echo "<br> Usuario introducido: ". $usuario; 
    } else {
        echo "<br><h3> No has introducido ningun usuario</h3>";
    }
   
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['usuario'])) {
        $usuario = $_GET['usuario'];
        echo "<br> Usuario introducido: ". $usuario; 
    } else {
        echo "<br><h3> No has introducido ningun usuario</h3>";
    }
   
}
