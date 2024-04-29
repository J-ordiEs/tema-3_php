<?php
/*
- Ejercicio 2


$X = array (10, 20, 30, 40, 50,60); /
-Mostrar por pantalla el tamaño del array anterior y posteriormente elimina un elemento del array anterior./
Después de eliminar el elemento, las claves enteras deben ser normalizadas (se deben reorganizar sus 
índices). 
-Muestra por última vez el tamaño del array.
*/

$X = array (10, 20, 30, 40, 50,60);
var_dump($X);
echo count($X) . "\r";

unset($X[2]);
sort($X);

var_dump($X);

echo count($X);
?>

<style>
    :root {
        color-scheme: light dark;
    }

    * {
        margin: 5px;
    }

    body {
        font-family: 'Courier New', Courier, monospace;
        display: grid;
        place-content: center;
    }
</style>

