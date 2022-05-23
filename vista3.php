<!-- 2022 23 05 EJERCICIO REQUIRE 
1. Creamos el arxhivo index3.php y el archivo vista3.php 
2. En el index ponemos un h1 y un require a continuación llamando a vista3.php
3. en vista pondremos un h2 que llamará a una variable $subtitular y un párrafo
4. En index  le daremos valor de string a la variable $subtitular
5. Repetiremos el paso 2 habiendo cambiado el valor de $subtitular -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Vista3</title>
</head>
<body>
	<h2><?php echo $subtitular; ?></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vel dolore eum beatae laboriosam asperiores consequatur dolor quod in, sapiente rem laudantium nesciunt adipisci nemo nulla quia suscipit quos tenetur.</p>
</body>
</html>