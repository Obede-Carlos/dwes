<?php
    $idioma = json_decode($_COOKIE["arrayCodificado"][0]);
    echo "El idioma es: ". $idioma;
    $marca = json_decode($_COOKIE["arrayCodificado"][1]);
    echo "La marca elegida es: ". $marca;