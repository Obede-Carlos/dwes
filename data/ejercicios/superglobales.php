<?php
    $mihost = $_SERVER['HTTP_HOST'];
    echo "<br> el host al que va la peticion es: ". $mihost;
/* mostrar aqui :
    -el nombre del servidor web.
    -el lenguaje.
    -el nombre de la pagina actual que realiza la solicitud.
    -tipo del navegador
    */

    $nombre = $_SERVER['SERVER_NAME'];
    echo "<br> el nombre del servidor web es: ". $nombre;
    $lenguaje = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo "<br> el lenguaje es: ". $lenguaje;
    $nombre2 = $_SERVER['PHP_SELF'];
    echo "<br> el nombre de la pagina actual que realiza la solicitud es: ". $nombre2;
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    echo "<br> el tipo de navegador es: ". $navegador;
    

