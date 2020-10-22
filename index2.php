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
?>


 <!-- MODAL -->
  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			
			</div>
      </div>
			</div>
		</div>
	</div>
</div>

     <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Advanced Search Form</title>
</head>

<body>
	
			
    <div class="container" id="advanced-search-form">
		<a href="#" class="btn btn-default producto" precio="" titulo=""role="button">Informes de Compras</a></p>
			
   <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo2.css" type="text/css">
    <title>Factura simplificada</title>
</head>

<body>

    <form id="formulario" method="POST" action="datos.php">
        
	<div class="form">
      <h3>Registro de Compras</h3>
      <form action="">
        	<label for="nombre">Email:</label>
        <input type="text" name="email" id="nombre" value="" required>
        <p><label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="" required>
        <p>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value="" required>
        <p>
        <label for="domicilio">Domicilio de entrega:</label>
        <input type="text" name="domicilio" id="domicilio" value="" required>
        <p>
        <label for="producto1"> Limited edition v-neck t-shirt1 49$.</label>
        <input type="checkbox" name="producto1" id="producto1" value="Limited edition v-neck t-shirt1">
        <input type="number" name="cantidad1" id="cantidad1" value="Hig-Rise Skinny Jean" min="0" placeholder="Escribe la cantidad">
        <p>
        <label for="producto2"> Hig-Rise Skinny Jean 49$</label>
        <input type="checkbox" name="producto2" id="producto2" value="Hig-Rise Skinny Jean">
        <input type="number" name="cantidad2" id="cantidad2" min="0"  placeholder="Escribe la cantidad">
        <div class="input">
		
        <label for="producto3">Waxed-effect pleated skirt 49$</label>
        <input type="checkbox" name="producto3" id="producto3" value="Waxed-effect pleated skirt">
        <input type="number" name="cantidad3" id="cantidad3" value="" min="0" placeholder="Escribe la cantidad">
        <p>
        <label for="producto4">Chain print bermuda shorts 49$</label>
        <input type="checkbox" name="producto4" id="producto4" value="Chain print bermuda shorts">
        <input type="number" name="cantidad4" id="cantidad4" min="0"  placeholder="Escribe la cantidad">
        <div class="input">
		 <p>
        <label for="producto5">Check blazer 49$</label>
        <input type="checkbox" name="producto5" id="producto5" value="Check blazer">
        <input type="number" name="cantidad5" id="cantidad5" min="0"  placeholder="Escribe la cantidad">
        <div class="input">
            <input type="submit" ID="formulario" class="btn btn-submit btn-style-1"  value="Enviar y calcular">
            <input type="reset" class="btn btn-submit btn-style-1" value="Limpiar formulario">
        </div>
      </form>
    </div>
  </div>
</div>
		
          
</form>
</body>
</html>
           
        </form>
    </div>
</body>

</html>








				
            
                                        
		
        <!-- Main Content Wrapper Start -->


		

   

	<script src="minicart.js"></script>
	<script>
	  // configuración inicial del carrito 
	  paypal.minicart.render({
	  strings:{
	    button:''
	   ,buttonAlt: "Total"
	   ,subtotal: 'Total:'
	   ,empty: 'No hay productos en el carrito'
	  }
	  });
	  // Eventos para agregar productos al carrito
	  
	   $('.producto').click(function(e){
	       e.stopPropagation();
		    paypal.minicart.cart.add({
			business: 'uhperezoscar@gmail.com', // Cuenta paypal para recibir el dinero
			item_name: $(this).attr("titulo"),
			 amount: $(this).attr("precio"),
			 currency_code: 'USD',
			
			});
	   });
	  
	</script>
	
   <?php
	include "_footer.php";
?>