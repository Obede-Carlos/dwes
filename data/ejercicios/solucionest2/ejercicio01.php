<?php
echo '<h1> Ficha de Datos';

if (isset($_GET['envio'])) {
    if (!empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        echo "<br>Nombre: ". $nombre; 
    } else {
        echo "el campo nombre es obligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['apellidos'])) {
        $apellido = $_GET['apellidos'];
        echo "<br>Apellidos: ". $apellido; 
    } else {
        echo "el campo apellidos es obligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['edad'])) {
        $edad = $_GET['edad'];
        echo "<br>Edad: ". $edad; 
    } else {
        echo "el campo edad es obligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['telefono'])) {
        $telf = $_GET['telefono'];
        echo "<br>Telefono: ". $telf; 
    } else {
        echo "el campo  es telefono oligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

if (isset($_GET['envio'])) {
    if (!empty($_GET['sexo'])) {
        $sexo = $_GET['sexo'];
        echo "<br>Sexo: ". $sexo; 
    } else {
        echo "el campo  es telefono oligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
    } 
}

