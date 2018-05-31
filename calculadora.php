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
	<title>MODULO CALCULADORA</title>
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
			
		</style>
</head>
<body bgcolor="D2D8E2">
	<div id="header">
			<ul class="nav">
				<h2>JUAN CARLOS CHAVARRIO CALLEJAS C.C. 7.178.930</h2>
				<h2>PROYECTO CONTROL DE INVENTARIOS ACTIVIDAD 1</h2>
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
	<center>
	<script language="javascript">

	//La variable opc donde se guarda la operación que queremos hacer

		var opc;

	//Proceso para calcular la operacion matematica

		function calcular()

	{

	//Se declaran las variables para almacenar los numeros capturados

		var num1=0,num2=0,resultado=0;

	//Captura de los valores en los textbox con variables tipo float

		num1=parseFloat(this.document.calculadora.numero1.value);

		num2=parseFloat(this.document.calculadora.numero2.value);

	//Dependiendo de la funcion damos el resultado

		switch(opc)

	{

		case 1: resultado=num1+num2;break;//sumar

		case 2: resultado=num1-num2;break;//restar

		case 3: resultado=num1*num2;break;//multiplicar

		case 4: resultado=num1/num2;break;//dividir

		case 5: resultado=Math.max(num1,num2);break;//Indica el valor mayor entre dos

		case 6: resultado=Math.min(num1,num2);break;//Indica el valor mínimo entre dos
		

 		default: resultado="Debe escoger una operacion";break;//Si no se ha seleccionado nada

	}

		alert("El resultado es = "+resultado);//damos el resultado en un mensaje

 	}
 	    	

	</script>

	<hr>

 

	<h2>MODULO CALCULADORA</h2>

	<form name="calculadora">

	<table border="0" bgcolor="lightblue" width="70%">

	<tbody><tr>

	<td>Número 1 </td><td><input name="numero1" value="0"></td>

	<td>Número 2 </td><td><input name="numero2" value="0"></td>

	</tr>

	<tr>

		<td><input name="operacion" onclick="opc=1;" type="radio">SUMA</td>

		<td><input name="operacion" onclick="opc=2;" type="radio">RESTA</td>

		<td><input name="operacion" onclick="opc=3;" type="radio">MULTIPLICACIÓN</td>

		<td><input name="operacion" onclick="opc=4;" type="radio">DIVISIÓN</td>

	</tr>

	<tr>

			<td><input name="operacion" onclick="opc=5;" type="radio">Máximo </td>

			<td><input name="operacion" onclick="opc=6;" type="radio">Mínimo </td>

			<td>Curso<input name="curso" value="18"></td>
			
			
	</tr>

	<tr>

		<td></td>

		<td><input onclick="calcular();" value="Calcular" type="button"></td>

		<td><input onclick="opc=0;" value="Borrar" type="reset"></td>

		<td><input onclick="window.close();" value="Salir" type="reset"></td>

		<td></td>

	</tr>

</tbody></table>

</form>
</tbody></table>

</form>
</center>

</body>

</html>
 <?php
} else {
    header("location:index.html");
}