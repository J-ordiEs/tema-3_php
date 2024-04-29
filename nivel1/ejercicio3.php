<?php
/*
- Ejercicio 3
Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true
si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”.
*/

$x = ["hopa", "php", "hpml"];

function inChar($arr, $char): bool
{
    for ($i = 0; $i < count($arr); $i++) {
        if (strpos($arr[$i], $char) === false) {
            return false;
        } else {
            return true;
        }
    }
}

var_dump(inChar($x, "p"));


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