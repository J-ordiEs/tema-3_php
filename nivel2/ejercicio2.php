<?php

/**
 * - Ejercicio 2
Crea un programa que desliza las notas de los/as alumnos/as de una clase. Para ello deberemos utilizar un array asociativo donde
la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

Además, crea una función que, dadas las notas de todos los/as alumnos/as, nos muestre tanto la media de la nota de cada alumno,
como la nota media de la clase entera.


 */

$alumnos = [
    "alumno1" => [
        "nota1" => rand(0, 10),
        "nota2" => rand(0, 10),
        "nota3" => rand(0, 10),
        "nota4" => rand(0, 10),
        "nota5" => rand(0, 10),
    ],
    "alumno2" => [
        "nota1" => rand(0, 10),
        "nota2" => rand(0, 10),
        "nota3" => rand(0, 10),
        "nota4" => rand(0, 10),
        "nota5" => rand(0, 10),
    ],
    "alumno3" => [
        "nota1" => rand(0, 10),
        "nota2" => rand(0, 10),
        "nota3" => rand(0, 10),
        "nota4" => rand(0, 10),
        "nota5" => rand(0, 10),
    ],
    "alumno4" => [
        "nota1" => rand(0, 10),
        "nota2" => rand(0, 10),
        "nota3" => rand(0, 10),
        "nota4" => rand(0, 10),
        "nota5" => rand(0, 10),
    ],
    "alumno5" => [
        "nota1" => rand(0, 10),
        "nota2" => rand(0, 10),
        "nota3" => rand(0, 10),
        "nota4" => rand(0, 10),
        "nota5" => rand(0, 10),
    ],
];

function promedioCLase($alumnos): void
{
    $result = 0;
    $result2 = 0;
    foreach ($alumnos as $alumno) {
        $result2 += count($alumno);
        foreach ($alumno as $nota) {

            $result += $nota;
        }
    }
    echo $result / $result2;
}

?>
<style type="text/css">
    .tg {
        margin: 0 auto;
        border-collapse: collapse;
        border-color: #9ABAD9;
        border-spacing: 0;
    }

    .tg td {
        background-color: #EBF5FF;
        border-color: #9ABAD9;
        border-style: solid;
        border-width: 1px;
        color: #444;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        background-color: #409cff;
        border-color: #9ABAD9;
        border-style: solid;
        border-width: 1px;
        color: #fff;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-b0xd {
        border-color: inherit;
        font-family: Arial, Helvetica, sans-serif !important;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }
</style>
<table class="tg">
    <thead>
        <tr>
            <th class="tg-b0xd">clase <?= promedioCLase($alumnos); ?></th>
            <th class="tg-b0xd">nota1</th>
            <th class="tg-b0xd">nota2</th>
            <th class="tg-b0xd">nota3</th>
            <th class="tg-b0xd">nota4</th>
            <th class="tg-b0xd">nota5</th>
            <th class="tg-b0xd">Promedio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tg-b0xd">alumno1</td>
            <td class="tg-b0xd"><?= $alumnos['alumno1']['nota1'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno1']['nota2'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno1']['nota3'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno1']['nota4'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno1']['nota5'] ?></td>
            <td class="tg-b0xd"><?= array_sum($alumnos['alumno1']) / count($alumnos['alumno1']) . "<br>"; ?></td>
        </tr>
        <tr>
            <td class="tg-b0xd">alumno2</td>
            <td class="tg-b0xd"><?= $alumnos['alumno2']['nota1'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno2']['nota2'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno2']['nota3'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno2']['nota4'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno2']['nota5'] ?></td>
            <td class="tg-b0xd"><?= array_sum($alumnos['alumno2']) / count($alumnos['alumno2']) . "<br>"; ?></td>
        </tr>
        <tr>
            <td class="tg-b0xd">alumno3</td>
            <td class="tg-b0xd"><?= $alumnos['alumno3']['nota1'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno3']['nota2'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno3']['nota3'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno3']['nota4'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno3']['nota5'] ?></td>
            <td class="tg-b0xd"><?= array_sum($alumnos['alumno3']) / count($alumnos['alumno3']) . "<br>"; ?></td>
        </tr>
        <tr>
            <td class="tg-b0xd">alumno4</td>
            <td class="tg-b0xd"><?= $alumnos['alumno4']['nota1'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno4']['nota2'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno4']['nota3'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno4']['nota4'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno4']['nota5'] ?></td>
            <td class="tg-b0xd"><?= array_sum($alumnos['alumno4']) / count($alumnos['alumno4']) . "<br>"; ?></td>
        </tr>
        <tr>
            <td class="tg-b0xd">alumno5</td>
            <td class="tg-b0xd"><?= $alumnos['alumno5']['nota1'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno5']['nota2'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno5']['nota3'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno5']['nota4'] ?></td>
            <td class="tg-b0xd"><?= $alumnos['alumno5']['nota5'] ?></td>
            <td class="tg-b0xd"><?= array_sum($alumnos['alumno5']) / count($alumnos['alumno5']) . "<br>"; ?></td>
        </tr>
    </tbody>
</table>