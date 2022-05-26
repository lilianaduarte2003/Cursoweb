
//Practica 1. Ejercicio 3 y 4



<?php

$dias = array(
	'Lunes', 'Martes', 'Miércoles', 'Jueves', 
	'Viernes', 'Sábado', 'Domingo',
);

rsort($meses); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Días de la semana</title>
</head>
<body>
	<h1>Días de la semana</h1>
	<ul>
		
		<?php
			
			sort($dias);
			echo "ORDEN ALFABÉTICO<br>";
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
			
		?>
	</ul>
</body>
</html>


//Practica 1. Ejercicio 5

$color = negre;

<?php
    //Codi PHP
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4';
        public $color = 'negre';
        //Metodes
        public function imprimeix($tinta,$paper,$tamany){
            if ($tinta && $paper){
                echo 'Es pot imprimir en ' . $tamany . ' y en color ' . $color;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
  
</body>
</html>

<!-- Las clases y los objetos se utilizan para hacer que su código sea más eficiente y menos repetitivo al agrupar tareas similares.

Una clase se usa para definir las acciones y la estructura de datos utilizada para construir objetos. Los objetos se construyen utilizando esta estructura predefinida. -->

<!-- If Permite ejecutar instrucciones solo si se cumple una determinada condición y es verdadera.
Else Ejecuta instrucciones en caso de que la condicion If es falsa.
    El usuario tiene que escoger una opción y dependiendo la que escoja habra un resultado -->


