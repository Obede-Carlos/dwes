<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST["envio"])) {
            if (!empty($_POST["lista"])) {
                session_start();
                $item= $_POST["lista"];
                $_SESSION["listadeseo"][] = $item;
                $sesioncodif = json_encode($_SESSION);
                print_r($sesioncodif);

                //OPCION 1: decodificarlos como un array
                $sesiondecodif = json_decode($sesioncodif, true);
                echo "<br> <br>";
                print_r($sesiondecodif);

                //OPCION2: decodificarlos como un objeto
                $sesiondecodif = json_decode($sesioncodif);
                //Cambiar el elemento 2 a pizzara.
                $sesiondecodif ->{'listadeseo'}[2] = "smartphone";
                

                /*$miarray = get_object_vars($sesiondecodif);
                print_r($miarray);
                for ($i=0; $i < count($miarray, COUNT_RECURSIVE); $i++) { 
                    echo "<br> elemento " . $i . "es: " . $miarray["listadeseo"][$i];
                }*/
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioListaDeseos</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <p>Lista de deseos: </p>
        <p>
            <select name="lista" id="lista" >
                <option value="vaqueros">vaqueros</option>
                <option value="smartphone">smartphone</option>
                <option value="televisor">televisor</option>
                <option value="coche">coche</option>
                <option value="moto">motocicleta</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Agregar Deseos">
    </form>
</body>
</html>
