<?php
	error_reporting(0); 
   
session_start(); //Iniciar una nueva sesión o reanudar la existente

  
	error_reporting(0);

	if(isset($_SESSION["email"])) {
		echo 'BIENVENIDO ' . $_SESSION["nombre"];
		
	}else{
	echo"<script>alert  ('USTED NO TIENE PERMISOS, REGRESEMOS A LOGIN ')</script> ";
	echo '<meta http-equiv="Refresh" content="0;URL=index.php">'; 
		die();
		

	
	}

	if(isset($_POST["new_register"])){
		//Alguien esta cambiando password
		
		if( usuarioExiste($_POST["email"]) ){
		
	
			if($objJSON["email"] == $_POST["email"]){
				ingresoUsuario( $objJSON["email"],$objJSON["nom"],$objJSON["ape"] );
			}else{
		
			}
		
		
		
		}else{
			$path = "DATA/" . $_POST["email"] . ".slm";
			$json_string = json_encode($_POST);
			saveData($path, $json_string ) ;
			echo "<script>alert('password cambiado con exito!')</script>";
			header( "refresh:.0;url=home.php" ); 
			ingresoUsuario($_POST["email"],$_POST["nom"],$_POST["ape"]);
			 
		}
		
	}
	
	
	if(isset($_POST["new_register"])){
		if(usuarioExiste($_POST["email"])){
			$path = "DATA/" . $_POST["email"] . ".slm";
			$json = file_get_contents($path);
			$objJSON = json_decode($json,true);
			
			
			if($objJSON["password2"] != $_POST["passwordviejo"]){
				$objJSON["password2"] = $_POST["passwordviejo"];
			
				ingresoUsuario( $objJSON["email"],$objJSON["nom"],$objJSON["ape"] );
			}else{
				echo "<script>alert('La contraseña es incorrecta!')</script>";
			}
			
			
			
		}else{
			echo "<script>alert('El Usuario NO existe, pruebe con otro correo!')</script>";
		}
	}
	

				
		
	function ingresoUsuario($email,$nombre,$apellido,$passwordviejo){
	
		$_SESSION["email"]=$email;
		$_SESSION["passwordviejo"]=$passwordviejo;
		$_SESSION["nombre"]=$nombre;
		$_SESSION["apellido"]=$apellido;
		header("Location: home.php");
		session_destroy();
		session_start();
		
	
	}
	
	function usuarioExiste($email){
		
		$exist = file_exists( "DATA/" . $passwordviejo. ".slm" );
		return $exist;
		
	}
	
	
	function saveData($path, $json_string){
		
			file_put_contents($path,$json_string);
			
			$obj = json_decode($json_string,true);
		
	}	
	

	
	include "_header.php";

?>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<h4 class="modal-title" id="myModalLabel">Politicas de SLM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
			</div>
			<div class="modal-body">
				TERMINOS Y CONDICIONES
Comercio Online (de aquí en adelante referido como “Comercio Online”) presenta sus políticas de uso, que deben ser observados por todos y cada uno de los clientes y visitantes (“Suscriptores”), en virtud del uso de servicios, la red y/o sistemas o programas (“Servicios”) propiedad de Comercio Online.

LEA ATENTAMENTE ESTAS POLITICAS DE USO ANTES DE USAR ESTE SERVICIO. Al usar el sitio de Comercio Online, usted acepta estas políticas de uso. Si no acepta dichos términos, no use el sitio de Comercio Online. Comercio Online se reserva el derecho, a su discreción, de cambiar, modificar, añadir o suprimir partes de los presentes términos en cualquier momento. El suscriptor debe revisar periódicamente si estos términos han cambiado. El uso continuo del sitio de Comercio Online después de la incorporación de cambios a los presentes términos implicará la aceptación de dichos cambios.
			</div>
		</div>
	</div>
