<?php

if (isset($_POST['envio'])) {
    if (!empty($_POST['nombre'])) {
        echo "Hola: " . $_POST['nombre'];
    } else{
        echo "<br> el campo nombre es obligatorio.";
        echo "<br> <a href='ejercicio12.html'> Volver atras </a>";
    }
}