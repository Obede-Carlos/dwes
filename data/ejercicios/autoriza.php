<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales: </h1>
    <h2>Si has llegado hasta aqui eres un heroe.</h2>
    <?php
        //recogida de lineas de texto.
        if (isset($_GET['envio'])) {
            if (!empty($_GET['usuario'])) {
                $usuario = $_GET['usuario'];
                echo "<br> Usuario introducido: ". $usuario; 
            } else {
                echo "<br><h3> No has introducido ningun usuario</h3>";
            }
            if (!empty($_GET['passwd'])) {
                $contraseña = $_GET['passwd'];
                echo "<br> Contraseña introducida: ". $contraseña; 
            } else {
                echo "<br><h3> No has introducido ninguna contraseña</h3>";
            }
        }

        //recogida valoes checkbox.
        if (isset($_GET['envio'])){
            if (!empty($_GET['lenguajes'])) {
                $asignaturas = $_GET['lenguajes'];
                foreach($asignaturas as $asignatura){
                    echo "<br> Estudias los lenguajes: ". $asignatura;
                } 
            } else {
                echo "<br>No estudias ningun lenguaje.";
            }
        }


        //recogida valores radiobutton.
        if (isset($_GET['envio'])){
            if (!empty($_GET['equipo'])) {
                $equipos = $_GET['equipo'];
                echo "<br> Equipo de basket favorito : ". $equipos; 
            } else {
                echo "<br>No te gusta ningun equipo de baloncesto.";
            }
        }

        //recogida listas simples.
        if (isset($_GET['envio'])){
            if (!empty($_GET['menus'])) {
                $plato = $_GET['menus'];
                echo "<br> : tu plato favorito es: ". $plato;
            } else {
                echo "<br>No has seleccionado ningun plato.";
            }
        }

        //recogida listas complejas.
        if (isset($_GET['envio'])){
            if (!empty($_GET['menum'])) {
                $menus = $_GET['menum'];
                foreach($menus as $menu){
                    echo "<br> Te plato preferido: ". $menu;
                } 
            } else {
                echo "<br>No has elegido ningun plato.";
            }
        }
        //recogida direccion ip.
        if (isset($_GET['envio'])){
            if (!empty($_GET['ip'])) {
                $ip = $_GET['ip'];
                echo "<br> la ip del servidor es : ". $ip; 
            } else {
                echo "<br>No hay ninguna ip seleccionada.";
            }
        }
    ?>
</body>
</html>