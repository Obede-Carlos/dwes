<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST['envio'])) {
            if ($_POST['usuario'] == 'usuario' && $_POST['passwd'] == 1234) {
                $_POST['usuario'] = 'usuario';
                session_start();
                $_SESSION['rol'] = 0;
                header("location: principal.php");
            }elseif($_POST['usuario'] == 'admin' && $_POST['passwd'] == 5678){
                $_POST['usuario'] = 'admin';
                session_start();
                $_SESSION['rol'] = 1;
                header("location: principal.php");
            } else {
                echo "<br><script> alert('Login incorrecto')</script>";

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
            <label for="usuario">Introduce Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="constraseña">Introduce Contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>
