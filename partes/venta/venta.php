<i></i><button name="botonc" type="button" onclick="document.location='principal.php?da=2'">
	Ingresar un nuevo producto
</button>

<br><br>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>Nombre</th>
		<th>Cantidad</th>
		
	</tr>
<?php
	$consulta = "select * from carta order by nombre";
	$co = new sen($consulta, $conexion, 'carta');
	$co->con();
	while($productos = mysqli_fetch_array($co->res)) {
?>
	<tr>
		<td><?php echo $nombres['nombre']; ?></td>
		<td><?php echo $referencia['cantidad']; ?></td>
		

		<td><a href="#">Editar</a></td>
		<td><a href="#" onclick="pregunta(<?php echo $productos['id_producto']; ?>,">Borrar</a></td>
	</tr>
<?php } ?>	
</table>


<script>
	function pregunta(id, imagen) {
		if (confirm('¿Esta seguro de borrar el nombre del precio?')) {
		}else{
			document.location="principal.php?da=1";		
		}
	}
</script>



