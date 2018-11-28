<?php

$array = array(0,1,2,3,4,5,6);

array_pop($array);

print_r($array);
echo "<br>";
var_dump($array);
echo "<br>";

foreach ($array as $index => $valor){
    echo "$index -> $valor <br>";
}
echo "<br>";
echo "array_push--------------------------------------------<br>";

$frutas = array('manzana', 'platano', 'papaya');
array_push($frutas,'uvas','ciruela');

foreach ($frutas as $index => $valor){
    echo "$index -> $valor <br>";
}

echo "<br>";
echo "array_shift--------------------------------------------<br>";
$nombres = array('Mario', 'Renato', 'Juan', 'Christian');
array_shift($nombres);

foreach ($nombres as $index => $valor){
    echo "$index -> $valor <br>";
}

echo "<br>";
echo "array_unshift--------------------------------------------<br>";

array_unshift($nombres, 'Jose');
foreach ($nombres as $index => $valor){
    echo "$index -> $valor <br>";
}

echo "<br>";
echo "array_reverse--------------------------------------------<br>";

$invertido = array_reverse($nombres);
foreach ($invertido as $index => $valor){
    echo "$index -> $valor <br>";
}

echo "<br>";
echo "crear array a partir de un string explode--------------------------------------------<br>";
$s = "one two tree four five";
$as = explode(' ', $s);
foreach ($as as $index => $valor){
    echo "$index -> $valor <br>";
}
