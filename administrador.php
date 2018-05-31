<?php
session_start();
if (isset($_SESSION['usuario'])) {
	if (!isset($_SESSION['tiempo'])) {
		    $_SESSION['tiempo']=time();
		}
		else if (time() - $_SESSION['tiempo'] > 600) {
		    session_destroy();
		    /* Aquí redirecciona a la url especifica */
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
			.btn{
				width: 35%;
				height: 25%;
				margin-top: 7%;
				margin-left: 28%;
			}

			.bd{
				height: 25%;
				background: #A8A8A8;
				border-color: black;
			}

			.bd:hover{
				height: 25%;
				background: #A8A8A8;
				border-color: red;
				color: white;
			}

			.tablaBD{
				height: 25%;
				background: #A8A8A8;
				border-color: black;
			}

			.tablaBD:hover{
				height: 25%;
				background: #A8A8A8;
				border-color: red;
				color: white;
			}

			.eliminar{
				height: 25%;
				background: #A8A8A8;
				border-color: black;
			}

			.eliminar:hover{
				height: 25%;
				background: #A8A8A8;
				border-color: red;
			}

			.eliminar a{
				text-decoration: none;
				color: black;
			}

			.eliminar a:hover{
				color: white;
			}

			.foto{
				float: right;
				width: 5%;
				height: 5%;
				margin-right: 25%;
			}

			.foto img{
				width: 200px;
				height: 200px;
			}
		</style>
	</head>
		<body bgcolor="D2D8E2">	
		<div id="header">
			<ul class="nav">
				<h2>JUAN CARLOS CHAVARRIO CALLEJAS C.C. 7.178.930</h2>
				<h2>MODULO PRINCIPAL</h2>
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
		<div class="btn">
			<div class="foto">	
				<img src="juan.jpg" alt="">
			</div>
			<form action="crearBd.php" method="post">
				<input type="submit" value="Crear base de datos" class="bd">	
			</form>

			<form action="crearTablaBd.php" method="post">
				<input type="submit" value="Crear tabla en base de datos" class="tablaBd">	
			</form>

			<button class="eliminar"><a href="eliminarProductos.php">Eliminar productos</a></button>
			<br>
			<br>
			<a href="backup.php"><button class="eliminar">backup de la base de datos</button></a>
		</div>
	</body>
</html>
 <?php
} else {
    header("location:index.html");
}