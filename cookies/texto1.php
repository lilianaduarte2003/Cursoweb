<?php 

if (isset($_COOKIE['font-size'])) {
	$tamaño = $_COOKIE['font-size'];
} else {
	$tamaño = '16px';
}
if (isset($_COOKIE['color'])) {
	$color = $_COOKIE['color'];
} else {
	$color = 'blue';
}
if (isset($_COOKIE['background-color'])) {
	$fondo = $_COOKIE['background-color'];
} else {
	$fondo = 'white';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Texto de prueba cookie</title>
	<style>
		p {
			font-size: <?php echo $tamaño; ?>;
			color: <?php echo $color; ?>;
			background-color: <?php echo $fondo; ?>;
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<a href="color.php">color.php</a> <a href="fondo.php">fondo.php</a> <a href="index-cookies.php">index-cookies.php</a>
</body>
</html>