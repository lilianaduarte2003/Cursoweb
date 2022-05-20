<?php 

function calcular_area_hexagono($perimetro, $apotema){
	$resultado = ($perimetro * $apotema) / 2;
	return $resultado;
}

$area_hexagono = calcular_area_hexagono(13, 5);

echo 'El Hexagono tiene un area de ' . $area_hexagono . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6

?>