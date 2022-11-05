<!DOCTYPE html>
<html><head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
    <body>
        <!--Formulario para enviar nombres-->
        <form action="">
            <input type="text" name="nombres[]">
            <input type="submit" value="enviar">
            <hr>
            <?php
            //comprobacion de nombres y mostrando array nombres con foreach y con lista html.
                if (isset($_GET['nombres'])) {
                    foreach($_GET['nombres'] as $nombre) {
                        //input tipo hidden para no olvidar los nombres anteriores.
                        echo '<input type="hidden" name="nombres[]" value="' . $nombre . '"><br>';
                        echo "<ul><li>" . $nombre . "</li></ul>";
                    }
                }
            ?>
        </form>
    </body>
</html>