<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?= $_COOKIE['nombreusu'] ?></h1>
    <br>
    <h2>Tu lista de deseos:</h2>
    <?php
        if (isset($_COOKIE["deseos"])) {
            $lista = json_decode($_COOKIE["deseos"]);
            var_dump($lista);
        } else {
            echo "No hay una lista de deseos todavia.";
        }
    ?>
    <h3>Opciones de la lista de deseos:</h3>
    <h4>Añadir deseo</h4>
    <form action="App18.php?method=new" method="post">
        <label for="new">Nuevo deseo</label>
        <input type="text" name="new">
        <input type="submit" value="nuevo">
    </form>
    <h4>Borrar deseo</h4>
    <form action="?method=delete" method="post">
        <label for="borrar">Numero del deseo a borrar</label>
        <input type="number" name="id">
        <input type="submit" value="borrar">
    </form>
    <h4><a href="App18.php?method=empty">Vaciar lista de deseos</a></h4>
    <h4><a href="App18.php?method=close">Cerrar sesión</a></h4>
</body>
</html>