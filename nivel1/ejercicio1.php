<?php
/*
- Ejercicio 1
Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en uno.
*/

$numeros = [1, 2, 3, 4, 5];

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

<ul>
    <?php foreach ($numeros as $numero) {
        echo "<li>$numero</li>";
    } ?>
</ul>