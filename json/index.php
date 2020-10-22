<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Prueba JSON - PHP</title>
    </head>
    <body>
        <h1>Datos en JSON</h1>
        <?php
        $contenido = file_get_contents("empleados.json");
        $contenido = $contenido;
        $datos = json_decode($contenido, true);
        $hay = count($datos["empleados"]);
        $trabajadores = $datos["empleados"];
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha Ingreso</th>
                    <th>Puesto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($trabajadores as $empleado){
                    echo "<tr>";
                    echo "<td>$empleado[ID]</td>";
                    echo "<td>$empleado[Nombre]</td>";
                    echo "<td>$empleado[Ingreso]</td>";
                    echo "<td>$empleado[Puesto]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Empleados en total <strong><?= $hay; ?></strong></p>
    </body>
</html>







