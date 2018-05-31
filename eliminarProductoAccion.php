<?php 	

include_once ('conexionBd.php');
	$conectar = new conexionBd();
	$conexion = $conectar->conectar();

	$codigo = $_POST['codigo'];

	mysqli_query($conexion , "DELETE FROM tabla18 WHERE codigo ='$codigo' ");

	echo "<script>
                alert('Producto eliminado satisfactoriamente');
                window.location= 'productos.php'
    		</script>";

 ?>