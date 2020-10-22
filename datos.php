
    <?php
	
	session_start();

	error_reporting(0);

	if(isset($_SESSION["email"])) {
		echo 'BIENVENIDO ' . $_SESSION["nombre"];
		
	}else{
	echo"<script>alert  ('USTED NO TIENE PERMISOS, REGRESEMOS A LOGIN ')</script> ";
	echo '<meta http-equiv="Refresh" content="0;URL=index.php">'; 
		die();
		

	
	}

include "_header.php";
       

	
        // Variables para los valores de "nombre", "apellidos" y "domicilio"
        $nombre = $_REQUEST["nombre"];
        $apellidos = $_REQUEST["apellidos"];
        $domicilio = $_REQUEST["domicilio"];
		
        // Variables para la fecha y hora actuales
		
        $fecha = date("d/m/Y");
        $hora = date("H:i:s");
        $precio = date("Pesos");
        // Constantes de los precios
        define("precio1", 49);
        define("precio2", 49);
		define("precio3", 49);
        define("precio4", 49);
		define("precio5", 49);
        

        // Vector de variables para almacenar el precio de cada producto
        $totalProducto = array();

        // Abre el archivo numerofactura.txt 
        $leerNumeroFactura = fopen("numerofactura.txt", "rb");

        // Variable $factura para leer el contenido de "leerNumeroFactura"
        $factura = fread($leerNumeroFactura, filesize("email.txt"));

        //Cierra el archivo
        fclose($leerNumeroFactura);

        // Incrementamos el valor leído previamente
        $factura++;

        // Abrimos el archivo otra vez
        $leerNumeroFactura = fopen("numerofactura.txt", "wb");

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
		if (isset($_REQUEST["producto3"])) {
            $producto3 = $_REQUEST["producto3"];
            $cantidad3 = $_REQUEST["cantidad3"];
            $totalProducto[2] = precio3 * $cantidad3;
        } else {
            $producto3 = "Producto no seleccionado";
            $cantidad3 = 0;
            $totalProducto[2] = 0;
        }
		if (isset($_REQUEST["producto4"])) {
            $producto4 = $_REQUEST["producto4"];
            $cantidad4 = $_REQUEST["cantidad4"];
            $totalProducto[3] = precio4 * $cantidad4;
        } else {
            $producto4 = "Producto no seleccionado";
            $cantidad4 = 0;
            $totalProducto[3] = 0;
        }
		if (isset($_REQUEST["producto5"])) {
            $producto5 = $_REQUEST["producto5"];
            $cantidad5 = $_REQUEST["cantidad5"];
            $totalProducto[4] = precio5 * $cantidad5;
        } else {
            $producto5 = "Producto no seleccionado";
            $cantidad5 = 0;
            $totalProducto[4] = 0;
        }

        // Pie de la factura simplificada
        $total = 0;
        for ($i = 0; $i < count($totalProducto); $i++) {
            $total += $totalProducto[$i];
        }

        $IVA = $total * 0.04;
        $subtotal = $total - $IVA;

        $datos = fopen("Registro/" . $_POST["email"] . ".slm", "ab");
    
        // Escribe los datos introducidos separados por ";"
        fwrite($datos,  $factura.";".fecha.";".$fecha.";".hora.";".$hora.";".nombre.";".$nombre.";".apelldo.";".$apellidos.";".direccion.";".$domicilio.";".Nombre_del_Producto.";".$producto1.";".Num._de_Piezas.";".$cantidad1.";".Precio.";".$totalProducto[0]."Pesos;".Nombre_del_Producto.";".$producto2.";".Num._de_Piezas.";".$cantidad2.";".Precio.";".$totalProducto[1]."Pesos;".Precio_Base.";".$subtotal.";".Mas_IVA.";".$IVA.";".tOTAL_a_Pagar.";".$total."Pesos\n");
        
        fclose($datos);
		
		
		
		
		$datos = fopen("datos.txt", "ab");


        ?>
		<html>
		 <link rel="stylesheet" href="/estilo3.css" type="text/css">
<!-- Button trigger modal -->
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" data-toggle="modal" data-target="#exampleModal">

</button>
<div  class="contenedor">
  <img src="\ticket.jpg"  width="800" height="800" />
  <div class="texto-encima"><?php      // Escribe la factura simplificada en la pantalla
        echo "<h2>Factura generada correctamente<br><br>
        
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FACTURA SIMPLIFICADA $factura<br>
        Cliente: $nombre $apellidos<br>
        Domicilio: $domicilio<br>
        $fecha $hora<br>
        ---------------------------------\n<br>
		Nombre De los  Producto <br>
        $producto1 \n         $cantidad1" . " x " . precio1 . " = " . "$totalProducto[0]\n<br>
        $producto2 \n         $cantidad2" . " x " . precio2 . " = " . "$totalProducto[1]\n<br>
		$producto3 \n         $cantidad3" . " x " . precio3 . " = " . "$totalProducto[2]\n<br>
        $producto4 \n         $cantidad4" . " x " . precio4 . " = " . "$totalProducto[3]\n<br>
		$producto5 \n         $cantidad5" . " x " . precio5 . " = " . "$totalProducto[4]\n<br>
        ---------------------------------<br>
        BASE: $subtotal €<br>
        IVA 4%: $IVA €<br>
        TOTAL: $subtotal + $IVA = $total Pesos<br>
        </h2>";
		?><!-- Button trigger modal -->
<br>
&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Hacer El Deposito
</button></div>
		<br>
		</br>
		<br>
		</br>
		<br>
		</br>
		<br>
		</br>
  <div class="centrado">Centrado</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">_____________________ NOTA ______________________ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Si el Registro de Compras esta Correcto, Por favor darle click en Pagar y si hay algun detalle en su Registro de Compras de click en  salir... GRACIAS
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <a class="btn btn-submit btn-style-1" href="pago.php">Hacer El Deposito</a>
      </div>
    </div>
  </div>
</div>
<br></br>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>

<body>
<br>


</body>
</html>

<?php
	include "_footer.php";
	
	
?>
   