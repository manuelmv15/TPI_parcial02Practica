<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1>Home</h1>
   <form action="Datos" method="post">
        <div>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="dui">dui</label>
            <input type="text" name="dui" id="dui">
        </div>
         <div>
            <label for="capitalPrestamo">capital del préstamo</label>
            <input type="text" name="capitalPrestamo" id="capitalPrestamo">
        </div>

        <div>
            <label for=" interesMensual">interés mensual</label>
            <input type="text" name="interesMensual" id="interesMensual">
        </div>
        <div>
            <label for="numeroCuotas">número de cuotas</label>
            <input type="text" name="numeroCuotas" id="numeroCuotas">
        </div>
        <button type="submit">enviar</button>
    </form>
</body>

</html>