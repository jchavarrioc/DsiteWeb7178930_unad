<?php
session_start();
if (isset($_SESSION['usuario'])) {
	if (!isset($_SESSION['tiempo'])) {
		    $_SESSION['tiempo']=time();
		}
		else if (time() - $_SESSION['tiempo'] > 600) {
		    session_destroy();
		    /* Aquí redireccionas a la url especifica */
		    header("Location: index.html");
		    die();  
		}
		$_SESSION['tiempo']=time();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Productos</title>
	<link rel="stylesheet" href="">
	<style>

	/*estilos del navbar*/
	
			
			#header {
				margin:auto;
				width:900px;
				font-family:Arial, times new roman, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}

			.nav{
				margin-left: 12%;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#7F6964;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:150px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-150px;
				top:0px;
			}
	
	/*estilos del formulario*/	

		body{
			background-color:rgb(210, 216, 226)
		}
		
		.titulo{
			margin-top: 2%;
			text-align: center;
			color: #08256E;
		}

		.formulario{
			width:50%;
			height: 70%;
			margin-left: 25%;
			margin-top: 2%;
			float: left;
		}
		
		.formulario label{
			font-size: 20px;
		}

		.formulario input{
			margin-top: 2%;

		}

		#carac{
			margin-top: 2%;
			width: 45%;

		}

		#button{
			width: 15%;
			margin-top: 5%;
			margin-bottom: 2%;
			margin-left: 45%;
		}

		.reporte{
			height: 25%;
			background: #A8A8A8;
			border-color: black;
			margin-left: 43%;
		}

		.reporte:hover{
			height: 25%;
			background: #A8A8A8;
			border-color: red;
			color: white;
			margin-left: 43%;
		}
		
		
	</style>
</head>
<body>
	<div id="header">
			<ul class="nav">
				<h2>JUAN CARLOS CHAVARRIO CALLEJAS C.C. 7.178.930</h2>
				<h2>PROYECTO CONTROL DE INVENTARIOS ACTIVIDAD 2</h2>
				<li><a href="administrador.php">Administrador</a></li>
				<li><a href="">Productos</a>
					<ul>
						<li><a href="productos.php">Ingreso de Productos</a></li>
						<li><a href="consulta.php">Consulta de Productos</a></li>
						<li><a href="updateConsulta.php">Actualizacion de Productos</a></li>
						
							<ul>
								
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="reportes.php">Reportes Especiales</a>
					
				</li>
				<li><a href="calculadora.php">Operaciones Matematicas</a>
					<ul>
						<li><a href="calculo.php">Calculo de Numeros</a></li>
					</ul>
				</li>

			</ul>
		</div> 
		<br>
		<br>
	<hr>
	<div class="titulo">
		<h1>Reportes Especiales</h1>
	</div>
	<a href="generarReporte.php"><button class="reporte">Generar reporte de productos</button></a>
</body>
</html>
<?php
} else {
    header("location:index.html");
}