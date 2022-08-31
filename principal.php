<nav></nav><?php require_once('partes/head.php'); ?>

<?php require_once('partes/menu.php'); ?>

<h3>Lista de productos</h3>
<section>

<?php
	
$dato = $_GET['da'];

	switch($dato) {
		case 1:
			require_once('partes/producto/productos.php');
			break;
		case 2:
			require_once('partes/producto/productos_ins.php');
			break;
		case 3:
			require_once('partes/producto/productos_ed.php');
			break;
		case 4:
			require_once('partes/producto/productos_bo.php');
			break;
			
	}

?>

</section>

</body>
</html>