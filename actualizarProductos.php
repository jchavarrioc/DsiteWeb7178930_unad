<?php 
	
	include_once ('conexionBd.php');
	$conectar = new conexionBd();
	$conexion = $conectar->conectar();

	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$peso = $_POST['peso'];
	$marca = $_POST['marca'];
	$fabricante = $_POST['fabricante'];
	$caracteristicas = $_POST['caracteristicas'];

	mysqli_query($conexion , "UPDATE tabla18 SET codigo = '$codigo' , nombre = '$nombre' , peso = '$peso' , marca = '$marca' , fabricante = '$fabricante' , caracteristicas = '$caracteristicas' WHERE codigo = '$codigo'");

	echo "<script>
                alert('Producto modificado satisfactoriamente');
                window.location= 'productos.php'
    		</script>";

 ?>