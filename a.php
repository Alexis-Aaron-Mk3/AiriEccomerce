$query = "INSERT INTO Socios (CI,password,NOMBRE,APELLIDO,GENERO,FECHANACIMIENTO,DIRECCION,CP,CIUDAD,PAIS,CELULARA,CELULARB,EMAIL) VALUES ('$CI','$password','$NOMBRE','$APELLIDO','$GENERO','$FECHANACIMIENTO','$DIRECCION','$CP','$CIUDAD','$PAIS','$CELULARA','$CELULARB','$EMAIL')";  
MySQL_query($query) or die('Query "' . $query . '" failed: ' . MySQL_error());  

if(empty($_POST['register-user'])) {

   /* Form Required Field Validation */
   foreach($_POST as $key=>$value) {
      if(empty($_POST[$key])) {
        $error_message = "Todos los datos son obligatorios. All Fields are required";
        break;
      }
   }

   /* Password Matching Validation */
   if($_POST['password'] != $_POST['confirm_password']){ 
     $error_message = 'Las claves deben ser iguales. Passwords should be same<br>'; 
   }

   /* Email Validation */
   if(!isset($error_message)) {
       if (!filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL)) {
         $error_message = "El email no es válido. Invalid Email Address";
       }
   }

   /* Validation to check if gender is selected */
   if(!isset($error_message)) {
     if(!isset($_POST["GENERO"])) {
       $error_message = " Todos los datos son obligatorios. All Fields are required";
     }
   }

   /* Validation to check if Terms and Conditions are accepted */
   if(!isset($error_message)) {
      if(!isset($_POST["terms"])) {
        $error_message = "Debe aceptar las condiciones del registro";
      }
   } 

}