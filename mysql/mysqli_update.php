<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `ejerciciocreate` SET `nombre` = 'Julio', `edad` = '38' WHERE `ejerciciocreate`.`ID` = 2");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo "se ha actualizado corretamente la base de datos";
}