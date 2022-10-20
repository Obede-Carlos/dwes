<?php
       if (isset($_POST['envio'])) {
        if (!empty($_POST['menus'])) {
            $idioma = $_POST['menus'];
            if ($idioma == "Spain") {
                $idioma ="Bienvenido querido Usuario";
            }
            if ($idioma == "English") {
                $idioma ="Welcome dear User";
            }
            if ($idioma == "Aleman") {
                $idioma ="Willkommen lieber Benutzer";
            }
        } else {
            $idioma ="Bienvenido querido Usuario";
        }
    }

    if (isset($_POST['envio'])) {
        if (!empty($_POST['marca'])) {
            $marca = $_POST['marca'];
        }
    }

    $array = array($idioma, $marca);

    $arrayCodificado = json_encode($array);
    setcookie("cookie1",$arrayCodificado,time()+60);
    header('Location: miniEjerciciopt3.php');