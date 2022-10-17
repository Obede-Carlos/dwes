<?php
if (isset($_GET['envio'])) {
    if (!empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if ($num >= 3) {
            echo "<br>Hola" . $nombre; 
        } else {
            echo "el campo nombre es obligatorio" . ' <a href="http://ejercicios.local/ejercicio2.html">volver atras</a>';
        } 
    }
}

$error = "valor no valido";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Nombre</h1>
    <form name="formulario_ej3" action="ejercicio3.php" method="get">
        <p>
            <label for="nombre">Introducir Nombre:</label>
            <input type="text" name="nombre" id="nombre">

            <input type="text" name="nombre" id="nombre" value="<?php echo $error?>">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>