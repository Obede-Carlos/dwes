<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Formulario con tres nombres usando el array nombres.-->
    <form action="" method="post">
        <p>
            <label>Introduce primer nombre:</label>
            <input type="text" name="nombres[]">
        </p>    

        <p>
            <label>Introduce segun nombre:</label>
            <input type="text" name="nombres[]">
        </p> 

        <p>
            <label>Introduce tercer nombre:</label>
            <input type="text" name="nombres[]">
        </p> 
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
    <?php
    //comprobadcion de envio y mostreo del array nombres.
        if (isset($_POST["envio"])) {
            var_dump($_POST["nombres"]);
        }
    ?>
</body>
</html>
