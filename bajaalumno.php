<?php 

$server = "localhost";
$user = "root";
$password = "";
$base = "jebus";

$conexion = mysqli_connect($server,$user,$password,$base) or
			die("Problemas con la conexion");

$nombre = $_REQUEST['codigo'];

$registros=mysqli_query($conexion,"UPDATE alumnos SET activo = 0 
						WHERE nombre = '$nombre'");
mysqli_close($conexion);

echo "<script type='text/javascript'>
function redireccionar()
{
  alert('Registro borrado con exito')
  location.href='alumnos.php';
} 
setTimeout ('redireccionar()', 5); //tiempo expresado en milisegundos
</script>"
?> 