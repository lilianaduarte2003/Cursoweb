<?php
session_start();
//session_destroy();




$_SESSION['nombre'] = 'Marc';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Página de Inicio</h1>
	<p>Has cargado una nueva sesión</p>
	<a href="pagina2.php">Ir a la página 2</a>
	<br>
	<!-- <a> href="cerrar.php"Cerrar sesión</a>;  para agregar cerrar sesión
</body>
</html>
>