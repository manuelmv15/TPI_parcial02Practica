<?php


$cuota = CueotaMensual($capitalPrestamo, $interesMensual, $numeroCuotas);




function Interes($capital, $interes) {
    return $capital * $interes;
}

function capitalAbonado($cuota, $capitalPrestamo,$interes){
    return $cuota - Interes($capitalPrestamo,$interes);
}

function capitalPendiente($capitalPendiente, $capitalAbonado){
return $capitalPendiente - $capitalAbonado;
}

function CueotaMensual($P, $i, $n)
{
    return $P * ($i * (1 + $i) ** $n) / ((1 + $i) ** $n - 1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1><a href="Home">Home</a></h1>


    <h2>Nombre: <?= $nombre ?></h2>
    <h2>Email: <?= $email ?></h2>
    <h2>Dui: <?= $dui ?></h2>


    <table>
        <thead>
            <tr> <th>Mes</th>
                <th>cuota</th>
                <th>intereses</th>
                <th>capital</th>
                <th>saldo pendiente</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($capitalPrestamo >0) {

                $i++;
                ?>
                

            <tr>
                <th> <?= $i ?></th>
                <th><?= $cuota ?></th>
                <th>intereses</th>
                <th>capital</th>
                <th><?= $capitalPrestamo ?></th>
            </tr>

                <?php 

                $capitalPrestamo =0;
                }?>
        </tbody>
    </table>

</body>

</html>