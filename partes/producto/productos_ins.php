<div id="formulario">
	<form action="principal.php?da=2" method="post" enctype="multipart/form-data">
	
	<input type="text" name="nombre" required="required" placeholder="Insertar producto"><br>
	<input type="text" name="referencia" required="required" placeholder="Insertar la referencia"><br>
	<input type="number" name="precio" required="required" placeholder="Precio"><br>
	<input type="text" name="peso" required="required" placeholder="Insertar el peso"><br>
	<select>
    <option value="1">Opción 1</option>
    <option value="2" selected>Opción 2</option> <!-- Opción por defecto -->
    <option value="3">Opción 3</option>
	<input type="text" name="stock" required="required" placeholder="Insertar el stock"><br>
	<input type="date" name="fecha" min="2018-03-25" max="2018-05-25" step="2" />
  <input type="time" name="hora" min="18:00" max="21:00" step="3600" />
	<textarea name="descri" rows="4" cols="50" required="required" placeholder="descripcion" class="ckeditor"></textarea><br>
	<input type="submit" name="boton" value="Guardar">
	
	
	</form>
</div>

<?php
//preguntar si el boton se presiono ----------
	if(isset($_POST['boton'])) {
		//capturan todos los datos enviados
		$nombre = $_POST['nombre'];
		$referencia = $_POST['referencia'];
		$precio = $_POST['precio'];
		$peso = $_POST['peso'];
		$categoria = $_POST['categoria'];
		$stock = $_POST['stock'];
		$stock = $_POST['fecha'];
		
		
		
		
		//grabo dentro de la base de datos
		$insertar = "insert into productos(nombre,referencia,precio, peso, categoria,stock,fecha) values('$nombre,'$referencia, $precio,'$peso,'$categoria,'$stock,'$fecha')";
		
		$ins = new sen($insertar, $conexion, 'productos');		
		$ins->insedbo();
		
		
		
		header("Location: principal.php?da=1");
				
	}

?>









