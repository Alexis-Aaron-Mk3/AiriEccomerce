<?php
	error_reporting(0); 

	
	session_start();


	if(isset($_SESSION["email"])) {
		echo 'BIENVENIDO ' . $_SESSION["nombre"];
		
	}else{
	echo"<script>alert  ('USTED NO TIENE PERMISOS, REGRESEMOS A LOGIN ')</script> ";
	echo '<meta http-equiv="Refresh" content="0;URL=index.php">'; 
		die();
		

	
	}
	

	if(isset($_POST["form_register"])){
		//Alguien se esta regstrando
		
		if( usuarioExiste($_POST["email"]) ){
		
			//decir que ya existe y salir
			echo "<script>alert('El Usuario ya existe, pruebe con otro correo!')</script>";
		
		
		
		}else{
			$path = "DATA/" . $_POST["email"] . ".slm";
			$json_string = json_encode($_POST);
			saveData($path, $json_string ) ;
			echo "<script>alert('Usuario creado con exito!')</script>";
			ingresoUsuario($_POST["email"],$_POST["nom"],$_POST["ape"]);
			
		}
		
	}
	
	
	if(isset($_POST["form_login"])){
		if(usuarioExiste($_POST["email"])){
			$path = "DATA/" . $_POST["email"] . ".slm";
			$json = file_get_contents($path);
			$objJSON = json_decode($json,true);
			
			if($objJSON["credito"] == $_POST["credito"]){
				ingresoUsuario( $objJSON["email"],$objJSON["nom"],$objJSON["ape"] );
				
			}else{
				echo "<script>alert('El Numero de Targeta NO Coincide!  Pruebe de nuevo....')</script>";
			}
			
			
			
		}else{
			echo "<script>alert('El Usuario NO existe')</script>";
		}
	}
	

	function ingresoUsuario($email,$nombre,$apellido){
	
		$_SESSION["email"]=$email;
		$_SESSION["nombre"]=$nombre;
		$_SESSION["apellido"]=$apellido;
		echo "<script>alert('El pago Fue un Exito!')</script>";
		header( "refresh:.1;url=home.php" );
		die();
	
	}
	
	function usuarioExiste($email){
		
		$exist = file_exists( "DATA/" . $email . ".slm" );
		return $exist;
		
	}
	
	
	function saveData($path, $json_string){
		
			file_put_contents($path,$json_string);
			
			$obj = json_decode($json_string,true);
		
	}	
		
	
include "_header.php";	
?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/shop-sidebar.php">REGRESAR A TINEDA </a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="btn btn-default producto" precio="49" titulo=""role="button">Informes de Compras</a></p>






<a href="#transactionCartDetails" class="transactionDetails scTrack:hermes-cartExpanded ng-scope" aria-controls="transctionCartDetails" aria-haspopup="true" role="button" ng-click="toggleCart($event)" focus-when="" focus-refresh-on="'cart-closed'" ng-if="showArrow" pa-marked="1">
            <!-- ngIf: showArrow --><cart-wrapper ng-if="showArrow" show-amt="showAmountInCartIcon" show-arrow="showArrow" token="token" ba-token="checkoutCart.getBaToken()" class="ng-scope ng-isolate-scope"><span class="totalWrapper clearfix" id="totalWrapper" content="">
    <span id="transactionCart" ng-class="{hasItems:showArrow}" class="hasItems">
        <span class="cartIcon" aria-label="Carrito de compras"></span>
        <!-- ngIf: showAmt && getAmount() --><span ng-if="showAmt &amp;&amp; getAmount()" class="ng-scope">








<span class="cartIcon" aria-label="Carrito de compras"></span>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<h4 class="modal-title" id="myModalLabel">Dusas, Aclaraciones o Telefono&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</h4>
			</div>
			<div class="modal-body">
				Ayuda
CONTACTO
TELÉFONO:
5229-3154

Ventas por teléfono, mesa de regalos, flores marca la opción 1
Seguimientos y estatus de pedido compras por Ventas por teléfono o internet marca la opción 3
Asistencia Ejecutivo marca la opción 8

HORARIOS:
Lunes a domingo de 9:00 a 21:00.

Estatus de tu compra:	 
Para preguntas relacionadas con tu órden, checa tu estatus en línea o contáctanos por teléfono 	 
 
			</div>
		</div>
	</div>
</div>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form method="POST" class="form form--login">
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		
		    <h2 class="text-center">formato de pago</h2>
			<br>
		    <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>
    <input type="text" class="form-control" name="nom" placeholder="">
    
  </div>
  <br></br>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">email</label>
    <input type="text" class="form-control" name="email" placeholder="">
    
  </div>
  <br></br>
<select name="OS">
   <option selected value="0"> Elige una opción de Banco </option>
       <optgroup label="Banco de Mexico"> 
       <option value="1">Santander</option> 
       <option value="2">BBV Bancomer</option> 
       <option value="3">Banamex</option> 
	   <option value="1">Banorte</option> 
       <option value="2">HSBC</option> 
   </optgroup> 
</select>
 <br></br>
 
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Ingrese el Numero de la Targeta de Credito</label>
    <input type="password" class="form-control" name="credito" placeholder="">
  </div>
  
  
    <div class="form-check">
     <input  name="form_login" type="submit"  value="Pagar" class="btn btn-submit btn-style-1">
	 <br></br>
     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
											Dusas o Aclaraciones
										</button>
										
  </div>
 
  
</form>
<BR>
<div class="copy-text"> <i class="fa fa-heart"></i> SLM SISTEMAS</div>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Paga en un dos por tres des tu Smartphone o Laptop.</h2>
            <p>Paga de manera fácil y segura en millones de tiendas en línea con solo proporcionar tu correo electrónico y Num. de Targeta de Credito. En SLM Sistemas no compartimos tu información financiera</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Paga en un dos por tres des tu Smartphone o Laptop.</h2>
            <p>Paga de manera fácil y segura en millones de tiendas en línea con solo proporcionar tu correo electrónico y Num. de Targeta de Credito. En SLM Sistemas no compartimos tu información financiera</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Paga en un dos por tres des tu Smartphone o Laptop.</h2>
            <p>Paga de manera fácil y segura en millones de tiendas en línea con solo proporcionar tu correo electrónico y Num. de Targeta de Credito. En SLM Sistemas no compartimos tu información financiera</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>		
<script src="minicart.js"></script>
	<script>
	  // configuración inicial del carrito 
	  paypal.minicart.render({
	  strings:{
	    button:'Salir'
		
	   ,buttonAlt: "Total"
	   ,subtotal: 'Total:'
	   ,empty: ''
	  }
	  });
	  
	  // Eventos para agregar productos al carrito
	  
	   $('.producto').click(function(e){
	       e.stopPropagation();
		    paypal.minicart.cart.add({
			item_name: $(this).attr("titulo"),
			 amount: $(this).attr("precio"),
			 currency_code: 'USD',
			
			});
	   });
	  
	</script>							

		<?php
	include "_footer.php";
?>
   