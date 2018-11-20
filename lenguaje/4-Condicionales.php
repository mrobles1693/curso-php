<?php

/*
&& Significa (Y) Todas son ciertas
|| Significa (O) Una es cierta.
!  Negación
 *  */

$var1 = 4;
$var2 = 5;
$var3 = 5;
$var4 = 6;

if ($var1 == $var2 && $var3 == $var4){
     echo "Ambas son verdad, por lo tanto es verdad</br>";
} else {
    echo "Uno es falso, por lo tanto todo es falso</br>";
}

if ($var1 == $var2 || $var3 == $var4){
     echo "Basta que uno sea verdad, por lo tanto es verdad</br>";
} else {
    echo "Si ambos son falsos entonces es falso</br>";
}