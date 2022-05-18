<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    
);


$marc = array('telefono' => 54743221, 'edad' => 35, 'ciudad' => 'Castelldefels', 'Transporte' => 'Moto');
$marc["Transporte"] = "Helicotero";
$meses [12] = "Mes inventado"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array asociativo también</title>
</head>
<body>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }

			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			foreach($marc as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>