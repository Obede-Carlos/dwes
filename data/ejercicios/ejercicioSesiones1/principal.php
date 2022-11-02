<?php
session_start();
if (!isset($_SESSION['usurario']) && !isset($_SESSION['rol'])) {
    header("Location: login.php");
}

if ($_SESSION['rol'] == 0) {
    echo "<h1> Bienvenido Usuario.</h1>";
} else if($_SESSION['rol'] == 1) {
    echo "<h1> Bienvenido Administrador.</h1>";
}

echo '<a href="logout.php">Cerrar sesion</a>';
