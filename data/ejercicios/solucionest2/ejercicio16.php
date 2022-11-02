<!DOCTYPE html>
<html><head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
    <body>
        <form action="">
            <input type="text" name="nombres[]">
            <input type="submit" value="enviar">
            <hr>
            <?php
                if (isset($_GET['nombres'])) {
                    foreach($_GET['nombres'] as $nombre) {
                        echo '<input type="hidden" name="nombres[]" value="' . $nombre . '"><br>';
                        echo "<ul><li>" . $nombre . "</li></ul>";
                    }
                }
            ?>
        </form>
    </body>
</html>