<?php

$x = 12.8;

echo ceil($x).'<br>';

echo floor($x).'<br>';

echo pi().'<br>';

$x = rand(1, 10);

echo $x.'<br>';

$x = 12.525448;

echo round($x, 2).'<br>';

$x = 1200.50;

echo number_format($x, 2).'<br>';

/*Orden de operaciones Matemáticas:
 * 1. Parentesis
 * 2. Division
 * 3. Multiplicacion
 * 4. Resta
 * 5. Suma
 */

$x = (25-6+1)/3*2 ;

echo $x;