</div>
<!-- Mobile Header area Start -->
        <header class="header-mobile">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-4">
                        <a href="index.html" class="logo-box">
                            <figure class="logo--normal">
                                <img src="assets/img/logo/logo.svg" alt="Logo">
                            </figure>
                        </a>
                    </div>
                    <div class="col-8">
                        <ul class="header-toolbar text-right">
                            <li class="header-toolbar__item user-info-menu-btn">
                                <a href="#">
                                    <i class="fa fa-user-circle-o"></i>
                                </a>
                                <ul class="user-info-menu">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Check Out</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html">Order tracking</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">compare</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                    <i class="dl-icon-cart4"></i>
                                    <sup class="mini-cart-count">2</sup>
                                </a>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#searchForm" class="search-btn toolbar-btn">
                                    <i class="dl-icon-search1"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="menu-btn"></a>                 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Mobile Navigation Start Here -->
                        <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="index.html">
                                        Home
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 01
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index.html">
                                                        Demo 01
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-02.html">
                                                        Demo 02
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-03.html">
                                                        Demo 03
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-04.html">
                                                        Demo 04
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-05.html">
                                                        Demo 05
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 02
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-06.html">
                                                        Demo 06
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-07.html">
                                                        Demo 07
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-08.html">
                                                        Demo 08
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-09.html">
                                                        Demo 09
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-10.html">
                                                        Demo 10
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 03
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-11.html">
                                                        Demo 11
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-12.html">
                                                        Demo 12
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-13.html">
                                                        Demo 13
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-14.html">
                                                        Demo 14
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-15.html">
                                                        Demo 15
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 04
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-16.html">
                                                        Demo 16
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-17.html">
                                                        Demo 17
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-18.html">
                                                        Demo 18
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-19.html">
                                                        Demo 19
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-20.html">
                                                        Demo 20
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-sidebar.html">
                                        Shop
                                        <span class="tip">Hot</span>
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Shop Layout
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        <span class="mm-text">FullWidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-sidebar.html">
                                                        <span class="mm-text">with Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-two-column.html">
                                                        <span class="mm-text">Two columns</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-three-column.html">
                                                        <span class="mm-text">Three columns</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="shop-no-gutter.html">
                                                        <span class="mm-text">Shop No Gutter</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Single Product
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="product-details.html">
                                                        <span class="mm-text">Simple 01</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-02.html">
                                                        <span class="mm-text">Simple 02</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-sticky.html">
                                                        <span class="mm-text">Sticky Info</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-gallery.html">
                                                        <span class="mm-text">Thumbnail Gallery</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-sidebar.html">
                                                        <span class="mm-text">Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-grouped.html">
                                                        <span class="mm-text">Grouped</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-affiliate.html">
                                                        <span class="mm-text">Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-configurable.html">
                                                        <span class="mm-text">Configurable</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Shop Pages
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="my-account.html">
                                                        My Account
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        Shopping Cart
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        Check Out
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        Wishlist
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="order-tracking.html">
                                                        Order tracking
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        compare
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="d-none d-lg-block banner-holder">
                                            <div class="megamenu-banner">
                                                <div class="megamenu-banner-image"></div>
                                                <div class="megamenu-banner-info">
                                                    <span>
                                                        <a href="shop-sidebar.html">woman</a>
                                                        <a href="shop-sidebar.html">shoes</a>
                                                    </span>
                                                    <h3>new <strong>season</strong></h3>
                                                </div>
                                                <a href="shop-sidebar.html" class="megamenu-banner-link"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-sidebar.html">
                                        Collections
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Pages
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="about-us.html">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team.html">
                                                Our teams
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">
                                                Contact us 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-us-02.html">
                                                Contact us 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                404 page
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faqs-page.html">
                                                FAQs page
                                            </a>
                                        </li>
                                        <li>
                                            <a href="coming-soon.html">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Blog
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">
                                                Blog Grid
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="blog-02-columns.html">
                                                        <span class="mm-text">Blog 02 Column</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-03-columns.html">
                                                        <span class="mm-text">Blog 02 Column</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog List
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="blog.html">
                                                        <span class="mm-text">Blog Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-standard.html">
                                                        <span class="mm-text">Blog Standard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-no-sidebar.html">
                                                        <span class="mm-text">Blog No Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog-masonary.html">
                                                Blog Masonary
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog Details
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="single-post.html">
                                                        <span class="mm-text">Single Post</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-post-sidebar.html">
                                                        <span class="mm-text">Single Post Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-instagram.html">
                                        New Look
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Navigation End Here -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->

        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--80 pt-md--60 pt-sm--40 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-12">
                            <div class="user-dashboard-tab flex-column flex-md-row">
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">tablero</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">pedidos</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#downloads" aria-controls="downloads" aria-selected="true">Descargas</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Direcciones</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">detalles de la cuenta</a>
                                    <a class="nav-link" href="index.php">Cerrar sesión</a>
                                </div>
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p>Hola <strong> <?php  echo $_SESSION["nombre"]; ?></strong> <br> <strong><?php echo "eres? </>" . $_SESSION["nombre"]; ?></strong><p> si no </p> <a href="index.php">Cerrar Session</a></p>
                                        <p>Desde el panel de su cuenta. puede comprobar fácilmente & amp; ver tu<a href="#">órdenes recientes </a>,administrar su <a href="#">Direcciones de envío y facturación</a> y <a href="#">
										edita tu contraseña y detalles de la cuenta</a>.</p>
                                    </div>
									<br>
									
                                    <div class="tab-pane fade" id="orders">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>...
                                            <a href="shop-sidebar.html">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column">$49.00 for 1 item</td>
                                                        <td><a href="product-details.html" class="btn btn-medium btn-style-1">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column">$49.00 for 1 item</td>
                                                        <td><a href="product-details.html" class="btn btn-medium btn-style-1">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="downloads">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-exclamation-circle"></i>No downloads available yet.</p>
                                            <a href="shop-sidebar.html">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Downloads</th>
                                                        <th>Expires</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="wide-column">Airi - Ecommerce Bootstrap Template</td>
                                                        <td>August 10, 2018 </td>
                                                        <td class="wide-column">Never</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="wide-column">Airi - Ecommerce Bootstrap Template</td>
                                                        <td>August 10, 2018 </td>
                                                        <td class="wide-column">Never</td>
                                                        <td><a href="#" class="btn btn-medium btn-style-1">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses">
                                        <p class="mb--20">The following addresses will be used on the checkout page by default.</p>
                                        <div class="row">
                                            <div class="col-md-6 mb-sm--20">
                                                <div class="text-block">
                                                    <h4 class="mb--20">Billing address</h4>
                                                    <a href="#">Edit</a>
                                                    <p>You have not set up this type of address yet.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-block">
                                                    <h4 class="mb--20">Shopping address</h4>
                                                    <a href="#">Edit</a>
                                                    <p>You have not set up this type of address yet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <form action="#" method="POST" class="form form--account">
                                            <div class="row grid-space-30 mb--20">
                                                <div class="col-md-6 mb-sm--20">
                                                    <div class="form__group">
                                                        <label class="form__label" for="f_name">First name <span class="required">*</span></label>
                                                        <input type="text" name="nom" id="f_name" class="form__input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form__group">
													
                                                        <label class="form__label" for="l_name">Last name <span class="required">*</span></label>
                                                        <input type="text" name="ape" id="l_name" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <<div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="new_pass">Num.Targeta De Credito)</label>
                                                            <input type="password" name="credito" id="new_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="email">Email Address <span class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
											
                                            <fieldset class="form__fieldset mb--20">
                                                <legend class="form__legend">Password change</legend>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="cur_pass">Current password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="passwordviejo" id="cur_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
												<div class="form__group mb--20">
                                       
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="new_pass">New password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="password2" id="new_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="conf_new_pass">Confirm new password</label>
                                                            <input type="password" name="password2" id="conf_new_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit"  href="home.php" name = "new_register" value="Save Changes" class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


<?php
include "_footer.php";

?>	