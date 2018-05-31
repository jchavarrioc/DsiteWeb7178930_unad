<?php 

include_once ('conexionBd.php');
	$conectar = new conexionBd();
	$conexion = $conectar->conectar();

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$resultado = mysqli_query($conexion , "SELECT * FROM usuario WHERE nombre_usuario = '$usuario'");

	if($row = mysqli_fetch_array($resultado) ){
		if($row['contraseña_usuario'] == $password){
			session_start();
			$_SESSION["usuario"] = $usuario;
			header("location: administrador.php");
			session_start();
		if (!isset($_SESSION['tiempo'])) {
		    $_SESSION['tiempo']=time();
		}
		else if (time() - $_SESSION['tiempo'] > 40) {
		    session_destroy();
		    /* Aquí lo redirecciono a la url especifica */
		    header("Location: index.html");
		    die();  
		}
		$_SESSION['tiempo']=time();
		
		}else{
		
			echo "<script>
	                alert('usuario o contraseña incorrectos');
	                window.location= 'index.html'
	    		</script>";
		}

	}




 ?>