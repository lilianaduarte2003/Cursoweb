<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
	echo "Conexión OK";
}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>