<?php
    //comprueba el metodo calcular y si los numeros y el operador estan vacios.
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (!isset($_POST["calcular"])) {
            if (empty($_POST["num1"]) && empty($_POST["num2"]) && empty($_POST["operador"])) {
                header("LOCATION: ejercicio14.php");
            } else {
                $num1 = (int)$_POST["num1"];
                $num2 = (int)$_POST["num2"];
                $operador = $_POST["operador"];

                //depende del operador hace suma resta multi o division.
                if ($operador == "suma") {
                    echo $num1 . " + " . $num2 . " = " . $num1 + $num2;
                }
                if ($operador == "resta") {
                    echo $num1 . " - " . $num2 . " = " . $num1 - $num2;
                }
                if ($operador == "producto") {
                    echo $num1 . " * " . $num2 . " = " . $num1 * $num2;
                }
                if ($operaor == "division") {
                    echo $num1 . " / " . $num2 . " = " . $num1 / $num2;
                }
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
    <!--Formulario con dos campos y un desplegable a modo de calculadora.-->
    <form action="" method="post">
        <p>
            <label for="num1">Introduce el primer numero:</label>
            <input type="number" name="num1" id="num1">
        </p>   
        <p>
            <label for="num2">Introduce el segun numero:</label>
            <input type="number" name="num2" id="num2">
        </p> 
        <p>Elige el operador para calcular: </p>
        <p>
            <select name="operador" id="operador" >
                <option value="suma"> + </option>
                <option value="resta"> - </option>
                <option value="producto"> * </option>
                <option value="division"> / </option>
            </select>
        </p> 

        <input type="submit" name="calcular" id="calcular" value="Calcular Datos">
    </form>
</body>
</html>
