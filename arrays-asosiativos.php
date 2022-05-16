<?php 

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas explícita.

$profesor = array('nombre' => 'Marc', 'telefono' => 665533, 'edad' => 35, 'apellido' => 'Esteve', 'ciudad' => 'Castelldefels');

# Igual que en los arrays indexados, en los asosiativos también podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve García';
$profesor['nombre'] = 'Marc';
$profesor['ciudad'] = 'Torrelles de Foix';
echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su teléfono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';
# 
echo '<br>';
echo "Ejercicio 2 de variables asociativas <br>";
echo '<br>';
echo 'El teléfono es ' . $profesor['telefono'] . ' de ' . $profesor['nombre'] . ' que vive en ' . $profesor['ciudad'] ;
echo '<br>';
$array = array(
    "1" => 3,
    "2" => "dsada",
    "1.5" => 1.5,
    "booleano" => true,
);
echo $array["1"] . '<br>';
echo $array["2"] . '<br>';
echo $array["1.5"] . '<br>';
echo $array["booleano"] . '<br>';
var_dump($array);
// Sintaxis corta
echo '<br><br>';
$otravaraiblearray = [
    "clave" => "valor1",
    "clave2" => "valor2",
    "clave3" => "valor3",
];
var_dump($otravaraiblearray);
//muestra var_drum 
?>