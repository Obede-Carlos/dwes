<?php

//comprobacion de envio establecdio y nombre no vacio, muestra mensaje de hola,
//sino muestra nombre obligatorio y link para volver atras.
if (isset($_POST['envio'])) {
    if (!empty($_POST['nombre'])) {
        echo "Hola: " . $_POST['nombre'];
    } else{
        echo "<br> el campo nombre es obligatorio.";
        echo "<br> <a href='ejercicio12.html'> Volver atras </a>";
    }
}