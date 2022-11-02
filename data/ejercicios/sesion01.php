<?php
//crear o unirse a una sesion ya creada:
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0;
} else {
    $_SESSION["contador"]++;
}

$_SESSION['producto'] = "cortacesped";

echo "He visitado la pagina " . $_SESSION["contador"] . "veces.";

echo "<a href=\"sesion02.php\">Siguiente pagina </a> ";