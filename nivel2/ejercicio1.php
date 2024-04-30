<?php
/*
Crea un programa que contenga dos arrays de números enteros/floados. Una vez creados, muestra por pantalla el resultado de:

La intersección de los dos arrays (números en común)
La mezcla de ambos arrays.
*/

$numerosNaturales1 = [1, 2, 3, 4, 5];
$numerosNaturales2 = [6, 7, 3, 4, 1];

$numerosEnComun = array_intersect($numerosNaturales1, $numerosNaturales2);

var_dump($numerosEnComun);

$arrayConbinado = array_merge($numerosNaturales1, $numerosNaturales2);

var_dump($arrayConbinado);
