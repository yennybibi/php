<?php
require_once('clases/conexion.php');
require_once('clases/sentencia.php');
session_start();

if(isset($_POST['button'])) {
	
	$email = $_POST['email'];
	$clave = sha1($_POST['clave']);
	
	$sql = "select * from usuario where email = '$email' AND clave = '$clave'";
	
	$consulta = new sen($sql, $conexion, 'usuario');
	$consulta->con();
	
	$usuario = mysqli_fetch_array($consulta->res);
	
	if( $usuario['email'] != "" ) {
		$_SESSION['usuario'] = $usuario['id_usuario'];
		header("Location: principal.php?da=1"); 
	}else{
		header("Location: index.php"); 
	}	
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>LOGIN APLICACIÓN</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="node_modules/bootstrap/dist/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<body>

<h2>LOGIN APLICACIÓN</h2>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="button" class="btn btn-primary">Submit</button>
</form>
</form>
</center>
</body>
</html>