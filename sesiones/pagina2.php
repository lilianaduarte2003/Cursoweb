<?php 
session_start();



if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1>";
} else {
	echo 'No has iniciado sesión';
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
<h1>Página de Inicio</h1>

	<meta charset="UTF-8">
	<title>Página 2</title>
</head>
<body>
	<a href="cerrar.php">Cerrar sesión</a>;
	<br>
	<!-- <a href="13-index.php">Abrir sesión</a>; -->

</body>
</html>