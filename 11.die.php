<?php 

echo "Soy un echo";
// die(); //Deja de ejecutar el resto del código
//die()
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<h1>Hola Mundo</h1>
	 <?php die(); ?> <!--Las siguientes declaraciones no se estan ejecutando -->
	 <p> todo lo que se escriba despues del die no se muestra</p>
</body>
</html>