<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeromexico</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="contenedor">
        <h1>VENTA DE BOLETOS</h1>
        <form class="formulario" action="guardar.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" maxlength="40" required> <br><br>

            <label for="boleto">Boleto</label>
            <input type="text" id="boleto" name="boleto" maxlength="4" required> <br><br>

            <label for="destino">Destino</label>
            <input type="text" id="destino" name="destino" maxlength="40" required> <br><br>

            <button class="submit" type="submit">Enviar datos</button>
        </form>
    </div>
</body>
</html>