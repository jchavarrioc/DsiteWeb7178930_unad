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
			
			h1{
				text-align: center;
			}

			.formulario{
				width: 20%;
				margin-left: 40%;
			}
			.formulario label{
				margin-top: 2%;
			}

			.formulario input{
				margin-top: 2%;
			}

			#button{
				margin-left: 25%;
				background: #747171;
				color: white;
			}
		</style>
	</head>
		<body bgcolor="D2D8E2">	
		<div id="header">
			<ul class="nav">
				<h2>JUAN CARLOS CHAVARRIO CALLEJAS C.C. 7.178.930</h2>
				<h2>OPERACIONES CON ARRAYS</h2>
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

		<h1>Calculo de Numeros</h1>
		<div class="formulario">
			<form action="calculoTabla.php" method="post">
				<label for="a">Numero1</label>
				<input type="number" name="a">
				<br>
				<label for="b">Numero2</label>
				<input type="number" name="b">
				<br>
				<label for="c">Numero3</label>
				<input type="number" name="c">
				<br>
				<label for="d">Numero4</label>
				<input type="number" name="d">
				<br>
				<label for="e">Numero5</label>
				<input type="number" name="e">
				<br>
				<input id="button" type="submit" value="Calcular">
			</form>
		</div>
	</body>
</html>
 <?php
} else {
    header("location:index.html");
}