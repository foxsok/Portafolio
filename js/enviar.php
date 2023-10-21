<?php 
	$nombre = $_POST['name'];
	$email = $_POST['email'];
    $tel = $_POST['phone'];
	$asunto = 'message';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('david.paezrenteria@cesunbc.edu.mx', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>