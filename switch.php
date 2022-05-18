<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Agosto';

switch($mes){
	case 'Diciembre':
		echo "Feliz Navidad!";
	break;

	case 'Enero':
		echo "Feliz Año Nuevo";
	
	break;
    case 'Junio':
		echo "Feliz San Juan!";

	break;

	case 'Agosto':
		echo "Feliz Vacaciones";

	break;

    default:
		echo "En este mes no se celebra nada";
	break;
}

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>