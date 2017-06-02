<?php

$nombre_var = $_POST['var1'];
$edad_var = $_POST['var2'];
$email_var = $_POST['var3'];
$ocupacion_var = $_POST['var4'];

$mensaje = 'Hola mi nombre es '.$nombre_var.' \n y mi edad es '.$edad_var.' \n tambien mi correo es '.$email_var.' \n y mi ocupación es '.$ocupacion_var;

//falta linea final de la practica (pendiente en clase)
$respuesta = mail('leon_acor@hotmail.com','mensaje enviado',$mensaje);
echo ($respuesta);
//función echo para desplegar texto en pantalla

?>
