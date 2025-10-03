<?php

$cuota = CuotaMensual($capitalPrestamo, $interesMensual, $numeroCuotas);

function Interes($capital, $interes)
{
    return $capital * $interes;
}

function capitalAbonado($cuota,  $interes)
{
    return $cuota -  $interes;
}

function CuotaMensual($P, $i, $n)
{
    return $P * ($i * (1 + $i) ** $n) / ((1 + $i) ** $n - 1);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col items-center py-10">

    <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">
            <a href="Home" class="hover:underline">🏠 Home</a>
        </h1>

        <div class="mb-6 space-y-2">
            <h2 class="text-lg font-semibold">👤 Nombre: <span class="font-normal"><?= $nombre ?></span></h2>
            <h2 class="text-lg font-semibold">📧 Email: <span class="font-normal"><?= $email ?></span></h2>
            <h2 class="text-lg font-semibold">🪪 Dui: <span class="font-normal"><?= $dui ?></span></h2>
        </div>

        <h2 class="text-2xl font-bold text-gray-700 mb-4">📊 Plan de Amortización</h2>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-2 px-4">Mes</th>
                        <th class="py-2 px-4">Cuota</th>
                        <th class="py-2 px-4">Intereses</th>
                        <th class="py-2 px-4">Capital</th>
                        <th class="py-2 px-4">Saldo Pendiente</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    for ($i = 1; $i <= $numeroCuotas; $i++) {
                        $interes = Interes($capitalPrestamo, $interesMensual);
                        $capitalAbonado = capitalAbonado($cuota, $interes);

                        if ($capitalPrestamo >= $capitalAbonado) {
                            $capitalPrestamo -= $capitalAbonado;
                        } else {
                            $capitalPrestamo = 0;
                        }
                    ?>
                        <tr class="hover:bg-gray-100 transition">
                            <td class="py-2 px-4 text-center font-semibold"><?= $i ?></td>
                            <td class="py-2 px-4 text-right"><?= number_format($cuota, 2) ?></td>
                            <td class="py-2 px-4 text-right text-red-500"><?= number_format($interes, 2) ?></td>
                            <td class="py-2 px-4 text-right text-green-600"><?= number_format($capitalAbonado, 2) ?></td>
                            <td class="py-2 px-4 text-right font-bold"><?= number_format($capitalPrestamo, 2) ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>