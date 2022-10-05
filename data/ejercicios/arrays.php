<?php

//los elementos son heterogeneos.
$miarray = array(1,"hola", 3.0, false);
echo "<br> elemeno 2 del array: " . $miarray[2];
//mostrar
//foreach, var_dump, print_r;
foreach ($miarray as $elmto) {
    echo "<br> elmto es: " . $elmto;
}
echo "<br>";
print_r($miarray);
echo "<br>";
var_dump($miarray);

echo "<br> longitud del array: ". count($miarray);

$array2 = [
    3,
    2,
    5,
    6,
];

//con el & se modifican el valor como tal del array.
//sin el & extrae el valor y lo modifica pero el elemento como tal del array no lo modifica.
foreach ($array2 as &$elto) {
    $elto = $elto + 2;
    echo "<br> valor de elto: ". $elto;
}
print_r($array2);

//cuando se inserta un nuevo elemento, coge la ultima clave del array le suma 1 para insertarlo.
$array2[] = 15;
echo "<br>";
print_r($array2);
//para borrar variable o un elemento del array; unsert(variable o elemento).
unset($array2[2]);
print_r($array2);
echo "<br> y la posicion 2?: ". $array2[2];

$array2[2] = 13;
echo "<br>";
print_r($array2);

echo "<br> mostrar clave y valor de array:";
foreach ($array2 as $key => $value) {
    echo "<br> Clave: ". $key ." y valor: ". $value;
}

//arrays indexados: las claves solo pueden ser cadenas o enteros.
//para establecer a cada clave un valor tiene que ser con "=>".
$persona = array(
    "edad" => 23,
    "peso" => 75,
    "casado" => false,
    "dni" => "23232323",
    8 => "nss"
);

foreach ($persona as $key => $value) {
    echo "<br> Clave: ". $key ." y valor: ". $value;
}
print_r($persona);

$persona[] = 7;
echo "<br>";
print_r($persona);
echo "<br> el dni es: ". $persona["dni"];
