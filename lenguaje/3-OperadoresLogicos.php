<?php

/*
== igual
=== igual tipo dato y valor
!= diferente
!== diferente tipo de dato y valor
> mayor que
>= mayor o igual que
< menor que
<= menor o igual que
 */

$x = "2";
$y = 2;

//Mismo Valor
if ($x == $y){
    echo "Verdadero";
}else{
    echo "Falso";
}

//Mismo valor pero distinto tipo de dato
if ($x === $y){
    echo "Verdadero";
}else{
    echo "Falso";
}