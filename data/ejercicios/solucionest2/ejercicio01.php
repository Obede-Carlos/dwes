<?php
//Datos personales guardados en variables:
$nombre = "Carlos";
$apellidos = "Obedé Antoñanzas";
$edad = "20 años";
$telefono = "609729128";
$email = "Carlosobede8@gmail.com";

//echo donde mostraremos una tabla html
echo "<table>
        <tr> Nombre
            <td>" . $nombre . "</td>
        </tr>
        <tr> Apellidos
            <td>" . $apellidos . "</td>
        </tr>
        <tr> Edad
            <td>" . $edad . "</td>
        </tr>
        <tr> Telefono
            <td>" . $telefono . "</td>
        </tr>
        <tr> Email
            <td>" . $email . "</td>
        </tr>";

