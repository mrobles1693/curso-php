<?php

$nombres = array('Mario', 'Jose', 'Renato', 'Juan', 'Eduardo');

for($x = 0; $x < count($nombres); $x++){
    echo $nombres[$x].'<br>';
}

$x = 1;

while ($x <=10) {
    echo $x.'<br>';
    $x++;
}

foreach ($nombres as $value) {
     echo $value.'<br>';
}

$asociativo = array('Producto'=>'Jarron','Color' => 'verde', 'Precio' => 200);

foreach ($asociativo as $key => $value) {
    echo "$key -> $value<br>";
}