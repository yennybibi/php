<?php
require_once('clases/conexion.php');
require_once('clases/sentencia.php');
session_start();

//echo $_SESSION['usuario'];
/*if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != "") {
	$con_u = "select * from usuario where id_usuario = ".$_SESSION['usuario'];
	$resultado = new sen($con_u, $conexion, 'usuario');
	$resultado->con();
	
	$usuario = mysqli_fetch_array($resultado->res);
}else {
	header("Location: index.php");	
}*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>APLICACIÓN DE PEDIDOS</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<script src="ckeditor/ckeditor.js"></script>


</head>
<body>

<h1>SISTEMA DE PEDIDOS</h1>
<div id="cerrar">
		
		<a href="clases/salir.php">Cerrar Sesión</a>
</div>