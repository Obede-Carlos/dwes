<?php
    if (!empty($_POST['idioma']) && !empty($_POST['marca'])) {
        $idioma = $_COOKIE['idioma'];
        $marca = $_COOKIE['marca'];

        $miidioma = "";
        $mimarca = "";

        switch ($idioma) {
            case 'es':
                echo "Bienvenido querido usuario";
                echo "<br> tu marca de coche favorita es: " . $marca;
                break;
            case 'en':
                echo "Welcome dear user";
                echo "<br> your favorite carś brand is : " . $marca;
                break;
            case 'al':
                echo "Willkommen lieber Benutzer";
                echo "<br> Ihre Lieblingsautomarke ist : " . $marca;
                break;
            default:
                echo "Bienvenido querido usuario";
                break;
        }
    } 