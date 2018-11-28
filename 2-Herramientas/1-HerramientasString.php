<?php

$s = "' or  '1' = '1'";

echo addslashes($s).'<br>';

$s = '<script>alert("hack");</script>';

echo htmlentities($s).'<br>';

$s = '<strong>Hola Mundo;</strong>';

echo $s.'<br>';

$lista = array(0,1,2,3,4,5,6,7,8,9);

$unido = implode("-", $lista);

echo $unido.'<br>';

$s = 'Toma';

$repetido = str_repeat($s, 4);

echo $repetido.'<br>';

$buscar = 'hola';
$reemplazar = 'adios';

$s = 'hola amigo';

echo $s.'<br>';

$s = str_replace($buscar, $reemplazar, $s);

echo $s.'<br>';

echo strlen($s).'<br>';

$buscar = '1';
$s = '4316';
$pos = strpos($s, $buscar);

if($pos==TRUE){
    echo "$buscar ha sido encontrado en la posición $pos<br>";
}else{
    echo "$buscar no ha sido encontrado<br>";    
}

$s = "php";

echo strtoupper($s);