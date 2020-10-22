<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title>Factura simplificada</title>
</head>

<body>

    <form id="formulario" method="POST" action="datos.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="" required>
        <p>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value="" required>
        <p>
        <label for="domicilio">Domicilio de entrega:</label>
        <input type="text" name="domicilio" id="domicilio" value="" required>
        <p>
        <label for="producto1">Patatas 1,75 €/kg.</label>
        <input type="checkbox" name="producto1" id="producto1" value="Patatas">
        <input type="number" name="cantidad1" id="cantidad1" value="" min="0" placeholder="Escribe la cantidad">
        <p>
        <label for="producto2">Cebollas 1,05 €/kg.</label>
        <input type="checkbox" name="producto2" id="producto2" value="Cebollas">
        <input type="number" name="cantidad2" id="cantidad2" min="0"  placeholder="Escribe la cantidad">
        <div class="input">
            <input type="submit" value="Enviar y calcular">
            <input type="reset" value="Limpiar formulario">
        </div>
</form>
</body>
</html>