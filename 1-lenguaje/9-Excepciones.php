<?php

function entero($x){
    if (!intval($x)) {
        throw new Exception('No se trata de un número entero<br>');
    }   
    return $x.'<br>';
}

function division($x, $y){
    if(!$y){
        throw new Exception('No se puede dividir por cero');
    }
    return $x/$y.'<br>';
}

try {
    echo entero(12);
    echo division(12,5);
} catch (Exception $exc) {
    echo 'Excepcion Capturada: '.$exc->getMessage().'<br>' ;
}
