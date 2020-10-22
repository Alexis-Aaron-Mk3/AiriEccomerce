<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>

<body>
    <?php
	
        // Variables para los valores de "nombre", "apellidos" y "domicilio"
        $nombre = $_REQUEST["nombre"];
        $apellidos = $_REQUEST["apellidos"];
        $domicilio = $_REQUEST["domicilio"];

        // Variables para la fecha y hora actuales
        $fecha = date("d/m/Y");
        $hora = date("H:i:s");

        // Constantes de los precios
        define("precio1", 1.75);
        define("precio2", 1.05);

        // Vector de variables para almacenar el precio de cada producto
        $totalProducto = array();

        // Abre el archivo numerofactura.txt 
        $leerNumeroFactura = fopen("email.txt", "rb");

        // Variable $factura para leer el contenido de "leerNumeroFactura"
        $factura = fread($email, filesize("email.txt"));

        //Cierra el archivo
        fclose($leerNumeroFactura);

        // Incrementamos el valor leído previamente
        $factura++;

        // Abrimos el archivo otra vez
        $leerNumeroFactura = fopen("email.txt", "wb");

        // Escribimos el valor de la variable "$factura" para la próxima
        fwrite($leerNumeroFactura, $factura);

        // Cierra el archivo
        fclose($leerNumeroFactura);

        // Cuerpo de la factura simplificada
        if (isset($_REQUEST["producto1"])) {
            $producto1 = $_REQUEST["producto1"];
            $cantidad1 = $_REQUEST["cantidad1"];
            $totalProducto[0] = precio1 * $cantidad1;
        } else {
            $producto1 = "Producto no seleccionado";
            $cantidad1 = 0;
            $totalProducto[0] = 0;
        }

        if (isset($_REQUEST["producto2"])) {
            $producto2 = $_REQUEST["producto2"];
            $cantidad2 = $_REQUEST["cantidad2"];
            $totalProducto[1] = precio2 * $cantidad2;
        } else {
            $producto2 = "Producto no seleccionado";
            $cantidad2 = 0;
            $totalProducto[1] = 0;
        }

        // Pie de la factura simplificada
        $total = 0;
        for ($i = 0; $i < count($totalProducto); $i++) {
            $total += $totalProducto[$i];
        }

        $IVA = $total * 0.04;
        $subtotal = $total - $IVA;

        $datos = fopen("datos.txt", "ab");
    
        // Escribe los datos introducidos separados por ";"
        fwrite($datos, $factura.";".$fecha.";".$hora.";".$nombre.";".$apellidos.";".$domicilio.";".$producto1.";".$cantidad1.";".$totalProducto[0].";".$producto2.";".$cantidad2.";".$totalProducto[1].";".$subtotal.";".$IVA.";".$total."\n");
        
        fclose($datos);
    
        // Escribe la factura simplificada en la pantalla
        echo "<h2>Factura generada correctamente<br><br>
        
        FACTURA SIMPLIFICADA nº$factura<br>
        Cliente: $nombre $apellidos<br>
        Domicilio: $domicilio<br>
        $fecha $hora<br>
        ---------------------------------\n<br>
        $producto1 \n         $cantidad1" . " x " . precio1 . " = " . "$totalProducto[0]\n<br>
        $producto2 \n         $cantidad2" . " x " . precio2 . " = " . "$totalProducto[1]\n<br>
        ---------------------------------<br>
        BASE: $subtotal €<br>
        IVA 4%: $IVA €<br>
        TOTAL: $subtotal x $IVA = $total €<br>
        </h2>";
		
		
		
		$datos = fopen("datos.txt", "ab");
 
 // Escribe los datos introducidos separados por ";"
 fwrite($datos, $factura.";".$fecha.";".$hora.";".$nombre.";".$apellidos.";".$domicilio.";".$producto1.";".$cantidad1.";".$totalProducto[0].";".$producto2.";".$cantidad2.";".$totalProducto[1].";".$subtotal.";".$IVA.";".$total."\n");
 
 fclose($datos);
 
 
 
 
 
 // Escribe la factura simplificada en la pantalla
 echo "<h2>Factura generada correctamente<br><br>
 
 FACTURA SIMPLIFICADA nº$factura<br>
 Cliente: $nombre $apellidos<br>
 Domicilio: $domicilio<br>
 $fecha $hora<br>
 ---------------------------------\n<br>
 $producto1 \n $cantidad1" . " x " . precio1 . " = " . "$totalProducto[0]\n<br>
 $producto2 \n $cantidad2" . " x " . precio2 . " = " . "$totalProducto[1]\n<br>
 ---------------------------------<br>
 BASE: $subtotal €<br>
 IVA 4%: $IVA €<br>
 TOTAL: $subtotal x $IVA = $total €<br>
 </h2>";

        ?>
		
</body>
</html>