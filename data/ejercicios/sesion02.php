<?php

session_start();

echo "La pagina se ha cargado " . $_SESSION["contador"] . "veces";

echo "<br> Producto " . $_SESSION['producto'];