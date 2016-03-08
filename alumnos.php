<?php 

$servidor = "localhost";
$usuario = "root";
$contra = "";
$base = "jebus";

$coneccion =mysqli_connect($servidor,$usuario,$contra,$base) or
							  die("Problemas con la coneccion");



$registros=mysqli_query($coneccion,"SELECT id_alumno, nombre, fecha_ingreso, activo FROM alumnos WHERE activo = 1")
or die("Problemas con la ejecucion de la query: ".mysqli_error($coneccion));

?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylealumnos.css">
	<link rel="icon" href="img/logo.ico" type="image/x-icon"/>
	<script type="text/javascript" src="javascript/validar.js"></script>
	<title>Lista alumnos</title>
</head>
<body onload="return informe();">
	
	<div class="contalumnos">
		
		<form action="">

		<header>
			
			<div id="cabecera">
			<img src="img/cabecera.png" alt="">
			</div>

			<div id="menu">
				<ul class="nav">
					<li id="alumnos"><span>Alumnos</span>
						<ul>
							<li id="submenu"><a href="alumnos.php" id="lista">Lista</a></li>
							<li id="submenu"><a href="" id="lista">Agregar</a></li>
						</ul>
					</li>
					<li id="pagos"><span>Pagos</span>
						<ul>
							<li id="submenu"><a href="" id="lista">Lista</a></li>
							<li id="submenu"><a href="" id="lista">
							Agregar</a></li>
							<li id="submenu"><a href="">Liquidaci&oacute;n</a></li>
						</ul>
					</li>
					<li id="backup"><span>Backup</span></li>
				</ul>
			</div>

		</header>

		<div id="tabla">
			<span id="info"></span>
			<fieldset>
				<legend>Alumnos</legend>
				
				<table cellspacing="0" cellpadding="5">

					
						<a id="btnagregar" href=""><img src="img/crear.png" alt=""></a>

					<tr>
						<th>Apellido y nombre</th>
						<th>Fecha de ingreso</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
					
					<?php 

						while ($reg = mysqli_fetch_array($registros)) 
						{
						echo"<tr>
						<td>".$reg["nombre"]."</td>
						<td>".$reg["fecha_ingreso"]."</td>
						<td><a href='#''><img src='img/editar.png' alt=''></a></td>
						<td><a onClick='return confirmar();' href='bajaalumno.php?codigo=".$reg["nombre"]."'><img src='img/eliminar.png' alt=''></a></td>
						</tr>";
						}
						mysqli_close($coneccion);
						?>

				</table>

			</fieldset>

		</div>

		</form>

	</div>

</body>
</html>