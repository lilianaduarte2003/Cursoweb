<?php 

$meses = array(
	'Enero ', 'Febrero ', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo count($meses);//función que cuenta valores de array y restamos -1 para saber que es el ultimo
echo "<br>";
$ultimo_mes = count($meses) - 1;  //guardas el último valor
echo $meses[$ultimo_mes]; //muestras la última posición del array
echo "<br>";

#Recordatorio de funciones
echo implode($meses);
echo "<br>";
echo gettype($meses);
echo "<br>";
echo'<br>';
var_dump($meses);
echo'<br>';
echo'<br>';
echo implode('<br>', $meses); #muestra todos los meses

?>