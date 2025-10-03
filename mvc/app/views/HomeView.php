<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h1 class="text-3xl font-bold text-blue-600 mb-4 text-center">🏠 Home</h1>
        <h2 class="text-red-500 text-center mb-6"><?= $msj ?? "" ?></h2>

        <form action="Datos" method="post" class="space-y-4">
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="dui" class="block text-sm font-medium text-gray-700">DUI</label>
                <input type="text" name="dui" id="dui"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="capitalPrestamo" class="block text-sm font-medium text-gray-700">Capital del préstamo</label>
                <input type="text" name="capitalPrestamo" id="capitalPrestamo"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="interesMensual" class="block text-sm font-medium text-gray-700">Interés mensual</label>
                <input type="text" name="interesMensual" id="interesMensual"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label for="numeroCuotas" class="block text-sm font-medium text-gray-700">Número de cuotas</label>
                <input type="text" name="numeroCuotas" id="numeroCuotas"
                    class="mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-700 transition">
                Enviar
            </button>
        </form>
    </div>
</body>

</html>
