<?php 

# Los arrays son como variables que nos permiten guardar multiples valores.

# Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro array llamado semana.
echo $semana[0] . '<br />'; //Lunes
echo $semana[1] . '<br />'; //Martes    
echo $semana[2] . '<br />'; //Miércoles
echo $semana[3] . '<br />'; //Jueves
echo $semana[4] . '<br />'; //Viernes
echo $semana[5] . '<br />'; //Sábado
echo $semana[6] . '<br />'; //Domingo
echo '<hr>';
echo implode('<br>', $semana); // muestra todos los dias de la semana seguidas string $glue ', '
echo '<hr>';
echo '<h2>Ejemplos campus</h2>';
$cars = array("Volvo","BMW","Toyota");
$coches = [1,2,3];
var_dump($cars);
echo "<br>";
var_dump($coches);
$cars[7] = "Opel";
echo "<br>";
var_dump($cars);
echo "<br>";
echo $cars[3];
echo "<br>";
$variable[3]='Eva';
$variable[27]=123;
var_dump($variable);
$coche = array(
    "modelo" => "Astra",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($coche);
// Sintaxis corta  
$array = [
    "clave" => "valor1",
    "clave2" => "valor2",
];
echo "<br>";
var_dump($array);
echo "<br>";
echo $coche[1];//El valor es 2
echo "<br>";
echo $coche["modelo"];//Warning pero da el valor "Astra"
echo "<br>";
echo "<br>";
foreach($semana as $dia){
    echo '<li>' . $dia . '</li>'; // echo $meses[0]; solo repetiria el primero
}

?>