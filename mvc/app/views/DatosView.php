<?php


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
            <tr>
                <th>cuota</th>
                <th>intereses</th>
                <th>capital</th>
                <th>saldo pendiente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= CueotaMensual($capitalPrestamo, $interesMensual, $numeroCuotas) ?></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
    </table>

</body>

</html>