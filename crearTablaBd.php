<?php 
	include_once ('./conexionBd.php');
$objetoconexion = new conexionBd();
$conn = $objetoconexion->conectar();

// sql to create table
$sql = "CREATE TABLE tabla18 (
codigo VARCHAR(80) PRIMARY KEY,
nombre VARCHAR(30),
peso VARCHAR(10) NOT NULL,
marca VARCHAR(50),
fabricante VARCHAR(50),
caracteristicas VARCHAR(100)
)";

if (mysqli_query($conn, $sql)) {
    echo "<script>
                alert('Tabla 18 creada satisfactoriamente');
                window.location= 'administrador.php'
    		</script>";
} else {
    echo "<script>
                alert('Tabla 18 Ya fue creada anteriormente');
                window.location= 'administrador.php'
    		</script>";
}

mysqli_close($conn);
?>

