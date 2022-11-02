<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST['envio'])) {
            if (!empty($_POST['nombre']) && strlen($_POST['nombre']) >= 3) {
               echo "Hola ". $_POST['nombre'];
            } else {
                echo "<br>";

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <p>
            <label for="nombre">Introduce Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>    

        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>
