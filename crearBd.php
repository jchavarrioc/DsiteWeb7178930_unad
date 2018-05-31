<?php 
	
	include_once ('./conexion.php');
	$objetoconexion = new conexion();
	$conn = $objetoconexion->conectar();


	$sql = "CREATE DATABASE bdunad18";
	if (mysqli_query($conn, $sql)) {
	    echo "<script>
                alert('Base de datos creada satisfactoriamnte');
                window.location= 'administrador.php'
    		</script>";
	} else {
	    echo "<script>
                alert('Ya se creo la base de datos');
                window.location= 'administrador.php'
    		</script>";
	}

	$objetoconexion->desconectar($conn);

?>
