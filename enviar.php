<?php
	$destino = "hmzpien@gmail.com";	
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $correo . "\nTeléfono " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Contacto", $contenido);
	echo "Correo Enviado Satisfactoriamente"
?>