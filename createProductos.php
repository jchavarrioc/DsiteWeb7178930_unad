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

	mysqli_query($conexion , "INSERT INTO tabla18(codigo , nombre , peso , marca , fabricante , caracteristicas) VALUES('$codigo' , '$nombre' , '$peso' , '$marca' , '$fabricante' , '$caracteristicas')");

	echo "<script>
                alert('Producto registrado satisfactoriamente');
                window.location= 'productos.php'
    		</script>";

 ?>