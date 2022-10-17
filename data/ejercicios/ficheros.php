<?php

$nombrefich = "modulodwes.txt";
$fp = fopen($nombrefich,"r");

if (!$fp) {
    echo "<br>No he podido leer el fichero.";
} else {
    /*while (!feof($fp)) {
        $caracter = fgetc($fp);
        if ($caracter == "\n") {
            echo "<br>";
        }
        echo $caracter;
    }*/

    while (!feof($fp)) {
        $linea = fgets($fp);
        echo $linea . "<br>";
    }

    $contenido = fread($fp, filesize($nombrefich));
    var_dump($contenido);
}
echo "<br> cerrando fichero.";
fclose($fp);

$fp2 = fopen($nombrefich,"a");
if (!$fp2) {
    echo "<br>No he podido abrir el fichero para ESCRIBIR"
} else {
    $textoainsertar = "Esta es otra linea. " . PHP_EOL;
    fwrite($fp2,$textoainsertar);
    fclose($fp2);
}