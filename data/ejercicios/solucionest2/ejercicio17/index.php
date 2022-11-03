<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 17</h1>
    <hr>
    <input type="text" name="opciones[]">
    <?php
        echo "eligue las siguientes opciones:";
        echo "<br>(1) Fibonacci";
        echo "<br>(2) Potencias2";
        echo "<br>(3) Factoriales";
        echo "<br>(4) Primos.";
        require("App17.php");
        $app = new App();
        $num = $_GET['opciones'];
        switch ($num) {
            case "1":
                $app -> calcularFibonacci();
                break;
            case "2":
                $app -> calcularPotencias2();
                break;
            case "3":
                echo "di un numero menor a 1.000.000";
                echo '<input type="text" name="numero[]">';
                $num = $_GET['numero'];
                $app -> calcularFactoriales($num);
                break;
            case "4":
                $app -> calcularPrimos();
                break; 
            default:
                echo "no has seleccionado ninguna opcion.";
                break;
        }
    ?>
</body>
</html>