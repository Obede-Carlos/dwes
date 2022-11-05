<?php
//Clase app donde estaran todos las funciones.
class app{

    //funcion calcular fibonacci:el resultado del siguiente numero es la suma de sus dos anteriories.
    public function calcularFibonacci(){
        $fibonacci = array(0,1);
        for ($i=2; $i < 1000000 ; $i++) { 
            echo $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2] . "<br>";
        }
    }

    //funcion para calcular valores de las potencias 2 24 veces.
    public function calcularPotencias2(){
        for ($i=2; $i <= 24; $i++) { 
            $resultado = pow(2, $i);
            echo "<br> $resultado";
        }
    }

    //funcion para calcular los factoriales es decir por cada numero el siguiente es el producto del anterior, ejemplo factorial 5 : 1 x 2 x 3 x 4 x 5.
    public function calcularFactoriales($n){
        if ($n < 1000000) {
            $factorial = 1;
            for ($i=1; $i < $n; $i++) { 
                $factorial = $factorial * $i;
                echo "<br> el factiorial de $i es: $factorial";
            }
        }
    }

    //funcion que por cada numero hasta 10.000 compuebe con el metodo primo, si lo es lo muestra.
    public function calcularPrimos(){
        for ($i=0; $i < 10000; $i++) { 
            if (primo($i)) {
                echo "EL numero: " . $i . "es primo";
            } 
        }

        //funcion primo que devuelve verdadero si el numero solo se puede dividir entre 1 y el mismo.
        function primo ($num){
            $cont = 0;
            for ($i=2; $i <= $num ; $i++) { 
                if ($num % $i == 0) {
                    if (++$cont > 1) {
                        return false;
                    }
                }
            }
            return true;
        }
    }
}