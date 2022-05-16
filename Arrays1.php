<?php 

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas explícita.

$profesor = array('nombre' => 'Marc', 'telefono' => 665533, 'edad' => 35, 'apellido' => 'Esteve', 'ciudad' => 'Castelldefels');

# Igual que en los arrays indexados, en los asosiativos también podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve García';

echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su teléfono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';

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
];
var_dump($otravaraiblearray);

?>