<?php
/*
Crea un programa que contenga dos arrays de números enteros/floados. Una vez creados, muestra por pantalla el resultado de:

La intersección de los dos arrays (números en común)
La mezcla de ambos arrays.
*/

$numerosNaturales = [1, 2, 3, 4, 5];
$numerosFlotantes = [2.3, 3.4, 5.6, 7.8, 9.1];

$arrayConbinado = array_merge($numerosNaturales, $numerosFlotantes);

var_dump($arrayConbinado);
