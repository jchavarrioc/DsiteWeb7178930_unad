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
<html>
	<head> 
		<title>Menu Desplegable</title>
		<style type="text/css">
//TITULO DEL FORMULARIO
					
			* {
				margin:100px;	
				padding:100px;
			}
			
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

			.formulario{
				width: 23%;
				margin-top: 1%;
				margin-left: 40%;

			}
			
			.titulo{
			margin-top: 2%;
			text-align: center;
			color: #08256E;
		}
		</style>
	</head>
		<body bgcolor="D2D8E2">	
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
		<br>
		<hr>
		<div class="titulo">
			<h1>Buscar Productos</h1>
		</div>
		<div class="formulario">
			<form action="consultaProductos.php" method="get">
					<label for="">Buscar</label>
					<input type="text" name="codigo">
				<input type="submit">
			</form>
		</div>
	</body>
</html>
 <?php
} else {
    header("location:index.html");
}