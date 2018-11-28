<?php

function mensaje($s){
    echo "$s <br>";
}

mensaje("Toma perra");

function suma($x, $y){
    return $x + $y;
}

echo suma(5, 8).'<br>';

function recorrer($arreglo){
    foreach ($arreglo as $key => $value) {
        echo "$key : $value <br>";
    }    
}

$asociativo = array('Producto'=>'Jarron','Color' => 'verde', 'Precio' => 200);

recorrer($asociativo);