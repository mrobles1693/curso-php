<?php

$x = 1;
$y = 2;

if($x > $y){
    echo "X es mayor que Y.<br>";
}else if ($x == $y){
    echo "Son iguales. <br>";
}else{
    echo "Y es mayor que X. <br>";
}

$dato = 2;

switch ($dato) {
    case 1:
        echo "UNO. <br>";
        break;
    
    case 2:
        echo "DOS. <br>";
        break;
    default:
        echo "No ha elejido nada";
        break;
}