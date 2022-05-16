<?php 

// Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor
define('PI', 3.14); // ,true) como tercer parametro no funciona en la version PHP8
define('NOMBRE', 'Marc');
// define('NOMBRE', 'Esteve');

echo NOMBRE;
echo '<br>';
// echo Pi;
echo PI  . '<br>';
// echo pi;
echo '<br>';
echo '<br>';
const CONSTANTE = 'Hola Mundo';

echo CONSTANTE . '<br>';
echo '<br>';

// En las variables si podemos cambiar el valor que se le asigno.
// VARIABLES
$nombre = " Esteve";
$nombre = "Marc";
echo $nombre; // Mostraria Marc en pantalla

$nombre = " Marc";

echo $nombre; // Mostraria Esteve en pantalla

?>
