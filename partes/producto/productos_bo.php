<?php
	
	$llave = $_GET ['llave'];
		
	$bor = "delete from productos where id_producto = $llave";
	$borrar = new sen($bor, $conexion, 'producto');
	$borrar->insedbo();
	
	header("Location: principal.php?da=1");	
	
?>