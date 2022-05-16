<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);




?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php
        
        
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
        
        
		<?php
        rsort ($meses);
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
        <?php
        sort ($meses);
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
	</ul>
</body>
</html>