<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "hola";?>
    <footer>
        <?php
            // si se incluye un fichero y tiene variable, se pueden sobreescribir 
            //pero luego si se vuelve a cargar el fichero se reestableceran las variables.
            include "footer.php";
            $nombreadmin = "Checo perez";
            echo "<br> el nombre del admin es:" . $nombreadmin;
            include "footer.php";
            echo "<br> el nombre del admin es:" . $nombreadmin;
            //include incluye un fichero y si hay un fallo sigue con la ejecuccion.
            //require  incluye un fichero si hay un fallo para la ejecucion.
        ?>
    </footer>
</body>
</html>