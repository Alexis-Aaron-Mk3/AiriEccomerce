<?php
	error_reporting(0); 

	session_start(); //Iniciar una nueva sesión o reanudar la existente
    session_destroy();
	session_start();

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
			
			if($objJSON["password2"] == $_POST["password2"]){
				ingresoUsuario( $objJSON["email"],$objJSON["nom"],$objJSON["ape"] );
			}else{
				echo "<script>alert('La contraseña es incorrecta!')</script>";
			}
			
			
			
		}else{
			echo "<script>alert('El Usuario NO existe, pruebe con otro correo!')</script>";
		}
	}
	

	function ingresoUsuario($email,$nombre,$apellido){
	
		$_SESSION["email"]=$email;
		$_SESSION["nombre"]=$nombre;
		$_SESSION["apellido"]=$apellido;
		header("Location: home.php");
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

  <!-- MODAL -->
  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<h4 class="modal-title" id="myModalLabel">Terminos y Condiciones&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</h4>
			</div>
			<div class="modal-body">
	1. INTRODUCCIÓN
Los presentes términos y condiciones (las “Condiciones Techteam”), junto con la Política de Privacidad y la Política de Cookies (en adelante conjuntamente, las “Políticas de Protección de Datos”), regulan el acceso y el uso del portal web “Techteam” y todas y cada una de las páginas web localizables bajo el dominio “techteams.es”, y sus respectivos subdominios y subdirectorios (en adelante, el “Sitio Web” o “Techteam”). 

El Sitio Web es operado por INDUSTRIA DE DISEÑO TEXTIL, S.A. (INDITEX, S.A.), sociedad de nacionalidad española, con domicilio social en Avda. de la Diputación, Edificio Inditex, 15143 Arteixo (A Coruña), número de identificación fiscal A-15075062, inscrita en el Registro Mercantil de A Coruña Tomo 964 del Archivo, Sección General, Folio 17, Hoja C-3342, Inscripción 1ª (en adelante, “INDITEX”). INDITEX es la sociedad cabecera de un grupo de empresas (en adelante, el “Grupo INDITEX”).  

La finalidad del Sitio Web es facilitar al usuario el acceso a ofertas de empleo de las distintas sociedades del Grupo INDITEX y permitir su inscripción en las vacantes que resulten de tu interés y en su caso, para llevar a cabo el proceso de selección.

El acceso al Sitio Web y la utilización de sus contenidos y servicios implica la adhesión plena y sin reservas a las Condiciones Techteam vigentes y publicadas en el Sitio Web en el momento que el usuario acceda al mismo.

La última versión de las Condiciones Techteam podrá ser consultada siempre que se desee en el Sitio Web. Si el usuario decide no aceptar las Condiciones Techteam vigentes deberá abstenerse de acceder al Sitio Web y/o utilizar los contenidos y/o servicios en ella disponibles.

INDITEX se reserva la facultad de modificar, en cualquier momento, y sin aviso previo, las presentes Condiciones Techteam. 

2. OBJETO DE LAS CONDICIONES TECHTEAM
2.1. Constituye el objeto de las presentes Condiciones Techteam regular el acceso y la utilización del Sitio Web así como la relación entre los usuarios e INDITEX derivada del uso del Sitio Web. 

A los efectos de las presentes Condiciones Techteam se entenderá como Sitio Web: (a) la apariencia externa (o “look and feel”) de los interfaces de pantalla, tanto de forma estática como de forma dinámica (es decir, el árbol de navegación), (b) los elementos integrados en los interfaces de pantalla y en el árbol de navegación, incluyendo a título enunciativo y no limitativo, aquellos textos, imágenes, sonidos, bases de datos, productos multimedia, interpretaciones, ejecuciones artísticas, fijaciones, fotografías, señales de radiodifusión, y en general, todas aquellas creaciones y objetos expresados por cualquier medio o soporte, actualmente conocido o que se invente en el futuro sean o no objeto de protección por el ordenamiento jurídico vigente en materia de propiedad intelectual, industrial o por cualesquiera otros sistemas jurídicos análogos (los “Contenidos”) y todos aquellos servicios o recursos en línea que en su caso ofrezca a los usuarios (los “Servicios”). 

2.2. Nos reservamos la facultad de modificar las presentes Condiciones si bien las modificaciones introducidas no tendrán carácter retroactivo, salvo que las circunstancias concretas así lo dispusieran. Si Usted no está de acuerdo con las modificaciones introducidas, le recomendamos no hacer uso de nuestra página web. El usuario reconoce y acepta que en cualquier momento INDITEX pueda interrumpir, desactivar y/o cancelar cualquiera de los Contenidos y/o Servicios que se integran en el Sitio Web o el Sitio Web en cuestión. En este sentido, el usuario reconoce y acepta que el presente Sitio Web puede tener naturaleza permanente o temporal y por tanto ser retirado, suspendido o reiniciado en cualquier momento (y, ya sea de nuevo, con carácter permanente o temporal) sin necesidad de preaviso ni notificación alguna. 
  <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
		 <button type="button" haref="index.php" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
			</div>
		</div>
	</div>
</div>

        <!-- Breadcrumb area Start -->

        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a >Home</a></li>
                            <li class="current"><span>Login Register</span></li>
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
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-md-6 mb-sm--30">
                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20">Login</h4>
                                <form method="POST" class="form form--login">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                        <input type="text" name="email" class="form__input form__input--3" id="username_email" name="username_email">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label form__label--2" for="password">Password <span class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password" name="password2">
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group">
                                            <input  name="form_login" type="submit"  href="home2.php" value="Log in" class="btn btn-submit btn-style-1">
								             <br>
											 <br>
											
                                        </div>
                                        <div class="form__group">
                                            <label class="form__label checkbox-label" for="store_session">
                                                <input type="checkbox" name="store_session" id="store_session">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="register-box">
                                <h4 class="mb--35 mb-sm--20">Register</h4>
                                <form class="form form--login" method="POST">
                                    <div class="form__group mb--20"> 
									 <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Name <span ">*</span></label>
                                        <input type="text" name="nom" class="form__input form__input--3" id="username_email" name="username_email">
                                    </div>
									<div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">>Last name <span ">*</span></label>
                                        <input type="text" name="ape" class="form__input form__input--3" id="username_email" name="username_email">
                                    </div>
                                        <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                        <input type="email" name="email" class="form__input form__input--3" id="email" name="email">
                                    </div>
                                    <div class="form__group mb--20">
									<label class="form__label form__label--2" for="password">Num. Targeta De Credito <span class="required">*</span></label>
                                        <input type="password2" class="form__input form__input--3" id="password2" name="credito">
                                       <label class="form__label form__label--2" for="password">Password <span class="required">*</span></label>
                                        <input type="password2" class="form__input form__input--3" id="password2" name="password2">
										 <label class="form__label form__label--2" for="password">Confirmar Password <span class="required">*</span></label>
                                        <input type="password2" class="form__input form__input--3" id="password2" name="password2">
                                    </div>
									<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
											Leer Terminos y Condiciones
										</button>
										<br></br>
                                    <p class="privacy-text mb--20">Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestra política de privacidad..</p>
									<div class="form__group">
                                        <input type="submit" href="index.php" value="Register" class="btn btn-submit btn-style-1" name="form_register">
										
                                    </div>
                                </form>
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
        