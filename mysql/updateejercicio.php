<?php
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Julio' WHERE `usuarios`.`id` = 3");
	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Berenice' WHERE `usuarios`.`id` = 4");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo "se ha actualizado corretamente la base de datos";
}